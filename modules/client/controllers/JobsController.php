<?php

namespace app\modules\client\controllers;

use yii\web\Controller;

/**
 * Default controller for the `client` module
 */
class JobsController extends Controller
{
   public $layout = 'client-layout';
   /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
	 public function actionCreate()
    {
        return $this->render('add');
    }
	 public function actionView()
    {
        return $this->render('view');
    }
}
