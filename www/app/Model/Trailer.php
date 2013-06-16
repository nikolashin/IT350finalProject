<?php
App::uses('AppModel', 'Model');
/**
 * Trailer Model
 *
 */
class Trailer extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'Trailer';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'tableId';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tableId';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tableId' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'TrailerNum' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
