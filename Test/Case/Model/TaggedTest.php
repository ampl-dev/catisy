<?php
App::uses('Tagged', 'Model');

/**
 * Tagged Test Case
 *
 */
class TaggedTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tagged',
		'app.user',
		'app.comment',
		'app.tag'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tagged = ClassRegistry::init('Tagged');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tagged);

		parent::tearDown();
	}

}
