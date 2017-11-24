<?php

namespace app\modules\client;

/**
 * client module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\client\controllers';
	
	//setting default controller for the module
	public $defaultRoute = 'jobs';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
