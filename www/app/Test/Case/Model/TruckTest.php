<?php
App::uses('Truck', 'Model');

/**
 * Truck Test Case
 *
 */
class TruckTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.truck'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Truck = ClassRegistry::init('Truck');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Truck);

		parent::tearDown();
	}

}
