<?php

use yii\bootstrap4\Html;

?>
<style media="screen">
.bimg{
    background:url('/img/techride_moutains-HQ_nobrand.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    display: table;
    min-height: 100vh;
    width: 100%;
    padding: 0;
} 

.button-primary{
    background: #102640;
    box-shadow: 0 0 0px rgba( 0,0,0,0.8 );  /* box-shadow: none; */
	height: auto;
	line-height: 20px;
    padding: 13px;
    text-shadow: none;
}

.button-primary:hover{
	background: #bad830;
	border-color: #ffffff;
}
#LoginForm {
    margin-top: 20px;
    margin-left: 0;
    padding: 0 24px 12px;
    background: #fff;
    -webkit-box-shadow: none;
    box-shadow: none;
}

.login-logo h1 a {
	background-image: url("/img/brand_2019.svg")  !important;
    background-size: 150px;
    background-position: center top;
    background-repeat: no-repeat;
    color: #444;
    width: 150px;
    font-size: 20px;
    line-height: 1.3em;
    margin: 0 auto 25px;
    padding: 0;
    text-indent: -9999px;
    outline: 0;
    display: block;
}

</style>
<?php $this->beginBody(); ?>

<div class="container body bimg">
    <div class="main_container">
        <?= $content ?>
    </div>
</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<!-- /footer content -->
<?php $this->endBody(); ?>