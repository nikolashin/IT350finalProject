<?php
/**
 * DriverFixture
 *
 */
class DriverFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'Driver';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'DriverId' => array('type' => 'string', 'null' => false, 'length' => 20, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'LicenceNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Insurance' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'LicenseType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Experience' => array('type' => 'float', 'null' => true, 'default' => null),
		'PayRate' => array('type' => 'float', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'DriverId', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'DriverId' => 'Lorem ipsum dolor ',
			'LicenceNo' => 'Lorem ipsum dolor ',
			'Name' => 'Lorem ipsum dolor ',
			'Insurance' => 'Lorem ipsum dolor ',
			'LicenseType' => 'Lorem ipsum dolor ',
			'Experience' => 1,
			'PayRate' => 1
		),
	);

}
