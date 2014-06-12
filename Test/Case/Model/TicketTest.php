<?php
App::uses('Ticket', 'Model');

/**
 * Ticket Test Case
 *
 */
class TicketTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ticket',
		'app.project',
		'app.epic',
		'app.user',
		'app.comment',
		'app.epics_ticket',
		'app.ticket_container',
		'app.ticket_type',
		'app.ticket_state',
		'app.requestor_user',
		'app.owner_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ticket = ClassRegistry::init('Ticket');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ticket);

		parent::tearDown();
	}

}
