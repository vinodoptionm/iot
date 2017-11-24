<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class CompanyController extends Controller
{
    public $layout = 'admin-layout';
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
