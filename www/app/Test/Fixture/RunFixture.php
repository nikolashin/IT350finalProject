<?php
/**
 * RunFixture
 *
 */
class RunFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'Run';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RunId' => array('type' => 'string', 'null' => false, 'length' => 20, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'JobId' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'TruckId' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'DriverId' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ToSite' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'FromSite' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'StartDate' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'Quantity' => array('type' => 'integer', 'null' => true, 'default' => null),
		'Mileage' => array('type' => 'float', 'null' => true, 'default' => null),
		'EndDate' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'RunId', 'unique' => 1)
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
			'RunId' => 'Lorem ipsum dolor ',
			'JobId' => 'Lorem ipsum dolor ',
			'TruckId' => 'Lorem ipsum dolor ',
			'DriverId' => 'Lorem ipsum dolor ',
			'ToSite' => 'Lorem ipsum dolor ',
			'FromSite' => 'Lorem ipsum dolor ',
			'StartDate' => '2013-06-09 04:11:50',
			'Quantity' => 1,
			'Mileage' => 1,
			'EndDate' => '2013-06-09 04:11:50'
		),
	);

}
