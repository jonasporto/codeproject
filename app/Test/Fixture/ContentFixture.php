<?php
/**
 * ContentFixture
 *
 */
class ContentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 280, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'subtittle' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 280, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 520, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sort' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'date', 'null' => true, 'default' => null),
		'modified' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'title' => 'Lorem ipsum dolor sit amet',
			'subtittle' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'sort' => 1,
			'created' => '2014-03-02',
			'modified' => '2014-03-02'
		),
	);

}
