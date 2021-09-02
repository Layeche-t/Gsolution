<?php
require_once('../inc_config.php');

if ($_SESSION['autoriser'] != 'oui') {
    header('Location: ../templates/form_autho.php');
    exit();
}
include 'inc_header.php';
?>

<div class="row d-flex justify-content-center mt-5 mb-5">
    <div class="col-lg-8">
        <div class="card">

            <div class="card-header text-center">
                <h4 class="font-weight-bold card-title m-b-0">Mon espace personel</h4>
            </div>

            <ul class="list-style-none">
                <li class="d-flex no-block card-body ">
                    <i class="fas fa-address-card mr-4 mt-3 icon-liste"></i>
                    <div class=" mt-3"> <span class="">Des informations sur ma formations</span>
                    </div>
                    <div class="ml-auto">
                        <button type="button" class="btn btn-primary btn-circle m-1" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </li>
                <li class="d-flex no-block card-body border-top ">
                    <i class="fas fa-file-word mr-4 mt-3 icon-liste"></i>

                    <div class="mt-3"> <span class="">La liste de mes document</span> </div>
                    <div class="ml-auto">
                        <button type="button" class="btn btn-primary btn-circle m-1" data-toggle="modal" data-target="#exampleModal1">
                            <i class="fa fa-tags"></i>
                        </button>
                    </div>
                </li>
                <li class="d-flex no-block card-body border-top ">
                    <i class="fas fa-envelope-open-text mr-4 mt-3 icon-liste"></i>
                    <div class="mt-3"> <span class="">Nous contacter pour plus d'informations</span> </div>
                    <div class="ml-auto">
                        <a href="form_contact.php"> <button type="button" class="btn btn-primary btn-circle m-1" data-toggle="modal" data-target="#exampleModal2">
                                <i class="fa fa-paper-plane"></i>
                            </button></a>
                    </div>
                </li>
            </ul>
        </div>

        <!-- modela number 1 -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title " id="exampleModalLabel">Ma formation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="card-body mb-4">
                        <div class="card-body p-5">
                            <h4 class="mb-4">List with bullets</h4>
                            <!-- List with bullets -->
                            <ul class="list-bullets">
                                <a class="#">
                                    <li class="mb-2">Lorem ipsum dolor sit amet.</li>
                                </a>
                                <a class="#">
                                    <li class="mb-2">Consectetur adipisicing elit.</li>
                                </a class="#">
                                <a class="#">
                                    <li class="mb-2">Sed do eiusmod tempor incididunt.</li>
                                </a>
                                <a class="#">
                                    <li class="mb-2">Ut labore et dolore magna aliqua. </li>
                                </a>
                                <a class="#">
                                    <li class="mb-2">Exercitation ullamco laboris nisi.</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>

                    </div>
                </div>
            </div>
        </div>

        <!-- modela number 1 -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title " id="exampleModalLabel1">La liste de mes documents</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <ul class="list-style-none">
                        <li class="d-flex no-block card-body ">

                            <div class="mt-3"> <span class="">Introduction de la formation </span> </div>
                            <div class="ml-auto">
                                <button type="button" class="btn btn-primary btn-circle m-1">
                                    <i class="far fa-file-pdf"></i>
                                </button>
                            </div>
                        </li>
                        <li class="d-flex no-block card-body border-top ">

                            <div class="mt-3"> <span class="">Modèle de formation </span> </div>
                            <div class="ml-auto">
                                <button type="button" class="btn btn-primary btn-circle m-1">
                                    <i class="far fa-file-pdf"></i>
                                </button>
                            </div>
                        </li>
                        <li class="d-flex no-block card-body border-top ">

                            <div class="mt-3"> <span class="">Attestation de réussite </span> </div>
                            <div class="ml-auto">
                                <button type="button" class="btn btn-primary btn-circle m-1">
                                    <i class="far fa-file-pdf"></i>
                                </button>
                            </div>
                        </li>
                    </ul>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>

                    </div>
                </div>
            </div>
        </div>




    </div>
</div>

<?php include 'inc_footer.php'; ?>