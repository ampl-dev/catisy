<?php
App::uses('TicketContainer', 'Model');

/**
 * TicketContainer Test Case
 *
 */
class TicketContainerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ticket_container',
		'app.ticket',
		'app.project',
		'app.epic',
		'app.user',
		'app.comment',
		'app.epics_ticket',
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
		$this->TicketContainer = ClassRegistry::init('TicketContainer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TicketContainer);

		parent::tearDown();
	}

}
