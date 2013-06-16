<?php
/**
 * TrailerFixture
 *
 */
class TrailerFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'Trailer';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'TrailerId' => array('type' => 'string', 'null' => false, 'length' => 20, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Registration' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PlateNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Capacity' => array('type' => 'float', 'null' => true, 'default' => null),
		'Mileage' => array('type' => 'float', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'TrailerId', 'unique' => 1)
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
			'TrailerId' => 'Lorem ipsum dolor ',
			'Registration' => 'Lorem ipsum dolor ',
			'PlateNo' => 'Lorem ipsum dolor ',
			'Capacity' => 1,
			'Mileage' => 1
		),
	);

}
