<?php
include "..\controller\admin_controller.php";
include "Componentes.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Usuarios - Dashboard</title>

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/user.css">
</head>

<body>
    <!------------------- SIDEBAR ------------------>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <a href="cliente-dashboard.php"><img src="../logo.png" alt="logo"></a>
                </span>
                <div class="text header-text">
                    <span class="name">Convenio Marco</span>
                </div>
            </div>

            <i class='bx bx-right-arrow-circle toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="admin-tickets.php">
                            <i class='bx bxs-receipt icon'></i>
                            <span class="text nav-text">Órdenes</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="admin-inventario.php">
                            <i class='bx bxs-spreadsheet icon'></i>
                            <span class="text nav-text">Inventario</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="admin-usuarios.php">
                            <i class='bx bxs-user-account icon'></i>
                            <span class="text nav-text">Admin. Usuarios</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <form action="../Controller/Login-Controller.php" method="post">
                        <button type="submit" name="logout-btn">
                            <i class="bx bx-log-out icon"></i>
                            <span class="text nav-text">Cerrar Sesión</span>
                        </button>
                    </form>
                </li>
            </div>
        </div>
    </nav>
    <!-------------------- FIN SIDEBAR -------------->

    <section class="home-section">
        <!-------------------- INICIO NAVBAR -------------->

        <?php navbar(); ?>
        <!--------------------- FIN NAVBAR------------- -->

        <!-------------------- INICIO RESUMEN -------------->
        <div class="tarjetas">
            <h1>Resumen Inventario</h1>
            <div class="dashboard-container">

                <div class="card tarjeta1">
                    <div class="info-portatiles">
                        <h3>Portátiles</h3>
                        <h2>100</h2>
                    </div>
                </div>

                <div class="card tarjeta2">
                    <div class="info-workstations">
                        <h3>Workstations</h3>
                        <h2>100</h2>
                    </div>
                </div>

                <div class="card tarjeta3">
                    <div class="info-desktops">
                        <h3>Desktops</h3>
                        <h2>100</h2>
                    </div>
                </div>

                <div class="card tarjeta4">
                    <div class="info-Impresoras">
                        <h3>Impresoras</h3>
                        <h2>100</h2>
                    </div>
                </div>

                <div class="card tarjeta5">
                    <div class="info-scanners">
                        <h3>Scanners</h3>
                        <h2>100</h2>
                    </div>
                </div>

                <div class="card tarjeta6">
                    <div class="info-servidores">
                        <h3>Servidores</h3>
                        <h2>100</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-------------------- FIN RESUMEN -------------->

        <!-------------------- INICIO TABLA -------------->
        <div id="tabla_demo">
            <div class="row">
                <div class="col-12">

                    <table id="tbl_Demo">
                        <thead>
                            <tr>
                                <th>Id Unidad</th>
                                <th>Nombre Unidad</th>
                                <th>ID Región</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php // LlenadoTabla();  
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>







    <script src="../js/script.js"></script>
</body>

</html>