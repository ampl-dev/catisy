<?php
App::uses('TicketType', 'Model');

/**
 * TicketType Test Case
 *
 */
class TicketTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ticket_type',
		'app.ticket',
		'app.project',
		'app.epic',
		'app.user',
		'app.comment',
		'app.epics_ticket',
		'app.ticket_container',
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
		$this->TicketType = ClassRegistry::init('TicketType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TicketType);

		parent::tearDown();
	}

}
