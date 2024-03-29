<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 * @property Content $Content
 */
class Category extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
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
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Content' => array(
			'className' => 'Content',
			'joinTable' => 'categories_contents',
			'foreignKey' => 'category_id',
			'associationForeignKey' => 'content_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

	public $belongsTo = array(
		'Parent'=> array(
			'className'=>'Category',
			'foreignKey'=>'parent_id',
			'primaryKey'=>'id'
			)

		);


	public function findSortByField($sort = null){

		if(!isset($sort)){
			$sort = array('order' => array('Category.sort'));
		}else{
			$sort = array('order' => array("Category.$sort"));

		}

		return $this->find('all',$sort);


	}


}
