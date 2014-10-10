<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\IrModuleModule */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('Backend', 'Ir Module Modules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ir-module-module-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'state',
            'name',
            'category.name:text:'.Yii::t('Backend', 'Category'),
            'writeU.partner.name:text:'.Yii::t('Backend', 'Installed by'),
            'write_date',
            'website',
            'summary',
            'author',
            'latest_version',
            'shortdesc',
            'category_id',
            'description:ntext',
            'application:boolean',
            'demo:boolean',
            'web:boolean',
            'license',
            'sequence',
            'auto_install:boolean',
            'menus_by_module:ntext',
            'maintainer',
            'contributors:ntext',
            'views_by_module:ntext',
            'reports_by_module:ntext',
            'url:url',
            'published_version',
        ],
    ]) ?>
    
    <?= Html::a(Yii::t('Backend', 'Back'), ['index'], ['class' => 'btn btn-danger']) ?>

</div>
