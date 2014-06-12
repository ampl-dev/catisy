<?php

/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 */
App::uses('Model', 'Model');
App::uses('AuthComponent', 'Controller/Component');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

    /**
     * Whether or not to cache queries for this model. This enables in-memory
     * caching only, the results are not stored beyond the current request.
     *
     * @var boolean
     */
    public $cacheQueries = true;

    /**
     * List of behaviors to load when the model object is initialized. Settings can be
     * passed to behaviors by using the behavior name as index. Eg:
     *
     * @var array
     */
    public $actsAs = array('Containable');

    /**
     * Number of associations to recurse through during find calls. Fetches only
     * the first level by default.
     *
     * @var integer
     */
    public $recursive = -1;

    public function __construct($id = false, $table = null, $ds = null) {
        parent::__construct($id, $table, $ds);
        if (AuthComponent::user()) {
            $this->currentUser = AuthComponent::user();
            $this->currentUser_id = AuthComponent::user('id');
        } else {
            $this->currentUser = array();
            $this->currentUser_id = 0;
        }
    }

    /**
     * Called before each find operation. Return false if you want to halt the find
     * call, otherwise return the (modified) query data.
     *
     * @param array $query Data used to execute this query, i.e. conditions, order, etc.
     * @return mixed true if the operation should continue, false if it should abort; or, modified
     *  $query to continue with new $query
     */
    public function beforeFind($query) {
        return $query;
    }

    /**
     * Returns true if a record with particular ID exists.
     * Modified to make use of the SoftDelete feature on models that have it attached
     *
     * If $id is not passed it calls `Model::getID()` to obtain the current record ID,
     * and then performs a `Model::find('count')` on the currently configured datasource
     * to ascertain the existence of the record in persistent storage.
     *
     * @param integer|string $id ID of record to check for existence
     * @return boolean True if such a record exists
     */
    public function exists($id = null) {
        if ($this->Behaviors->attached('SoftDelete')) {
            return $this->existsAndNotDeleted($id);
        } else {
            return parent::exists($id);
        }
    }

    /**
     * Returns true if a record with particular ID exists but does no check if
     * it has been softDeleted
     * 
     * Modified to make use of the SoftDelete feature on models that have it attached
     *
     * @param integer|string $id ID of record to check for existence
     * @return boolean True if such a record exists
     */
    public function existsAndMaybeDeleted($id) {
        if ($this->Behaviors->attached('SoftDelete')) {
            $this->softDelete(false);
            $exists = $this->hasAny(array($this->alias.'.'.$this->primaryKey => $id));
            $this->softDelete(true);
            return $exists;
        } else {
            return parent::exists($id);
        }
    }

    /**
     * Removes record for given ID. If no ID is given, the current ID is used. Returns true on success.
     * Modified to make use of the SoftDelete feature on models that have it attached
     * 
     * @param integer|string $id ID of record to delete
     * @param boolean $cascade Set to true to delete records that depend on this record
     * @return boolean True on success
     * @link http://book.cakephp.org/2.0/en/models/deleting-data.html
     */
    public function delete($id = null, $cascade = true) {
        $result = parent::delete($id, $cascade);
        if ($result === false && $this->Behaviors->enabled('SoftDelete')) {
            return (bool) $this->field('is_deleted', array('is_deleted' => true));
        }
        return $result;
    }

    public function getLastQuery() {
        $dbo = $this->getDatasource();
        $logs = $dbo->getLog();
        $lastLog = end($logs['log']);
        return $lastLog['query'];
    }

    public function getQueryLog() {
        $dbo = $this->getDatasource();
        $logs = $dbo->getLog();
        return $logs;
    }

    public function fields($type = false) {
        $schema = $this->schema();
        if (!$type) {
            $_fields = array_keys($schema);
        } else {
            foreach ($schema as $field => $metadata) {
                if ((is_string($type) && $metadata['type'] == $type) || (is_array($type) && in_array($metadata['type'], $type))) {
                    $_fields[] = $field;
                }
            }
        }
        return $_fields;
    }

    public function getAssociated($type = null, $associatedkey = null) {
        $assoc = parent::getAssociated($type);
        if ($type && $associatedkey && array_key_exists($associatedkey, $assoc)) {
            return $assoc[$associatedkey];
        } elseif ($type && $associatedkey && !array_key_exists($associatedkey, $assoc)) {
            return false;
        } else {
            return $assoc;
        }
    }
}
