<?php
App::uses('Trailer', 'Model');

/**
 * Trailer Test Case
 *
 */
class TrailerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.trailer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Trailer = ClassRegistry::init('Trailer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Trailer);

		parent::tearDown();
	}

}
