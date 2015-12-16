<?php

namespace app\controllers;
use yii\rest\ActiveController;
use yii\rest\Controller;
use yii\data\ActiveDataProvider;
//use yii\rest\IndexAction;
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
 			'query'=>$modelClass::findBySql('select * from core_brand'),
 			]);
 	}

}
