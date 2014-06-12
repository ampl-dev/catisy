<?php
App::uses('ProjectMember', 'Model');

/**
 * ProjectMember Test Case
 *
 */
class ProjectMemberTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project_member',
		'app.project',
		'app.user',
		'app.comment',
		'app.epic',
		'app.ticket',
		'app.ticket_container',
		'app.ticket_type',
		'app.ticket_state',
		'app.epics_ticket',
		'app.tagged',
		'app.tag'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectMember = ClassRegistry::init('ProjectMember');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectMember);

		parent::tearDown();
	}

}
