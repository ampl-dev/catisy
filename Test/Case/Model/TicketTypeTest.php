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
		'app.user',
		'app.comment',
		'app.epic',
		'app.epics_ticket',
		'app.project_member',
		'app.tagged',
		'app.tag',
		'app.ticket_container',
		'app.ticket_state'
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
