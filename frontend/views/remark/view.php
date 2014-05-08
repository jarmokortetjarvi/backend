<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var common\models\Remark $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Remarks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="remark-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'company_id' => $model->company_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'company_id' => $model->company_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'description',
            'event_date',
            'create_date',
            'significance',
            'company_id',
        ],
    ]) ?>

</div>
