<?php
/* WallThreadsLastMessage Fixture generated on: 2014-04-15 17:08:46 : 1397574526 */
class WallThreadFixture extends CakeTestFixture {
	var $name = 'WallThread';
	var $table = 'wall_threads_last_message';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'last_message_date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '1',
			'last_message_date' => '2014-04-15 16:38:36'
		),
	);
}
