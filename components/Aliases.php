<?php
namespace app\components;

use Yii;
use yii\base\Component;


class Aliases extends Component
{
    public function init() 
    {
       //Yii::setAlias('@admin_module', Yii::getAlias('@web').'/admin');
    	Yii::setAlias('@login', Yii::getAlias('@web').'/login');
    	Yii::setAlias('@admin_module', Yii::getAlias('@web').'/'.\Yii::$app->params['admin_module_name']);
    	Yii::setAlias('@client_module', Yii::getAlias('@web').\Yii::$app->params['client_module_name']);
       Yii::setAlias('@images_url', Yii::getAlias('@webroot').'/images');
       Yii::setAlias('@images_save_url', Yii::getAlias('@web').'/web/images');
       Yii::setAlias('@post_images_save_url', Yii::getAlias('@webroot').'/images/posts');
       Yii::setAlias('@post_images_url', Yii::getAlias('@web').'/images/posts');
       Yii::setAlias('@root', realpath(dirname(__FILE__).'/../../'));
    }
    
}

//sample
// \Yii::getAlias('@post_images_save_url');