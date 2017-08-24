<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model UserModel */


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\models\UserModel ;

$this->title = '';
?>
<!--<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>-->

<!--********************************************************************************-->

<script>


    elt1 =document.getElementById("99");
    elt1.parentNode.removeChild(elt1);

</script>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img alt="Mango" src="logo.jpg" class="navbar-brand">
      <a class="navbar-brand" href="index.html">
        ISSATSO
      </a>
    </div>

    <div id="navbar" class="navbar-collapse collapse" ng-controller="loginCtrl">
      <!---------------------------------------------------------------------------------->


<div class="navbar-form navbar-right">
      <?php $form = ActiveForm::begin(['id' => 'login-form','action'=>['/site/login']],['options'=>[
        'class'=>'avbar-form navbar-right','role'=>'form']]); ?>

      <?= $form->field($model, 'username',['options'=>[
        'tag'=>'div',
        'class'=>'input-group'],
        'template'=>'{input} <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i>'
        ])->textInput(['autofocus' => true,'class'=>'form-control','placeholder'=>'Email','ng-model'=>'username']) ?>

      <?= $form->field($model, 'password',['options'=>[
        'tag'=>'div',
        'class'=>'input-group'],
        'template'=>'{input}  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>',
        ])->passwordInput(['class'=>'form-control','placeholder'=>'Password','ng-model'=>'password']) ?>

        <?= Html::submitButton('Login', ['class'=>'btn btn-info','name' => 'login-button'],['option'=>[
          'tag'=>'<i class="glyphicon glyphicon-log-in"></i>']])
       ?>


      <?php ActiveForm::end(); ?>

</div>
<!--**********************************************************
    
     <form name="myLogin" class="navbar-form navbar-right" role="form" id="myLogin">

        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input id="username" type="email" class="form-control" name="username" value="" placeholder="Email" ng-model="username">
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password" ng-model="password">
        </div>
        <button ng-click="login()" class="btn btn-warning"><i class="glyphicon glyphicon-log-in"></i> Login</button>

      </form>-->
      <!---------------------------------------------------------------------------------->
    </div><!--/.nav-collapse -->
  </div>
</nav>

<!--fin navigation-->
 <div class="container">
    <div class="col-lg-8">
      <div class="jumbotron">
        <center>
          <img alt="Mango" src="logo.jpg" class="">
          <h1>Bienvenue chez notre Portail ISSATSO </h1>
          <h2>Le réseau Social pour les étudiants de  l'ISSATSO.</h2>
          <button class="btn btn-info"><i class="glyphicon glyphicon-play-circle"></i>Inscrivez-vous</button>
        </div>
      </center>
    </div>
    <div class="col-md-4" ng-controller="registrationCtrl">
<!--------------form SINGUN UP-------------->


        <form role="form">
            <div class="col-md-12">
                <h2>sign up</h2>
                <br><br>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Nome" ng-model="utenteRegistrazione.nome" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputSurname" id="InputSurname" placeholder="Cognome" ng-model="utenteRegistrazione.cognome" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="InputEmailFirst" placeholder="Email" ng-model="utenteRegistrazione.email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailSecond" name="InputEmailSecond" placeholder="Conferma Email" ng-model="utenteRegistrazione.email2" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input id="InputPassword" type="password" class="form-control" name="InputPassword" value="" placeholder="Password" ng-model="utenteRegistrazione.password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group date">
                        <input type="date" class="input-append date form-control" name="InputBirthday" id="InputBirthday" placeholder="Compleanno" ng-model="utenteRegistrazione.compleanno" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input id="InputDipartimento" type="text" class="form-control" name="InputDipartimento" value="" placeholder="Dipartimento" ng-model="utenteRegistrazione.dipartimento" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <button ng-click="registration()" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i>sign up</button>
            </div>
        </form>
<!---->
  </div>
  </div>
