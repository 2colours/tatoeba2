<?php
/* SentencesSentencesList Fixture generated on: 2014-04-15 03:33:12 : 1397525592 */
class SentencesSentencesListFixture extends CakeTestFixture {
	var $name = 'SentencesSentencesLists';

	var $fields = array(
		'sentences_list_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'sentence_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('list_id' => array('column' => array('sentences_list_id', 'sentence_id'), 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'sentences_list_id' => '1',
			'sentence_id' => '4'
		),
		array(
			'sentences_list_id' => '1',
			'sentence_id' => '8'
		),
	);
}
