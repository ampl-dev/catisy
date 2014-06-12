<?php
App::uses('Epic', 'Model');

/**
 * Epic Test Case
 *
 */
class EpicTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.epic',
		'app.project',
		'app.ticket',
		'app.ticket_container',
		'app.ticket_type',
		'app.ticket_state',
		'app.requestor_user',
		'app.owner_user',
		'app.user',
		'app.comment',
		'app.epics_ticket'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Epic = ClassRegistry::init('Epic');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Epic);

		parent::tearDown();
	}

}
