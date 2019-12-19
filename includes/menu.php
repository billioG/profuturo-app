<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="css/app.css">
    <title>ProFuturo GT</title>
</head>
<body>


    <!--Navbar-->
    <div class="navbar-fixed">
        <nav class="grey lighten-5">
            <div class="container nav-wrapper">
                <a href="#" class="brand-logo ">
                    <img src="img/logo.png" width="150" alt="" class="">
                </a>
                <a href="#" class="sidenav-trigger" data-target="menu-side">
                    <i class="material-icons deep-orange-text text-darken-4">menu</i>
                </a>
                <ul class="right ">
                    <li>
                        <a href="#">
                            <i class="material-icons right deep-orange-text text-darken-4 ">input</i> <span class="deep-orange-text text-darken-4 pulse">Salir</span>
                        </a>
                    </li>
                </ul>
                
            </div>
        </nav>
    </div>
    <!--Navbar-->

    <!--SideNav-->
    <div class="container ">
        <ul class="sidenav sidenav-fixed" id="menu-side">
            <li>
                <div class="user-view ">
                    <div class="background">
                        <img id="f-perfil"src="https://images.pexels.com/photos/632470/pexels-photo-632470.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=150" alt="background">
                    </div>
                    <a href="">
                        <img src="img/perfil.jpg" alt="" class="circle ">
                    </a>
                    <a href="#">
                        <span class="name white-text">Usuario</span>
                    </a>
                    <a href="#">
                        <span class="email white-text">Editar perfil</span>
                    </a>
                </div>
            </li>
            <li>
                <a href="../establecimiento.php">
                    <i class="material-icons">home</i>Registrar establecimiento
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">supervisor_account</i>Registrar docentes
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">child_care
                    </i>Registrar alumnos
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">insert_chart
                    </i>Registrar No. de clases
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">announcement
                    </i>Reportar incidencias
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">assignment_turned_in
                    </i>Subir hoja de visitas
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">pie_chart
                    </i>Proyectos ProFuturo
                </a>
            </li>
        </ul>
    </div>
    <!--SideNav-->