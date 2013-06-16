<?php
/**
 * JobFixture
 *
 */
class JobFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'Job';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'JobId' => array('type' => 'string', 'null' => false, 'length' => 20, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'HiringCompany' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'WorkType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'StartDate' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'Rate' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'FuelSurcharge' => array('type' => 'float', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'JobId', 'unique' => 1)
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
			'JobId' => 'Lorem ipsum dolor ',
			'HiringCompany' => 'Lorem ipsum dolor ',
			'WorkType' => 'Lorem ipsum dolor ',
			'StartDate' => '2013-06-09 04:09:59',
			'Rate' => 1,
			'FuelSurcharge' => 1
		),
	);

}
