<?php
/**
 * TaggedFixture
 *
 */
class TaggedFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tagged';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'model_alias' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'model_key' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tag_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'user_id' => array('column' => 'user_id', 'unique' => 0),
			'model_alias' => array('column' => 'model_alias', 'unique' => 0),
			'model_key' => array('column' => 'model_key', 'unique' => 0),
			'tag_id' => array('column' => 'tag_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '53992ccf-b084-4e93-a03c-086c387ed303',
			'user_id' => 'Lorem ipsum dolor sit amet',
			'model_alias' => 'Lorem ipsum dolor sit amet',
			'model_key' => 'Lorem ipsum dolor sit amet',
			'tag_id' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-06-12 04:30:07',
			'modified' => '2014-06-12 04:30:07'
		),
	);

}
