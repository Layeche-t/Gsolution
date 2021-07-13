<?php
require_once('../inc_config.php');
?>


<?php include('inc_header.php'); ?>

            <div class='dashboard-app'>
                <header class='dashboard-toolbar'>
                    <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
                </header>





                <!-- Le contenu du dashbord-->
                <div class='dashboard-content'>
                    <div class='container'>
                        <div class='card'>
                            <!--titre du dashbord -->
                            <div class='card-header'>
                                <h1>Slide</h1>
                            </div>

                            <!--contenu du tableau -->
                            <div class='card-body'>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <a href="slide_add.php"> <button type="button" class="btn btn-success btn-slide">Ajouter</button></a>
                                </div>
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Fatouh</th>
                                            <th scope="col">Layeche</th>
                                            <th scope="col">TORKI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Je marche</td>
                                            <td>Otto</td>
                                            <td>
                                                <a href="slide_modification.php"> <button type="button" class="btn btn-success">Modifier</button></a>
                                                <button type="button" class="btn btn-danger">Supprimer</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                <a href="slide_modification.php"><button type="button" class="btn btn-success">Modifier</button></a>
                                                <button type="button" class="btn btn-danger">Supprimer</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                <a href="slide_modification.php"><button type="button" class="btn btn-success">Modifier</button></a>
                                                <button type="button" class="btn btn-danger">Supprimer</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>



                            </div>
                        </div>
                    </div>
                </div>
                <?php include('inc_footer.php'); ?>
            </div>


