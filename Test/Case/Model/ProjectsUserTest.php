<?php
App::uses('ProjectsUser', 'Model');

/**
 * ProjectsUser Test Case
 *
 */
class ProjectsUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.projects_user',
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
		$this->ProjectsUser = ClassRegistry::init('ProjectsUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectsUser);

		parent::tearDown();
	}

}
