<?php
App::uses('TicketState', 'Model');

/**
 * TicketState Test Case
 *
 */
class TicketStateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ticket_state',
		'app.ticket',
		'app.project',
		'app.user',
		'app.comment',
		'app.epic',
		'app.epics_ticket',
		'app.project_member',
		'app.tagged',
		'app.tag',
		'app.ticket_container',
		'app.ticket_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TicketState = ClassRegistry::init('TicketState');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TicketState);

		parent::tearDown();
	}

}
