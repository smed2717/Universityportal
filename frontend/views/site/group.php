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



    <div class="col-md-9">

      <div class="panel panel-default">
        <div class="panel-heading">
          <strong><i class="glyphicon glyphicon-th-large"></i> Gruppo Esempio</strong>
          <div class="dropdown pull-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-option-horizontal"></i></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="glyphicon glyphicon-plus"></i> Aggiungi Collega</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-pencil"></i> Modifica Gruppo</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="glyphicon glyphicon-trash"></i> Elimina Gruppo</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- /.panel -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong><i class="glyphicon glyphicon-leaf"></i> Pubblica</strong>
        </div>
        <div class="panel-body">
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home"><i class="glyphicon glyphicon-edit"></i> Scrivi Post</a></li>
            <li><a data-toggle="tab" href="#photovideo">Upload <i class="glyphicon glyphicon-picture"></i>  Immagini / <i class="glyphicon glyphicon-play-circle"></i>  Video</a></li>
            <li><a data-toggle="tab" href="#file">Upload <i class="glyphicon glyphicon-file"></i> File</a></li>
            <li class="divisor"></li>
          </ul>

          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <h4>Scrivi Post</h4>
              <form role="form">
                <div class="group-form">
                  <textarea class="form-control" rows="4"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-warning pull-right"><i class="glyphicon glyphicon-pencil"></i> Pubblica</button>
                <br>
              </form>
            </div>
            <div id="photovideo" class="tab-pane fade">
              <h4>Inserisci <i class="glyphicon glyphicon-picture"></i>  / <i class="glyphicon glyphicon-facetime-video"></i></h4>
              <p>Seleziona e carica file.
                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-plus"></i> Carica</button>
                <br></p>
                <p><button type="submit" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Pubblica</button></p>
              </div>
              <div id="file" class="tab-pane fade">
                <h4>Inserisci <i class="glyphicon glyphicon-file"></i></h4>
                <p>Seleziona e carica file.
                  <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-plus"></i> Carica</button>
                  <br></p>
                  <p><button type="submit" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Pubblica</button></p>
                </div>
              </div>
            </div>
          </div>
          <!-- /.panel -->

          <!-- timeline -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <strong><i class="glyphicon glyphicon-th-large"></i> Dashboard Gruppo</strong>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <ul class="timeline">
                <li>
                  <div class="timeline-badge warning"><i class="glyphicon glyphicon-edit"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">
                        <img src="profile.png" class="profile-image img-circle" height="25" width="25"> {{data.Name}}
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
                  <div class="timeline-badge warning"><i class="glyphicon glyphicon-edit"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">
                        <img src="profile.png" class="profile-image img-circle" height="25" width="25"> {{data.Name}}
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
                  <div class="timeline-badge warning"><i class="glyphicon glyphicon-picture"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">
                        <img src="profile.png" class="profile-image img-circle" height="25" width="25"> {{data.Name}}
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
                  <div class="timeline-badge warning"><i class="glyphicon glyphicon-play-circle"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">
                        <img src="profile.png" class="profile-image img-circle" height="25" width="25"> {{data.Name}}
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
                  <div class="timeline-badge warning"><i class="glyphicon glyphicon-file"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">
                        <img src="profile.png" class="profile-image img-circle" height="25" width="25"> {{data.Name}}
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

      <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
        <footer class="footer">
          <div class="container">
            <div id="chatmenu" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="tonystark.jpg" class="profile-image img-circle" height="25" width="25"><span class="label label-success label-as-badge">1</span></a>
                  <ul class="dropdown-menu">
                    <div class="chat-panel panel-warning">
                      <div class="panel-heading">
                        <strong>Tony Stark</strong>
                        <div class="btn-group pull-right">
                          <button type="button" class="btn btn-warning btn-xs dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-plus"></i></b>
                          </button>
                          <ul class="dropdown-menu slidedown">
                            <li>
                              <a href="#">
                                <span class="label label-info label-as-badge"><i class="glyphicon glyphicon-paperclip"></i></span> Allega File
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <span class="label label-warning label-as-badge"><i class="glyphicon glyphicon-pencil"></i></span> Disegna
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <span class="label label-success label-as-badge"><i class="glyphicon glyphicon-apple"></i></span> Risolvi Equazione
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <span class="label label-danger label-as-badge"><i class="glyphicon glyphicon-remove-sign"></i></span> Rimuovi Conversazione
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <!-- /.panel-heading -->
                      <div class="dropdown-messages panel-body">
                        <ul class="chat">
                          <li class="left clearfix">
                            <span class="chat-img pull-left">
                              <img src="tonystark.jpg" class="profile-image img-circle" height="50" width="50">
                            </span>
                            <div class="chat-body clearfix">
                              <div class="header">
                                <strong class="primary-font">Tony Stark</strong>
                                <small class="pull-right text-muted">
                                  <i class="glyphicon glyphicon-time"></i>12 mins ago
                                </small>
                              </div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                              </p>
                            </div>
                          </li>
                          <li class="right clearfix">
                            <span class="chat-img pull-right">
                              <img src="profile.png" class="profile-image img-circle" height="50" width="50">
                            </span>
                            <div class="chat-body clearfix">
                              <div class="header">
                                <small class=" text-muted">
                                  <i class="glyphicon glyphicon-time"></i>13 mins ago</small>
                                  <strong class="pull-right primary-font">{{data.Name}}</strong>
                                </div>
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                              </div>
                            </li>
                            <li class="left clearfix">
                              <span class="chat-img pull-left">
                                <img src="tonystark.jpg" class="profile-image img-circle" height="50" width="50">
                              </span>
                              <div class="chat-body clearfix">
                                <div class="header">
                                  <strong class="primary-font">Tony Stark</strong>
                                  <small class="pull-right text-muted">
                                    <i class="glyphicon glyphicon-time"></i>14 mins ago</small>
                                  </div>
                                  <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                  </p>
                                </div>
                              </li>
                              <li class="right clearfix">
                                <span class="chat-img pull-right">
                                  <img src="profile.png" class="profile-image img-circle" height="50" width="50">
                                </span>
                                <div class="chat-body clearfix">
                                  <div class="header">
                                    <small class=" text-muted">
                                      <i class="glyphicon glyphicon-time"></i>15 mins ago</small>
                                      <strong class="pull-right primary-font">{{data.Name}}</strong>
                                    </div>
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <!-- /.panel-body -->
                            <div class="panel-footer">
                              <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Digita il tuo messaggio qui..." />
                                <span class="input-group-btn">
                                  <button class="btn btn-warning btn-sm" id="btn-chat">
                                    <i class="glyphicon glyphicon-pencil"></i> Invia
                                  </button>
                                </span>
                              </div>
                            </div>
                            <!-- /.panel-footer -->
                          </div>
                          <!-- /.panel .chat-panel -->
                        </ul>
                      </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="jacksparrow.jpg" class="profile-image img-circle" height="25" width="25"><span class="label label-success label-as-badge">1</span></a>
                  <ul class="dropdown-menu">
                    <div class="chat-panel panel-warning">
                      <div class="panel-heading">
                        <strong>Jack Sparrow</strong>
                        <div class="btn-group pull-right">
                          <button type="button" class="btn btn-warning btn-xs dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-plus"></i>
                          </button>
                          <ul class="dropdown-menu slidedown">
                            <li>
                              <a href="#">
                                <span class="label label-info label-as-badge"><i class="glyphicon glyphicon-paperclip"></i></span> Allega File
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <span class="label label-warning label-as-badge"><i class="glyphicon glyphicon-pencil"></i></span> Disegna
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <span class="label label-success label-as-badge"><i class="glyphicon glyphicon-apple"></i></span> Risolvi Equazione
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <span class="label label-danger label-as-badge"><i class="glyphicon glyphicon-remove-sign"></i></span> Rimuovi Conversazione
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <!-- /.panel-heading -->
                      <div class="dropdown-messages panel-body">
                        <ul class="chat">
                          <li class="left clearfix">
                            <span class="chat-img pull-left">
                              <img src="jacksparrow.jpg" class="profile-image img-circle" height="50" width="50">
                            </span>
                            <div class="chat-body clearfix">
                              <div class="header">
                                <strong class="primary-font">Jack Sparrow</strong>
                                <small class="pull-right text-muted">
                                  <i class="glyphicon glyphicon-time"></i>12 mins ago
                                </small>
                              </div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                              </p>
                            </div>
                          </li>
                          <li class="right clearfix">
                            <span class="chat-img pull-right">
                              <img src="profile.png" class="profile-image img-circle" height="50" width="50">
                            </span>
                            <div class="chat-body clearfix">
                              <div class="header">
                                <small class=" text-muted">
                                  <i class="glyphicon glyphicon-time"></i>13 mins ago</small>
                                  <strong class="pull-right primary-font">{{data.Name}}</strong>
                                </div>
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                              </div>
                            </li>
                            <li class="left clearfix">
                              <span class="chat-img pull-left">
                                <img src="jacksparrow.jpg" class="profile-image img-circle" height="50" width="50">
                              </span>
                              <div class="chat-body clearfix">
                                <div class="header">
                                  <strong class="primary-font">Jack Sparrow</strong>
                                  <small class="pull-right text-muted">
                                    <i class="glyphicon glyphicon-time"></i>14 mins ago</small>
                                  </div>
                                  <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                  </p>
                                </div>
                              </li>
                              <li class="right clearfix">
                                <span class="chat-img pull-right">
                                  <img src="profile.png" class="profile-image img-circle" height="50" width="50">
                                </span>
                                <div class="chat-body clearfix">
                                  <div class="header">
                                    <small class=" text-muted">
                                      <i class="glyphicon glyphicon-time"></i>15 mins ago</small>
                                      <strong class="pull-right primary-font">{{data.Name}}</strong>
                                    </div>
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <!-- /.panel-body -->
                            <div class="panel-footer">
                              <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Digita il tuo messaggio qui..." />
                                <span class="input-group-btn">
                                  <button class="btn btn-warning btn-sm" id="btn-chat">
                                    <i class="glyphicon glyphicon-pencil"></i> Invia
                                  </button>
                                </span>
                              </div>
                            </div>
                            <!-- /.panel-footer -->
                          </div>
                          <!-- /.panel .chat-panel -->
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-send"></i> Chat</a>
                        <ul class="dropdown-menu">
                          <!-- /.panel -->
                          <div class="chat-panel panel panel-warning">
                            <div class="panel-heading">
                              <strong><i class="glyphicon glyphicon-user"></i>Chat</strong>
                              <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                  <i class="glyphicon glyphicon-info-sign"></i> Status  <b class="caret"></b>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                  <li class="active">
                                    <a href="#">
                                      <span class="label label-success label-as-badge"><i class="glyphicon glyphicon-ok-sign"></i></span> Disponibile
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <span class="label label-warning label-as-badge"><i class="glyphicon glyphicon-ban-circle"></i></span> Sto Studiando
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <span class="label label-danger label-as-badge"><i class="glyphicon glyphicon-remove-sign"></i></span> Non al pc
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                              <ul class="chat">
                                <a href="#">
                                  <li>
                                    <span class="label label-success label-as-badge"><i class="glyphicon glyphicon-ok-sign"></i></span> 
                                    <img src="profile.png" class="profile-image img-circle" height="30" width="30">
                                    <strong class="primary-font">{{data.Nome}}</strong>
                                  </li>
                                </a>
                                <a href="#">
                                  <li>
                                    <span class="label label-success label-as-badge"><i class="glyphicon glyphicon-ok-sign"></i></span> 
                                    <img src="profile.png" class="profile-image img-circle" height="30" width="30">
                                    <strong class="primary-font">{{data.Nome}}</strong>
                                  </li>
                                </a>
                                <a href="#">
                                  <li>
                                    <span class="label label-success label-as-badge"><i class="glyphicon glyphicon-ok-sign"></i></span> 
                                    <img src="profile.png" class="profile-image img-circle" height="30" width="30">
                                    <strong class="primary-font">{{data.Nome}}</strong>
                                  </li>
                                </a>
                                <a href="#">
                                  <li>
                                    <span class="label label-success label-as-badge"><i class="glyphicon glyphicon-ok-sign"></i></span> 
                                    <img src="profile.png" class="profile-image img-circle" height="30" width="30">
                                    <strong class="primary-font">{{data.Nome}}</strong>
                                  </li>
                                </a>
                                <a href="#">
                                  <li>
                                    <span class="label label-success label-as-badge"><i class="glyphicon glyphicon-ok-sign"></i></span> 
                                    <img src="profile.png" class="profile-image img-circle" height="30" width="30">
                                    <strong class="primary-font">{{data.Nome}}</strong>
                                  </li>
                                </a>
                                <a href="#">
                                  <li>
                                    <span class="label label-success label-as-badge"><i class="glyphicon glyphicon-ok-sign"></i></span> 
                                    <img src="profile.png" class="profile-image img-circle" height="30" width="30">
                                    <strong class="primary-font">{{data.Nome}}</strong>
                                  </li>
                                </a>
                                <a href="#">
                                  <li>
                                    <span class="label label-success label-as-badge"><i class="glyphicon glyphicon-ok-sign"></i></span> 
                                    <img src="profile.png" class="profile-image img-circle" height="30" width="30">
                                    <strong class="primary-font">{{data.Nome}}</strong>
                                  </li>
                                </a>
                              </ul>
                            </div>
                            <!-- /.panel-body -->
                            <!-- /.panel .chat-panel -->
                          </div>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </footer>
            </nav>

<!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
