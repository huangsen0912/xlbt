<?php

namespace app\controllers;
use yii\rest\ActiveController;
class BrandController extends ActiveController
{
	public $modelClass='app\models\Brand';
 	public $serializer = [
 		'class' => 'yii\rest\Serializer',
 		'collectionEnvelope'=>'items',
 	];
}
