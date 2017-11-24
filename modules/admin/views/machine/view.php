<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\machines */

$this->title = $model->machine_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Machines'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="machines-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->machine_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->machine_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'machine_id',
            'machine_name',
            'user_id',
            'created_by',
            'created_date',
            'updated_by',
            'updated_date',
        ],
    ]) ?>

</div>
