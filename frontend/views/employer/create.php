<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Employer $model */

$this->title = 'Create employer';
$this->params['breadcrumbs'][] = ['label' => 'Employers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
