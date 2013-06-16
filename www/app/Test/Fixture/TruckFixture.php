<?php
/**
 * TruckFixture
 *
 */
class TruckFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'Truck';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'TruckId' => array('type' => 'string', 'null' => false, 'length' => 20, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'LicenceDOT' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Mileage' => array('type' => 'float', 'null' => true, 'default' => null),
		'PlateNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'TruckId', 'unique' => 1)
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
			'TruckId' => 'Lorem ipsum dolor ',
			'LicenceDOT' => 'Lorem ipsum dolor ',
			'Mileage' => 1,
			'PlateNo' => 'Lorem ipsum dolor '
		),
	);

}
