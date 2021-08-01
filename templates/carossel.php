<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<style>
    .item {}

    .item:nth-child(odd) {
        background-color: lightblue;
    }

    .item:nth-child(even) {
        background-color: lightgreen;
    }

    .carousel-inner>.item>img {
        margin: 0 auto;
    }
</style>
<div id="myCarousel" class="carousel slide carousel1" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <div class="item active">
            <img src="../upload/img_caroussel/trump.jpg" width="765" height="514">
        </div>
        <div class="item">
            <img src="../upload/img_caroussel/layeche.JPG" width="765" height="514">
        </div>
        <div class="item">
            <img src="../upload/img_caroussel/Kais.jpg" width="765" height="514">
        </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next" role="button">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    </a>
</div>