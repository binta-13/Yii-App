<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
  <div class="row">
    <div class="col-md-6">
    <h1><?= Html::encode($this->title) ?></h1>  
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula euismod eleifend. Nulla eu leo ac nisl vestibulum dignissim vitae ac lacus. Aliquam erat volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc varius lacus at risus pharetra, id lacinia lectus auctor.</p>
    </div>
    <div class="col-md-6">
      <img src="https://ucarecdn.com/05f649bf-b70b-4cf8-90f7-2588ce404a08/-/resize/680x/" alt="Gambar About" class="img-fluid">
    </div>
  </div>
</div>

