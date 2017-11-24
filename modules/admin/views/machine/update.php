<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\machines */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Machines',
]) . $model->machine_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Machines'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->machine_id, 'url' => ['view', 'id' => $model->machine_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="machines-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
