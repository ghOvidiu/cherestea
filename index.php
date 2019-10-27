<!DOCTYPE html>
<?php
    $db = mysqli_connect('localhost', 'root', '', 'roxy-pub-db');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Depozit cherestea - Chitila</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>



    <!-- Latest compiled JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <!-- Our Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <script src="main-js.js"></script>
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg fixed-top">
    <img src="http://www.roxy-pub.ro/css/front/header.png" href="#Home" class="navbar-brand">
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_content" aria-controls="navbar_content" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container-fluid collapse navbar-collapse" id="navbar_content">
        <ul class="navbar-nav nav-fill w-100">
            <li class="nav-item">
                <a class="nav-link" href="index.php" onclick="">Despre noi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="produse.php">Produse</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="livrari.php">Livrari</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Bun venit! -->
<div class="jumbotron jumbotron-fluid" id="welcome_jumbo">
    <div class="container" id="welcome_message">
        <h1 class="display-4" style="font-weight: bold; margin-top: 50px;">Depozit de cherestea - Chitila</h1>
        <p class="lead">Noi lasam clientii sa vorbeasca despre noi. <a href="#review_area" id="recenzii_link">Vrei sa vezi ce spun?</a></p>
    </div>
</div>

<!-- Rezervari -->
<div class="carousel slide" data-ride="carousel" id="photo_area">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="assets/carousel/1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
                <img class="d-block w-100" src="assets/carousel/2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
                <img class="d-block w-100" src="assets/carousel/3.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
                <img class="d-block w-100" src="assets/carousel/4.jpg" alt="Forth slide">
        </div>
    </div>  
    <a class="carousel-control-prev" href="#photo_area" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#photo_area" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
</div>

<!-- Recenzii -->
<div class="container-fluid" id="review_area">
    <div class="container" id="Recenzii">
        <h1 class="title">Recenzii</h1>
        <div class="row three-reviews">
            <?php 
                $selectReviewsQuery = "SELECT * FROM recenzii;";

                $run_selectReviewsQuery = mysqli_query($db, $selectReviewsQuery);

                while($reviewRow = mysqli_fetch_assoc($run_selectReviewsQuery)){
                    echo "<div class='col-sm review'>
                            <p class='review-body'>".$reviewRow["Recenzie"]."</p>
                            <p class='review-author'>".$reviewRow["Autor"]."</p>
                          </div>";
                }
            ?>
    	</div>
    	<div class="row three-reviews">
    		<div class="col-sm review">
    			<p class="review-body">Pizza este foarte buna</p>
    			<p class="review-author">Marius</p>
    		</div>
    		<div class="col-sm review">
    			<p class="review-body">Pizza este foarte buna</p>
    			<p class="review-author">Marius</p>
    		</div>
    		<div class="col-sm review">
    			<p class="review-body">Pizza este foarte buna</p>
    			<p class="review-author">Marius</p>
    		</div>
    	</div>
    	<div class="row three-reviews">
    		<div class="col-sm review">
    			<p class="review-body">Pizza este foarte buna</p>
    			<p class="review-author">Marius</p>
    		</div>
    		<div class="col-sm review">
    			<p class="review-body">Pizza este foarte buna</p>
    			<p class="review-author">Marius</p>
    		</div>
    		<div class="col-sm review">
    			<p class="review-body">Pizza este foarte buna</p>
    			<p class="review-author">Marius</p>
    		</div>
    	</div>
    	<!-- Button trigger modal -->
    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddReviewModal">Adauga o recenzie</button>

    	<!-- Modal -->
    	<div class="modal fade" id="AddReviewModal" tabindex="-1" role="dialog" aria-labelledby="AddReviewModal" aria-hidden="true">
    	  <div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content">
    		  <div class="modal-header">
    			<h5 class="modal-title" id="AddReviewTitle">Ai fost aici? Spune-ti parerea</h5>
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    			  <span aria-hidden="true">&times;</span>
    			</button>
    		  </div>
    		  <div class="modal-body">
    			  <form>
    			  <div class="form-row">
    				  <div class="form-group col-md-6">
    						<label for="review-author-id">Nume:</label>
    						<input id="review-author-id" type="text" class="form-control">
    					</div>
    					<div class="form-group col-md-6">
    						<label for="review-body-id">Parerea ta:</label>
    						<textarea id="review-body-id" type="text" class="form-control">
    					</div>
    			  </div>
    			  </form>
    		  </div>
    		  <div class="modal-footer">
    			<button type="button" class="btn btn-small btn-danger" data-dismiss="modal">Renunta</button>
    			<button type="submit" class="btn btn-primary">Posteaza recenzia</button>
    		  </div>
    		</div>
    	  </div>
    	</div>
    	
    </div>
</div>


<!-- Contact -->
<div class="container-fluid" id="contact-area">
    <div class="container" id="Contact">
    	
    </div>
</div>
    
<div class="footer">
    <div class="left-side-div">
    </div>

    <div class="right-side-div">
    </div>

</div>
</body>
</html>