<!DOCTYPE html>
<html lang="en">
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
  <link href="css/timeline.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>

  <!-- ANGULARJS Import -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>

</head>

<body>

  <!-- Fixed navbar -->
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
              < <?= Yii::$app->user->identity->username ?>

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

  <div class="container" >
    <div class="col-md-3" id="99">
      <h3><a href="index.php?r=site/profile"><img src="profile.png" class="profile-image img-circle" height="30" width="30">
          <?= Yii::$app->user->identity->username ?>
        </a></h3>
      <h4><a href="index.php?r=site/calendario"><i class="glyphicon glyphicon-calendar"></i> Calendario Lezioni</a></h4>
      <h4><a href="index.php?r=site/libretto"><i class="glyphicon glyphicon-list-alt"></i> Libretto Universitario</a></h4>
      <h4><a href="index.php?r=site/navette"><i class="glyphicon glyphicon-time"></i> Orari Navette</a></h4>
      <h4><a href="group.html"><i class="glyphicon glyphicon-th-large"></i> {{data.Group}}</a></h4>
      <!-- <h4>.... <?php  echo Html::a('{{data.Group}}',['group']); ?> </h4>-->
      <h5><a href="#"><i class="glyphicon glyphicon-plus"></i> Crea Gruppi</a></h5>
      <p><a href="#">{{Group_1}}</a></p>
      <p><a href="#">{{Group_2}}</a></p>
    </div>

      <div class="col-md-9">
        <!-- timeline -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <strong><i class="glyphicon glyphicon-education"></i> News Dip. {{data.nomeDipartimento}}</strong>
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                <ul class="timeline">
                  <li>
                    <div class="timeline-badge info"><i class="glyphicon glyphicon-education"></i>
                    </div>
                    <div class="timeline-panel">
                      <div class="timeline-heading">
                        <h4 class="timeline-title">
                          {{data.nomeDipartimento}}
                        </h4>
                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago</small></p>
                      </div>
                      <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                        <hr>
                        <p>
                          <a href="#"><i class="glyphicon glyphicon-comment"></i> Commenta</a>
                          &nbsp&nbsp
                          <a href="#"><i class="glyphicon glyphicon-grain"></i> Diffondi </a>
                        </p>
                      </div>
                    </div>
                  </li>
                  <li class="timeline-inverted">
                    <div class="timeline-badge info"><i class="glyphicon glyphicon-education"></i>
                    </div>
                    <div class="timeline-panel">
                      <div class="timeline-heading">
                        <h4 class="timeline-title">
                          {{data.nomeDipartimento}}
                        </h4>
                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago</small></p>
                      </div>
                      <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                      </div>
                      <hr>
                      <p>
                          <a href="#"><i class="glyphicon glyphicon-comment"></i> Commenta</a>
                          &nbsp&nbsp
                          <a href="#"><i class="glyphicon glyphicon-grain"></i> Diffondi </a>
                        </p>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-badge info"><i class="glyphicon glyphicon-education"></i>
                    </div>
                    <div class="timeline-panel">
                      <div class="timeline-heading">
                        <h4 class="timeline-title">
                          {{data.nomeDipartimento}}
                        </h4>
                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago</small></p>
                      </div>
                      <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                        <hr>
                        <p>
                          <a href="#"><i class="glyphicon glyphicon-comment"></i> Commenta</a>
                          &nbsp&nbsp
                          <a href="#"><i class="glyphicon glyphicon-grain"></i> Diffondi </a>
                        </p>
                      </div>
                    </div>
                  </li>
                  <li class="timeline-inverted">
                    <div class="timeline-badge info"><i class="glyphicon glyphicon-education"></i>
                    </div>
                    <div class="timeline-panel">
                      <div class="timeline-heading">
                        <h4 class="timeline-title">
                          {{data.nomeDipartimento}}
                        </h4>
                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago</small></p>
                      </div>
                      <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                        <hr>
                        <p>
                          <a href="#"><i class="glyphicon glyphicon-comment"></i> Commenta</a>
                          &nbsp&nbsp
                          <a href="#"><i class="glyphicon glyphicon-grain"></i> Diffondi </a>
                        </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-badge info"><i class="glyphicon glyphicon-education"></i>
                    </div>
                    <div class="timeline-panel">
                      <div class="timeline-heading">
                        <h4 class="timeline-title">
                          {{data.nomeDipartimento}}
                        </h4>
                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago</small></p>
                      </div>
                      <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p><hr>
                      </div>
                        <p>
                          <a href="#"><i class="glyphicon glyphicon-comment"></i> Commenta</a>
                          &nbsp&nbsp
                          <a href="#"><i class="glyphicon glyphicon-grain"></i> Diffondi </a>
                        </p>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
          </div>
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
