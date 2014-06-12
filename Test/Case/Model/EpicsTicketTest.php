<?php
App::uses('EpicsTicket', 'Model');

/**
 * EpicsTicket Test Case
 *
 */
class EpicsTicketTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.epics_ticket',
		'app.epic',
		'app.project',
		'app.ticket',
		'app.ticket_container',
		'app.ticket_type',
		'app.ticket_state',
		'app.requestor_user',
		'app.owner_user',
		'app.user',
		'app.comment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EpicsTicket = ClassRegistry::init('EpicsTicket');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EpicsTicket);

		parent::tearDown();
	}

}
