<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/5da465d417.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>

    <div class="owl-carousel owl-theme">
        <div class="item">
            <h4>1</h4>
        </div>
        <div class="item">
            <h4>2</h4>
        </div>
        <div class="item">
            <h4>3</h4>
        </div>
        <div class="item">
            <h4>4</h4>
        </div>
        <div class="item">
            <h4>5</h4>
        </div>
        <div class="item">
            <h4>6</h4>
        </div>
        <div class="item">
            <h4>7</h4>
        </div>
        <div class="item">
            <h4>8</h4>
        </div>
        <div class="item">
            <h4>9</h4>
        </div>
        <div class="item">
            <h4>10</h4>
        </div>
        <div class="item">
            <h4>11</h4>
        </div>
        <div class="item">
            <h4>12</h4>
        </div>
    </div>

</body>

<script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        rtl: true,
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>

</html>