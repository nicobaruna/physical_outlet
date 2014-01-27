<?php
/**
 * SubmissionFixture
 *
 */
class SubmissionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'company_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'agen_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'reporter_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'service_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'tanggal' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'note' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'flag' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_company_id' => array('column' => 'company_id', 'unique' => 0),
			'fk_agen_id' => array('column' => 'agen_id', 'unique' => 0),
			'fk_reporter_id' => array('column' => 'reporter_id', 'unique' => 0),
			'fk_service_id' => array('column' => 'service_id', 'unique' => 0)
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
			'id' => 1,
			'company_id' => 1,
			'agen_id' => 1,
			'reporter_id' => 1,
			'service_id' => 1,
			'tanggal' => '2014-01-27 14:04:32',
			'note' => 'Lorem ipsum dolor sit amet',
			'flag' => 1
		),
	);

}
