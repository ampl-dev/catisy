<?php
/**
 * TicketFixture
 *
 */
class TicketFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'project_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ticket_container_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ticket_type_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ticket_state_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'requestor_user_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'owner_user_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'slug' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'ticket_container_id' => array('column' => 'ticket_container_id', 'unique' => 1),
			'slug' => array('column' => 'slug', 'unique' => 1),
			'ticket_type_id' => array('column' => 'ticket_type_id', 'unique' => 0),
			'ticket_state_id' => array('column' => 'ticket_state_id', 'unique' => 0),
			'requestor_user_id' => array('column' => 'requestor_user_id', 'unique' => 0),
			'owner_user_id' => array('column' => 'owner_user_id', 'unique' => 0),
			'project_id' => array('column' => 'project_id', 'unique' => 0)
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
			'id' => '53991a87-e184-40bf-870e-20a4387ed303',
			'project_id' => 'Lorem ipsum dolor sit amet',
			'ticket_container_id' => 'Lorem ipsum dolor sit amet',
			'ticket_type_id' => 'Lorem ipsum dolor sit amet',
			'ticket_state_id' => 'Lorem ipsum dolor sit amet',
			'requestor_user_id' => 'Lorem ipsum dolor sit amet',
			'owner_user_id' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-06-12 03:12:07',
			'modified' => '2014-06-12 03:12:07'
		),
	);

}
