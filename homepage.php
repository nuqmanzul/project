<!DOCTYPE html>

<html lang="en">
<?php include ('style/header.php'); ?>
<body class="form-bg2">
	<div class="container-sm">
		<nav class="navbar navbar-expand-md navbar-custom" id="nav">

			<a href="index.php" class="navbar-brand">Caden Arisyah</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-lable="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="toggleMobileMenu">
				<ul class="navbar-nav text-center ms-auto">
					<li class=""><a href="order.php?id=<?php echo $_GET['id']; ?>" class="nav-link navbar-text">Order Now</a></li>
					<li class=""><a href="login.php" class="nav-link navbar-text">Log Out</a></li>
					<!-- <li class="nav-item dropdown">
          	<a class="nav-link dropdown-toggle navbar-text" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" 	aria-expanded="false">Themes</a>
          	<ul class="dropdown-menu dropdown-bg border-0 text-center" aria-labelledby="navbarDropdown">
          	  <li><a class="dropdown-item navbar-text" href="#" onclick="dark()">Dark</a></li>
          	  <li><a class="dropdown-item navbar-text" href="#" onclick="light()">Light</a></li>
          	</ul>
        	</li> -->
				</ul>
			</div>
		</nav>
	</div>

  <div class="container-md g-3" style="background-color: rgba(0, 0, 0, 0.6)">
    <div class="row py-3">
      <!-- <div class="d-flex flex-column justify-content-center align-items-center bg-image" id="bg" style="background-image: url('style/bg1.jpg'); height: 50vh;"> -->
      <div class="col-md-6 mx-auto">
        <h3 class="text-center text-white">Blaze Lip Glow</h3>
        <div id="carouselExampleIndicators" class="carousel carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="style/img (1).jpg" class="d-block w-100" alt="" style="height: 50vh;">
          </div>
          <div class="carousel-item">
            <img src="style/img (2).jpg" class="d-block w-100" alt="" style="height: 50vh;">
          </div>
          <div class="carousel-item">
            <img src="style/img (8).jpg" class="d-block w-100" alt="" style="height: 50vh;">
          </div>
          <div class="carousel-item">
            <img src="style/img (9).jpg" class="d-block w-100" alt="" style="height: 50vh;">
          </div>
          <div class="carousel-item">
            <img src="style/img (7).jpg" class="d-block w-100" alt="" style="height: 50vh;">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        </div>
      </div>
    <!-- </div> -->
    </div>
    <div class="row py-3">
      <div class="col-sm-4">
        <img src="style/img (11).jpg" class="d-block w-100" alt="" style="height: 50vh;">
      </div>
      <div class="col-sm-8 d-flex flex-column justify-content-center align-items-center">
        <p class="text-md-end text-white">Blaze Lip Glow is an oil based treatment lip gloss.</p>
        <p class="text-md-end text-white">Boleh digunakan oleh perempuan dan juga lelaki.</p>
        <p class="text-md-end text-white">Membantu merawat bibir yang mengelupas, gelap dan kusam.</p>
        <p class="text-md-end text-white">Blaze Lip Glow fokus untuk membantu stimulate blood circulation.</p>
        <p class="text-md-end text-white">Blaze Lip Glow juga digunakan untuk wound healing.</p>
      </div>
    </div>
    <div class="row py-3">
      <div class="col-sm-6 mx-auto">
        <h1 class="text-white text-center">Blaze Lip Glow is for someone who have</h1>
        <ul class="list-group text-center">
          <li class="list-group-item disabled" aria-disabled="true">Dry and flaky lip</li>
          <li class="list-group-item disabled" aria-disabled="true">Small wounds on lip</li>
          <li class="list-group-item disabled" aria-disabled="true">Dullness and darken lip</li>
        </ul>
      </div>
    </div>
    <div class="row py-3">
      <div class="col-sm-6">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="style/vid1.mp4"></iframe>
        </div>
      </div>
      <div class="col-md-6">
        <h1 class="text-white text-center">Ingredients Benefit</h1>
          <ul class="list-group text-center">
            <li class="list-group-item disabled" aria-disabled="true">

              🌱Lithospermum oil: can treat your cracked,chapped, split lip ,reduce inflammation and promote wound healing.

            </li>
            <li class="list-group-item disabled" aria-disabled="true">
            
            🍊 Vitamin c: invigorates lips for a firmer look while preventing dryness and a great ingredient for nourishing the skin on your lips also brightening your lips

            </li>
            <li class="list-group-item disabled" aria-disabled="true">
              
            🥑Oils like avocado: last longer on the skin's surface,it helps keep your lips,smooth and more radiant and rebuild the skin’s protactive barrier and also hydrate lips to give a supple feeling and a great natural lip plumper for fuller lips.
            
            </li>
          </ul>
      </div>
    </div>
    <div class="row py-3">
      <div class="col-sm-8 d-flex flex-column justify-content-center align-items-center">
        <p class="text-md-end text-white">Blaze Lip Glow 100% all naturals vegan with no chemicals and paraben.</p>
        <p class="text-md-end text-white">Blaze Lip Glow also no animal cruelty.</p>
        <p class="text-md-end text-white">Blaze Lip Glow Mengandungi bahan-bahan yang terbaik.</p>
        <p class="text-md-end text-white">Bahan-bahan yang terkandung sangat membantu bibir anda.</p>
      </div>
      <div class="col-sm-4">
        <img src="style/img (12).jpg" class="d-block w-100" alt="" style="height: 50vh;">
      </div>
    </div>
  </div>
  </div>
  <footer class="section">
    <div class="text-center text-white">Copyright 2020 CadenArisyah</div>
  </footer>
</body>
</html>