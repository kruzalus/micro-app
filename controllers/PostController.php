<?php
namespace micro\controllers;

use yii\rest\ActiveController;

class PostController extends ActiveController
{
	public $modelClass = 'micro\models\Post';

	public function behaviors()
	{
		// удаляем rateLimiter, требуется для аутентификации пользователя
		$behaviors = parent::behaviors();
		unset($behaviors['rateLimiter']);
		return $behaviors;
	}

	public function createAction($id)
	{
		$get = $_GET;
		var_dump($get);

		return 'dddd';
	}
}