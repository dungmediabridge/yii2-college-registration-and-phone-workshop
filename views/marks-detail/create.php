<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MarksDetail */

$this->title = Yii::t('app', 'Create Marks Detail');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Marks Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marks-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
