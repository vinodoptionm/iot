<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
/* @var $this \yii\web\View */
/* @var $content string */


if (Yii::$app->controller->action->id === 'login') { 
/**
 * Do not use this code in your template. Remove it. 
 * Instead, use the code  $this->layout = '//main-login'; in your controller.
 */
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {

    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }

    dmstr\web\AdminLteAsset::register($this);

    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

               <!-- User Account: style can be found in dropdown.less -->

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                        <span class="hidden-xs">Alexander Pierce</span>
                    </a>
                    <ul class="dropdown-menu">
                       
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                
                            </div>
                            <div class="pull-right">
                                <?= Html::a(
                                    'Sign out',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>

              
            </ul>
        </div>
    </nav>
</header>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

       
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                		['label' => 'Dashboard', 'url' => ['/admin/dashboard'],'icon' => 'file-code-o',],
                     [
                        'label' => 'Users',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Manage User', 'icon' => 'file-code-o', 'url' => ['/admin/user'],],
                            ['label' => 'Add User', 'icon' => 'dashboard', 'url' => ['/admin/user/create'],],
                            
                        ],
                    ],
                		
                		[
                				'label' => 'Inventory',
                				'icon' => 'share',
                				'url' => '#',
                				'items' => [
                						['label' => 'Manage Inventory', 'icon' => 'file-code-o', 'url' => ['/admin/machine'],],
                						['label' => 'Add Inventory', 'icon' => 'dashboard', 'url' => ['/admin/machine/create'],],
                						
                				],
                		],
                	
                		
                    ['label' => 'Logout', 'url' => ['/site/logout'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>

        <div class="content-wrapper">


    <section class="content">
        
        <?= $content ?>
    </section>
</div>

<footer class="main-footer">
    
    
</footer>

<!-- Control Sidebar -->
<!-- <aside class="control-sidebar control-sidebar-dark"> -->
    <!-- Create the tabs -->
<!--     <ul class="nav nav-tabs nav-justified control-sidebar-tabs"> -->
<!--         <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li> -->
<!--         <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li> -->
<!--     </ul> -->
<!--     <ul class="nav nav-tabs nav-justified control-sidebar-tabs"> -->
<!--         <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li> -->
<!--         <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li> -->
<!--     </ul> -->
    <!-- Tab panes -->
    
<!-- </aside> -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
     
     
<div class='control-sidebar-bg'></div>

    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php } ?>
