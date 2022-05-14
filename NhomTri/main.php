<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="modal.css">
    <title>VieZ</title>
</head>
<body class="hero-anime">
    <?php 
        include "add.php";
        $content = file_get_contents("VieZ_data1.json");
        $dataArr = json_decode($content, true);
        // print_r($dataArr)
        
    ?>	

	<div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
					
						<a class="" href="" target="_blank"><img src="https://static.viezone.vn/prod/4a542b04/images/theme-v3/logo-viez.svg" alt=""></a>	
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0">
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#">TV Show</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#">Fameholic</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Front Row</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#">Music</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#">GenVie</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#">Social Biz</a>
								</li>
							</ul>
						</div>
					</nav>		
				</div>
			</div>
		</div>
	</div>
	<div class="my-5 py-5">
	</div>
    <section class="hot-news">
        <h1>TV Show</h1>
        
        
            <!-- ######### -->
			<div class="container my-5">
  <div class="border-bottom pb-3 px-2 d-flex justify-content-between">
    <div class="d-flex align-items-center">
	<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
  <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3l.024.001a1.46 1.46 0 0 1 .538.143.757.757 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.464 1.464 0 0 1-.143.538.758.758 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.464 1.464 0 0 1-.538-.143.758.758 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.46 1.46 0 0 1 .143-.538.758.758 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3h11.991zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z"/>
</svg>
      <a href="#" style="color: #9B5DE5; font-size: 20px; padding: 10px;" class="text-capitalize font-weight-bold mb-0">TV Show</a>
    </div>
    <a href="#" class="text-dark">See All</a>
  </div>
  
  
  <div class="row">
  <?php 
  foreach($dataArr as $data) { ?>
    <div class="col-md-4 p-4">
		
      <div style="box-shadow: 0 0  20px #ddd;">
        <div class="position-relative" style="height: 320px; background-image: url(<?php echo $data['Image'] ?>); background-position: center; background-size: cover;">
          <div class="position-absolute px-3 py-4" style="background: rgba(0, 0, 0, .5); right: 0; bottom: 0; left: 0;">
            <h3 class="h6"><a href="#" class="text-white" style="line-height: 1.6;"><?php echo $data['Title']?></a></h3>
            <div class="mt-2 d-flex justify-content-between">
              <a href="#" class="pl-2 text-white" style="border-left: 3px solid #9B5DE5;">
			  <small><?php echo $data['Type']?></small></a>
              <a href="#" class="text-white"><small>Sara Faizi</small></a>
            </div>
          </div>
        </div>
        <div class="p-3">
          <div class=" align-items-center mr-4">
            <svg height="16px" class="mr-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 300.988 300.988" style="enable-background:new 0 0 300.988 300.988;" xml:space="preserve">
            <g>
              <g>
                <path d="M150.494,0.001C67.511,0.001,0,67.512,0,150.495s67.511,150.493,150.494,150.493s150.494-67.511,150.494-150.493
                  S233.476,0.001,150.494,0.001z M150.494,285.987C75.782,285.987,15,225.206,15,150.495S75.782,15.001,150.494,15.001
                  s135.494,60.782,135.494,135.493S225.205,285.987,150.494,285.987z"/>
                <polygon points="142.994,142.995 83.148,142.995 83.148,157.995 157.994,157.995 157.994,43.883 142.994,43.883 		"/>
              </g>
            </svg>
            <small class="mt-1" style="color: #9B5DE5;"><?php echo $data['Time'] ?></small>
          </div>
        </div>
      </div>
    </div>
	<?php }
        ?>

  </div>
</div>
			<!-- ########## -->
        
    </section>
	
<!-- Link to page
================================================== -->
	<a class="logo position-fixed ml-2" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick = "reset()">
		<img  src="https://down.imgspng.com/download/0720/plus_PNG106.png" >
	</a>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
<div class="container-fluid  bg-light mt-5 mb-5 ">
<hr>
    <div class="row justify-content-center row-1">
        <div class="col-lg-5 col-md-7 col-sm-9 ">
            <p><b>STILL NOT CONVINCED? SO TAKE LOOK WHAT PEOPLE SAID IN THE MEDIA </b></p>
            <div id="carouselExampleIndicators" class="carousel slide d-flex" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="card border-0 ">
                            <div class="card-body text-center ">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-text bold text-center">"I believe that one defines oneself by reinvention. To not be like your parents. To not be like your friends. To be yourself. To cut yourself out of stone." </h5>
                                        <h6 class="mt-5"><b>Business Insider</b></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="card border-0 ">
                            <div class="card-body text-center ">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-text bold text-center">"I believe that one defines oneself by reinvention. To not be like your parents. To not be like your friends. To be yourself. To cut yourself out of stone." </h5>
                                        <h6 class="mt-5"><b>Business Insider</b></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card border-0 ">
                            <div class="card-body text-center ">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-text bold text-center">"I believe that one defines oneself by reinvention. To not be like your parents. To not be like your friends. To be yourself. To cut yourself out of stone." </h5>
                                        <h6 class="mt-5"><b>Business Insider</b></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="ml-xl-5 ml-md-4 ml-3 ">
        <div class="row justify-content-end">
            <div class=" col-12">
                <div class="row pt-5">
                    <div class="col-xl-4 col-12 mr-auto">
                        <div class="media flex-sm-row flex-column "> <img class="align-self-center mobile-img " width="350" src="./img/logo-viez.svg">
                            <div class="media-body">
                                
                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 my-auto ">
                        <div class="row justify-content-around">
                            <div class="col-md-3 col-12 mt-md-0 mt-3">
                                <ul class="list-unstyled text-muted">
                                    <li>Conditions</li>
                                    <li>Privacy</li>
                                    <li>Imprint</li>
                                    <li>Press</li>
                                    <li>COntact</li>
                                    <li>Jobs</li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-12 mt-md-0 mt-3">
                                <ul class="list-unstyled text-muted">
                                    <li>Conditions</li>
                                    <li>Privacy</li>
                                    <li>Imprint</li>
                                    <li>Press</li>
                                    <li>COntact</li>
                                    <li>Jobs</li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-12 mt-md-0 mt-3">
                                <ul class="list-unstyled text-muted">
                                    <li>Credit</li>
                                    <li>Bonitatsausktit</li>
                                    <li>Experience</li>
                                    <li>Tenet info</li>
                                    <li>SCHUFA SCORE</li>
                                </ul>
                            </div>
                            <div class="col-md-auto col-12">
                                <ul class="list-unstyled text-muted">
                                    <li>
                                    <li>Donwload App</li>
                                    <li><img src="https://i.imgur.com/iU0M5wp.png" class="img-fluid app-img" width="100"></li>
                                    <li><img src="https://i.imgur.com/M6ccl7k.png" class="img-fluid app-img" width="100"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Button trigger modal -->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog mw-75">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New content</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div>
  <div class="contact-form-wrapper d-flex justify-content-center">
    <form action="#" class="contact-form"  method="post">
    <div>
        <input type="text" class="form-control rounded border-white mb-3 form-input" id="type" placeholder="Type" required name="Type" value ="<?php echo $Type;?>">
      </div>
      <div>
        <input type="text" class="form-control rounded border-white mb-3 form-input" id="title" placeholder="Title" required name="Title" value ="<?php echo $Title;?>">
      </div>
      <div>
        <input type="text" class="form-control rounded border-white mb-3 form-input" placeholder="Image" id="image" required name="Image" value ="<?php echo $Image;?>">
      </div>
      <div>
        <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" rows="5" cols="30" placeholder="Description" required name="Description" value ="<?php echo $Description;?>"></textarea>
      </div>
      <div class="submit-button-wrapper">
        <input type="submit"  name="Submit" value="Send">
      </div>
    </form>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
<!-- modal -->
<!-- Button trigger modal -->
<!-- Button trigger modal -->

</body>
<script src="./js.js"></script>

</html>