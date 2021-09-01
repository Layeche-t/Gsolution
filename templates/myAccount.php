<?php
require_once('../inc_config.php');

include 'inc_header.php';
?>
<h1 class="titel-pages font-weight-bold">Mon compte</h1>

<div class="row d-flex justify-content-center mt-5 mb-5">
    <div class="col-lg-8">
        <div class="card">

            <div class="card-header text-center">
                <h4 class="font-weight-bold card-title m-b-0">Mon compte</h4>
            </div>

            <ul class="list-style-none">
                <li class="d-flex no-block card-body ">
                    <i class="fas fa-id-card  mr-4 mt-3 icon-liste"></i>
                    <div class="mt-3"> <span class="">Consulter et modifier mes coordonnées </span> </div>
                    <div class="ml-auto">
                        <div class="tetx-right">
                            <button class="btn btn-primary btn-circle m-1"><i class="fa fa-cog"></i></button>
                        </div>
                    </div>
                </li>
                <li class="d-flex no-block card-body border-top ">
                    <i class="fas fa-user-cog mr-4 mt-3 icon-liste"></i>
                    <div class="mt-3"> <span class="">Email d'utilisateur : </span> </div>
                    <div class="ml-auto">
                        <div class="tetx-right">
                            <button class="btn btn-primary btn-circle m-1"><i class="fa fa-cog"></i></button>
                        </div>
                    </div>
                </li>
                <li class="d-flex no-block card-body border-top ">
                    <i class="fas fa-unlock-alt mr-4 mt-3 icon-liste"></i>
                    <div class="mt-3"> <span class="">Mot de passe : </span> </div>
                    <div class="ml-auto">
                        <div class="tetx-right">
                            <button class="btn btn-primary btn-circle m-1"><i class="fa fa-cog"></i></button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>







<?php include 'inc_footer.php'; ?>