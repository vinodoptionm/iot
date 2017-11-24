<?php

namespace app\modules\admin;

use Yii;
use yii\web\View;
/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
	
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\controllers';
	
	//setting default controller for the module
	public $defaultRoute = 'dashboard';

	
	public $layout = 'admin-layout';
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
