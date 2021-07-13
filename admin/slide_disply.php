
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


                <!-- Pop up -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
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
                            <th scope="col">Lalou</th>
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
</div>