<?php

namespace Album\Form;

use Zend\Form\Form;

class AlbumForm extends Form
{
	public function __construct($name=null)
	{
		parent::__construct($name=null);
		
		$this->add([
			'name'=>'id',
			'type'=>'hidden',
		]);
		
		$this->add([
			'name'=>'title',
			'type'=>'text',
			'options'=>[
				'label'=>'Title',
			],
		]);
		
		$this->add([
			'name'=>'artist',
			'type'=>'text',
			'options'=>[
				'label'=>'Artist',
			],
		]);
		
		$this->add([
			'name'=>'submit',
			'type'=>'submit',
			'attribute'=>[
				'values'=>'Go',
				'id'=>'SubmitButton',
			],
		]);
		
	}
	
}



?>