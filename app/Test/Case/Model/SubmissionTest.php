<?php
App::uses('Submission', 'Model');

/**
 * Submission Test Case
 *
 */
class SubmissionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.submission'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Submission = ClassRegistry::init('Submission');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Submission);

		parent::tearDown();
	}

}
