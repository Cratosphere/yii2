<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Signups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signup-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Signup', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'lastModified',
            'dateCreated',
            'salutation',
            'fName',
            // 'mName',
            // 'lName',
            // 'address1',
            // 'address2',
            // 'city',
            // 'state',
            // 'zip',
            // 'gender',
            // 'phone',
            // 'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
