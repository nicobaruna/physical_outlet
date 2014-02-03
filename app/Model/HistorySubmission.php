<?php
App::uses('AppModel', 'Model');
/**
 * HistorySubmission Model
 *
 * @property Submission $Submission
 * @property Agen $Agen
 */
class HistorySubmission extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'submission_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'agen_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tanggal' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'comment' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Submission' => array(
			'className' => 'Submission',
			'foreignKey' => 'submission_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Agen' => array(
			'className' => 'Agen',
			'foreignKey' => 'agen_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
