<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\IrModuleModule */

$this->title = Yii::t('Backend', 'Update {modelClass}: ', [
    'modelClass' => 'Ir Module Module',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('Backend', 'Ir Module Modules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('Backend', 'Update');
?>
<div class="ir-module-module-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
