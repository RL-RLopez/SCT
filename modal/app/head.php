<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../img/favicon.ico">
        <title>IncidentCCM</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/sidebar.css">
        <link rel="stylesheet" href="../../css/footer.css">
    </head>
    <body>
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                          <a href="#" class="site_title"><i class="fa fa-ticket"></i> <span>Incident CCM</span></a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="images/profiles/<?php echo $profile_pic;?>" alt="<?php echo $name;?>" class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Bienvenido</span>
                                <h2><?php echo $name;?></h2>
                            </div>
                        </div>
                        <br/>
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu"><!-- sidebar menu -->
                            <div class="menu_section">
                                <ul class="nav side-menu">
                                    <li class="<?php if(isset($active1)){echo $active1;}?>">
                                        <a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                                    </li>

                                    <li class="<?php if(isset($active2)){echo $active2;}?>">
                                        <a href="tickets.php"><i class="fa fa-ticket"></i> Tickets</a>
                                    </li>

                                    <li class="<?php if(isset($active3)){echo $active3;}?>">
                                        <a href="projects.php"><i class="fa fa-list-alt"></i> Equipos</a>
                                    </li>

                                    <li class="<?php if(isset($active4)){echo $active4;}?>">
                                        <a href="categories.php"><i class="fa fa-align-left"></i> Area o Depto.</a>
                                    </li>

                                    <li class="<?php if(isset($active5)){echo $active5;}?>">
                                        <a href="reports.php"><i class="fa fa-area-chart"></i> Reportes</a>
                                    </li>

                                    <li class="<?php if(isset($active6)){echo $active6;}?>">
                                        <a href="users.php"><i class="fa fa-users"></i> Administradores</a>
                                    </li>

                                    <li class="<?php if(isset($active8)){echo $active8;}?>">
                                        <a href="about.php"><i class="fa fa-child"></i> Sobre Mi</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="images/profiles/<?php echo $profile_pic;?>" alt=""><?php echo $name;?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="dashboard.php"><i class="fa fa-user"></i> Mi cuenta</a></li>
                                        <li><a href="action/logout.php"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="row top_tiles">
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                  <div class="icon"><i class="fa fa-ticket"></i></div>
                                  <div class="count"><?php echo mysqli_num_rows($TicketData) ?></div>
                                  <h3>Pendientes</h3>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                  <div class="icon"><i class="fa fa-list-alt"></i></div>
                                  <div class="count"><?php echo mysqli_num_rows($ProjectData) ?></div>
                                  <h3>Proyectos</h3>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                  <div class="icon"><i class="fa fa-th-list"></i></div>
                                  <div class="count"><?php echo mysqli_num_rows($CategoryData) ?></div>
                                  <h3>Categorias</h3>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                  <div class="icon"><i class="fa fa-users"></i></div>
                                  <div class="count"><?php echo mysqli_num_rows($UserData) ?></div>
                                  <h3>Usuarios</h3>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="image view view-first">
                                    <img class="thumb-image" style="width: 100%; display: block;" src="images/profiles/<?php echo $profile_pic; ?>" alt="image" />
                                </div>
                                <span class="btn btn-my-button btn-file">
                                    <form method="post" id="formulario" enctype="multipart/form-data">
                                    Cambiar imagen del perfil: <input type="file" name="file">
                                    </form>
                                </span>
                                <div id="respuesta"></div>
                            </div>
                            <div class="col-md-8 col-xs-12 col-sm-12">
                                <?php include "lib/alerts.php";
                                    profile(); //llamada a la funcion de alertas
                                ?>    
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Información personal</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <br />
                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="#" method="post">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre:
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" name="name" id="first-name" class="form-control col-md-7 col-xs-12" value="<?php echo $name; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email:
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="last-name" name="email" class="form-control col-md-7 col-xs-12" value="<?php echo $email; ?>">
                                                </div>
                                            </div>

                                            <br><br><br>
                                            <h2 style="padding-left: 50px">Cambiar contraseña</h2>
                                    
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Contraseña actual
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input id="birthday" name="password" class="date-picker form-control col-md-7 col-xs-12" type="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nueva contraseña
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input id="birthday" name="new_password" class="date-picker form-control col-md-7 col-xs-12" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirmar contraseña
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="birthday" name="confirm_new_password" class="date-picker form-control col-md-7 col-xs-12" type="text">
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                    <button type="submit" name="token" class="btn btn-success">Actualizar información</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>