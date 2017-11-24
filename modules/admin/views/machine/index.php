<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Machines');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="machines-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Machines'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'machine_id',
            'machine_name',
            'user_id',
            'created_by',
            'created_date',
            // 'updated_by',
            // 'updated_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
