<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mango</title>
  <link rel="shortcut icon" href="logo.png">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

  <!-- ANGULARJS Import -->
  <script src= "js/angular.min.js"></script>
  <script src= "js/angular-route.min.js"></script>

  <script src="js/angular/libretto.js"></script>

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container" id="50">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img alt="Mango" src="logo.png" class="navbar-brand">
      <a class="navbar-brand" href="index.php?r=site/home">ISSATSO</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <div class="input-group">
                <input id="InputSearch" type="text" class="form-control" name="search" placeholder="Ricerca..." required>
                <span class="input-group-addon btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span></span>
              </div>
            </div>
          </form>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li>
          <a href="index.php?r=site/home"><i class="glyphicon glyphicon-home"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i><span class="label label-warning label-as-badge">1</span></a>
          <ul class="dropdown-menu">
            <center>
              <li><img class="img-circle" src="jacksparrow.jpg" height="50" width="50"> <strong>Jack Sparrow</strong></li>
              <li>Aggiungi Collega <br></li>
              <li>
                <button type="submit" class="btn btn-warning"><i class="glyphicon glyphicon-ok-sign"></i></button>
                <button type="submit" class="btn btn-warning"><i class="glyphicon glyphicon-remove-sign"></i></button>
              </li>
              <li class="divider"></li>
            </center>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-inbox"></i><span class="label label-warning label-as-badge">3</span></a>
          </a>
          <ul class="dropdown-menu dropdown-messages">
            <li class="alert alert-success">
              <a href="#">
                <div>
                  <p><strong>Tony Starks <i class="glyphicon glyphicon-bullhorn"></i> </strong>
                    <span class="pull-right text-muted">
                      <em>Yesterday</em>
                    </span></p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</p>
              </a>
            </li>
            <li>
              <a href="#">
                <div>
                  <strong>Jack Sparrow</strong>
                      <span class="pull-right text-muted">
                        <em>Yesterday</em>
                      </span>
                </div>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
              </a>
            </li>
            <li>
              <a href="#">
                <div>
                  <strong>Bruce Wayne</strong>
                      <span class="pull-right text-muted">
                        <em>Yesterday</em>
                      </span>
                </div>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a class="text-center" href="#">
                <strong>Leggi tutti i Messaggi</strong>
              </a>
            </li>
          </ul>
          <!-- /.dropdown-messages -->
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-globe"></i></a>
          <ul class="dropdown-menu">
            <li>{{data.Notification}} </li>
            <li class="divider"></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-education"></i><span class="label label-info label-as-badge">3</span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?r=site/newsuniversita"><i class="glyphicon glyphicon-education"></i> News Università <span class="label label-info label-as-badge">2</span></a></li>
            <li><a href="index.php?r=site/newsdip"><i class="glyphicon glyphicon-education"></i> News Dip. {{data.NomeDipartimento}} <span class="label label-info label-as-badge">1</span></a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="glyphicon glyphicon-plus "></i> Aggiungi Dipartimento</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="profile.png" class="profile-image img-circle" height="18" width="18">
             <?= Yii::$app->user->identity->username ?>

            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?r=site/profile"><i class="glyphicon glyphicon-cog"></i> Account</a></li>
            <li>
              <a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="index.php?r=site/logout1"><i class="glyphicon glyphicon-log-out "></i>Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

  <!-- Fixed navbar -->


      <div class="col-md-9">
        <div class="well" ng-app="libretto" ng-controller="librettoCtrl as todoList">
        <h2>Libretto Universitario</h2>
          <p><b>Media Aritmetica:</b> {{todoList.media()/todoList.count() | number:2}} <b>Media Ponderata:</b> {{todoList.mediaP()/todoList.totCrediti() | number:2}} <b>Base di Laurea:</b> {{11/3*(todoList.mediaP()/todoList.totCrediti()) | number:2}} 
        
        <form ng-submit="todoList.addTodo()"> 
          <input type="text" ng-model="todoList.todoNome"  size="12" placeholder="aggiungi materia">
          <input type="text" ng-model="todoList.todoCrediti"  size="2" placeholder="crediti">
          <input type="text" ng-model="todoList.todoVoto"  size="2" placeholder="voto">
          <input type="text" ng-model="todoList.todoData"  size="4" placeholder="data">
          <input type="text" ng-model="todoList.todoProf"  size="10" placeholder="prof">
          <input type="text" ng-model="todoList.todoNote"  size="10" placeholder="note">
          <button type="submit" class="btn btn-warning pull-right" value="add"><i class="glyphicon glyphicon-plus"></i></button></p><br>
        </form>

          <p><table class="table table-striped table-responsive table-bordered table-hover table-condensed">
            <thead>
              <tr class="warning">
                <td><button  ng-click="todoList.archive()"class="btn btn-warning"><i class="glyphicon glyphicon-trash"></i></button></td>
                <td>Materia</td>
                <td>Crediti</td>
                <td>Voto</td>
                <td>Data Esame</td>
                <td>Prof.</td>
                <td>Note</td>
                <td></td>
              </tr>
              </thead>
              <tbody>
              <tr ng-repeat="todo in todoList.todos">
                <td><input type="checkbox" ng-model="todo.done"></td>
                <td><span class="done-{{todo.done}}">{{todo.nome}}</span></td>
                <td><span class="done-{{todo.done}}">{{todo.crediti}}</span></td>
                <td><span class="done-{{todo.done}}">{{todo.voto}}</span></td>
                <td><span class="done-{{todo.done}}">{{todo.data}}</span></td>
                <td><span class="done-{{todo.done}}">{{todo.prof}}</span></td>
                <td><span class="done-{{todo.done}}">{{todo.note}}</span></td>
                <td><button type="submit" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></button></td>
              </tr>
            </tbody>
            </table>
          </p>
          </div>
      </div>


<!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
