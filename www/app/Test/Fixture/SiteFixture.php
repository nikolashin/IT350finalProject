<?php
/**
 * SiteFixture
 *
 */
class SiteFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'Site';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Location' => array('type' => 'string', 'null' => false, 'length' => 20, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'JobId' => array('type' => 'string', 'null' => false, 'length' => 20, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'SiteName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'SiteType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('Location', 'JobId'), 'unique' => 1)
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
			'Location' => 'Lorem ipsum dolor ',
			'JobId' => 'Lorem ipsum dolor ',
			'SiteName' => 'Lorem ipsum dolor ',
			'SiteType' => 'Lorem ipsum dolor '
		),
	);

}
