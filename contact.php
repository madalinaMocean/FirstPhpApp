<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/contact.css">

    <title>Contact</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">Menu <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="contact-header">
        <h2 class="text-center">Contact Us</h2>
    </div>
<!--        <i class="bi bi-envelope"></i>-->
    <div class="details text-center">
        <ul class="list-unstyled mb-0">

            <li><i class="bi bi-envelope"></i>
                <p>contact@mypizzaapp.com</p>
            </li>

            <li><i class="bi bi-telephone"></i>
                <p>+ 01 234 567 89</p>
            </li>

            <li><i class="bi bi-geo-alt"></i>
                <p>Cluj Napoca, Brassai Samuiel, Romania</p>
            </li>
        </ul>



        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="1010" height="205" id="gmap_canvas" src="https://maps.google.com/maps?q=str%20Brassai%20Samuiel&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <br>
                <style>
                    .mapouter{position:relative;text-align:right;height:360px;width:1010px;}</style>
                <a href="https://www.embedgooglemap.net"></a>
                <style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:1010px;}</style>
            </div>
        </div>



    </div>



</body>
</html>
