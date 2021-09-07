<?php
require_once('../inc_config.php');

$user = new User();
$post = new Post();

if (isset($_SESSION['user']['id'])) {
    $curentuser = $user->findOneBy(['id' => $_SESSION['user']['id']], $user::TABLE);
    var_dump($curentuser);
    die;
}
$formation = $post->findOneBy(['id' => $curentuser->id_formation], $post::TABLE);
var_dump($formation);
die;




// if ($_SESSION['autoriser'] != 'oui') {
//     header('Location: ../templates/form_autho.php');
//     exit();
// }

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
                    <div class=" mt-3"> <span class="">Des informations sur ma formation</span>
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

        <!-- modal number 1 -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title " id="exampleModalLabel"><?= $formation->titel ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="card-body mb-1">
                        <div class="card-body p-5">
                            <div class="d-flex flex-row mb-3">
                                <?php
                                echo  "<img src='../upload/" . $formation->picture . "'width='70' height='60'>";
                                ?>
                                <div class="d-flex flex-column ml-2">
                                    <span><?= $formation->titel ?></span>
                                    <span class="text-black-50">G7solution</span>
                                </div>
                            </div>
                            <h6 class="mt-4"><?= $formation->description ?></h6>
                            <div class="d-flex justify-content-between install mt-3"><span><?= $formation->createdAt ?></span>
                                <a href="#" class="text-primary">Savoir plus&nbsp;
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
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
                                    <a href="../controllers/download.php"> <i class="far fa-file-pdf"></i></a>
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