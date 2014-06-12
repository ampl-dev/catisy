<?php

App::uses('AppModel', 'Model');

/**
 * Ticket Model
 *
 * @property Project $Project
 * @property TicketContainer $TicketContainer
 * @property TicketType $TicketType
 * @property TicketState $TicketState
 * @property User $RequestingUser
 * @property User $OwnerUser
 * @property Epic $Epic
 */
class Ticket extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'project_id' => array(
            'uuid' => array(
                'rule' => array('uuid'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'ticket_type_id' => array(
            'uuid' => array(
                'rule' => array('uuid'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'requestor_user_id' => array(
            'uuid' => array(
                'rule' => array('uuid'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'name' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Project' => array(
            'className' => 'Project',
            'foreignKey' => 'project_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'TicketContainer' => array(
            'className' => 'TicketContainer',
            'foreignKey' => 'ticket_container_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'TicketType' => array(
            'className' => 'TicketType',
            'foreignKey' => 'ticket_type_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'TicketState' => array(
            'className' => 'TicketState',
            'foreignKey' => 'ticket_state_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'RequestingUser' => array(
            'className' => 'User',
            'foreignKey' => 'requestor_user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'AssignedUser' => array(
            'className' => 'User',
            'foreignKey' => 'assigned_user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $hasAndBelongsToMany = array(
        'Epic' => array(
            'className' => 'Epic',
            'joinTable' => 'epics_tickets',
            'foreignKey' => 'ticket_id',
            'associationForeignKey' => 'epic_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
        )
    );

    /**
     * List of behaviors to load when the model object is initialized. Settings can be
     * passed to behaviors by using the behavior name as index. Eg:
     *
     * @var array
     */
    public $actsAs = array(
        'Containable',
        'Utils.Sluggable' => array(
            'label' => 'name',
            'separator' => '-',
            'length' => 100,
            'update' => false,
            'unique' => true,
        ),
        'Utils.SoftDelete' => array(
            'is_deleted' => 'deleted'
        )
    );

}
