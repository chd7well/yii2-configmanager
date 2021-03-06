<?php

/*
 * This file is part of the Jultatools project.
 *
 * (c) chd7well project <http://github.com/chd7well>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View                 $this
 * @var chd7well\configmanager\models\Parameter    $parameter
 * @var chd7well\configmanager\Module         $module
 */

$userconfig = $model;
$this->title = Yii::t('configmanager', 'Set your user Config-Set ');
$this->params['breadcrumbs'][] = ['label' => Yii::t('configmanager', 'Config'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


    <div class="alert alert-success">
        <?= Yii::t('configmanager', 'User Configuration-Set saved') ?>
    </div>



<?php $form = ActiveForm::begin([
    'enableAjaxValidation'   => true,
    'enableClientValidation' => false
]); ?>

<!-- 
<div class="panel panel-default">
    <div class="panel-body">
        <?= Html::submitButton(Yii::t('configmanager', 'Save'), ['class' => 'btn btn-primary btn-sm']) ?>
        
    </div>
</div>-->

<div class="panel panel-default">
    <div class="panel-heading">
        <?= Html::encode($this->title) ?>
    </div>
    <div class="panel-body">
        <?= $this->render('_userconfig', ['form' => $form, 'config' => $userconfig]) ?>
        <?= Html::submitButton(Yii::t('configmanager', 'Save'), ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
</div>






<?php ActiveForm::end(); ?>
