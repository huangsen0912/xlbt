<?php

namespace app\controllers;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;

class BrandController extends ActiveController
{
	public $modelClass='app\models\Brand';
 	public $serializer = [
 		'class' => 'yii\rest\Serializer',
 		'collectionEnvelope'=>'items',
 	];
 	public function actions(){
 		$actions = parent::actions();
 		$actions['index']['prepareDataProvider']=[$this,'prepareDataProvider'];
 		return $actions;
 	}
 	public function prepareDataProvider(){
		$modelClass=$this->modelClass;
 		return new ActiveDataProvider([
 			'query'=>$modelClass::find(),
 			]);
 	}

}
