<?php

if (($open = fopen("North.csv", "r")) !== FALSE) {

    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
        $array[] = $data;
    }

    fclose($open);
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./fontawesome-free-6.0.0-web/fontawesome-free-6.0.0-web/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- head -->
    <div class="head">
        <img src="./img/ab.jpg" alt="">
        <div class="head_display w-100 mt-3">
            <!--  -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><i class="fa-solid fa-compass" style="font-size: 45px;color:white"></i></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <button class="btn btn-outline-light text-dark my-2 my-sm-0" type="submit" style="font-family: Arial;"><b>OUR JOURNEYS</b></button>
                        <div class=" mr-sm-2">
                            <!-- Modal -->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn ml-3" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa-solid fa-bars" style="font-size: 25px;color:white"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content modal-content-drag">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">BOOKING</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <i class="fa-solid fa-cart-arrow-down mb-5" style="font-size: 25px;"></i> <button style="border: 1px solid black;outline:none;background-color:white;width:200px;height:50px;margin-left:40px;">OUR JOURNEYS</button>
                                            <p class="mt-5 modal-text">GROUP JOURNEYS</p>
                                            <p class="modal-text">PRIVATE VOYAGE</p>
                                            <p class="modal-text">GALLERIES</p>
                                            <p class="modal-text">SHOP</p>
                                            <p class="modal-text">ABOUT</p>
                                            <p class="modal-text">CONTACT</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!--  -->
                    </form>
                </div>
            </nav>
            <!--  -->
            <!--  -->
            <div class="flex">
                <p id="mot">SAILING COLLECTIVE</p>
                <div class="flex-giua">
                    <p id="hai">Traveling Together</p>
                    <p id="ba">We are sailing travel specialists with curated itineraries worldwide. Your journey is <br> crewed by a team of dynamic explorers offering customized voyages and outstanding <br> adventures. Join the Adventure. </p>
                </div>
            </div>
            <div class="flex-btn">
                <button class="flex-btn-2 btn btn-light border border-light">OUR JOURNEYS</button>
                <button class="flex-btn-2 btn text-light border border-light">LEARN MORE</button>
            </div>                 
        </div>
    </div>
<!-- content, show -->
    <div class="containerr">
        <!-- body -->
        <div class="row">
            <?php
            foreach ($array as $sub) {
                echo    '<div class="card" style="width: 28rem; margin-right: 20px;margin-top: 10px; box-shadow: 0 0 10px 0 grey;">
                    <img src="' .  $sub[0] . '" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-primary" style="font-family:Arial;">' .  $sub[1] . '</h5>
                        <p class="card-text"> <i class="fa-solid fa-clock text-primary"></i> ' .  $sub[2] . '</p>
                        <p class="card-text"> <i class="fa-solid fa-calendar-days text-primary"></i> ' .  $sub[3] . '</p>
                        <p class="card-text text-center text-success"> <i class="fa-solid fa-hand-holding-dollar text-danger"></i> ' .  $sub[4] . '</p>
                        <a href="#" class="btn btn-primary Book_now">Book now</a>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
<!-- content, show -->
<!-- footer -->
    <div class="footer">
        <img class="mt-4 img-footer" src="./img/newimage-footer.jpg" alt="">
        <div class="footer-content">
            <div>
                <p class="text-lon"><b>STAY UPDATED</b></p>
                <p class="text-nho">For news on upcoming journeys, events and more sign up for our newsletter</p>
                <input class="w-75" type="text" placeholder="Enter email">
            </div>
            <div>
                <p class="text-lon"><b>SITE</b></p>
                <p class="text-nho">Home</p>
                <p class="text-nho">Group Journeys</p>
                <p class="text-nho">Galleries</p>
                <p class="text-nho">About</p>
                <p class="text-nho">Contact</p>
                <p class="text-nho">Journal</p>
            </div>
            <div>
                <p class="text-lon"><b>INFORMATION</b></p>
                <p class="text-nho">FAQs</p>
                <p class="text-nho">Terms & Conditions</p>
                <p class="text-nho">Covid Considerations</p>
                <p class="text-nho">Guest Form</p>
            </div>
            <div>
                <p class="text-lon"><b>CONTACT</b></p>
                <p class="text-nho"><a href="">info@thesailingcollective.com</a></p>
                <p class="text-nho"><a href="">+1 (347) 927-5487</a></p>
                <br>
                <p class="text-nho">SOCIAL</p>
                <p class="text-nho">Facebook</p>
                <p class="text-nho">Instagram</p>
                <p class="text-nho">Pinterest</p>
            </div>
        </div>
        <p style="border-top: 1px solid;" class="mt-5"></p>
        <div class="footer-content-1">
            <p>© SAILING COLLECTIVE 2022</p>
            <p>SITE CREDIT</p>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>