<?php
App::uses('Project', 'Model');

/**
 * Project Test Case
 *
 */
class ProjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project',
		'app.epic',
		'app.user',
		'app.comment',
		'app.ticket',
		'app.ticket_container',
		'app.ticket_type',
		'app.ticket_state',
		'app.requestor_user',
		'app.owner_user',
		'app.epics_ticket'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Project = ClassRegistry::init('Project');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Project);

		parent::tearDown();
	}

}
