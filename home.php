<!DOCTYPE html>

<head>

<title>Hugs + Kisses Plushie Company | HomePage</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://kit.fontawesome.com/de60f73fe8.js" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">

<script>
	tailwind.config = {
		plugins: [
			require('@tailwindcss/aspect-ratio'), /* Required for product list component */
		],
	}
</script>
    <link href="shoppingcart.css" rel="stylesheet" type="text/css" />
	
<style>
	header {
		background-color: #eee;
		border-bottom: 1px solid #dddddd;
	}

	
	nav {
		background-color: #ffffff;
		border-bottom: 1px solid #dddddd;
	}
	
	.nav-link, .navbar-nav .nav-link.active, .navbar-nav .nav-link.show {
		color: orange;
		font-weight: bold;
	}
	
	header img {
		border-radius: 10px;
	}

	h1 {
		font-family: 'Fredoka', sans-serif;
		text-shadow: 2px 2px 5px rgba(0,0,0,0.25);
	}
</style>
</head>
<body>

<header class="py-3">
    <div class="container d-flex flex-wrap justify-content-between">
      <a href="home.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
        <img src="images/hugs + kisses plushie company logo.png" alt="Hugs + Kisses Plushie Company." style="width: 100px; height: 100px; background:gray;">
      </a>
      <form class="col-12 col-lg-3 mb-3 mb-lg-0 d-flex" role="search">
        <input type="search" class="form-control align-self-center" placeholder="Search..." aria-label="Search">
      </form>
    </div>
</header>

<nav class="navbar navbar-expand-lg mb-5">
  <div class="container justify-content-center">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="products.php">Products</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
      </ul>

	  
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><i class="fa-solid fa-cart-shopping fa-2x" style="color: #fb8e54;"></i><span>
<?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<?php
if(empty($_SESSION["shopping_cart"])) {
?>
<div class="cart_div">
<a href="cart.php"><img src="cart-icon.png" /> Cart<span>
<?php echo "Empty!"; ?></span></a>
</div>
<?php
}
?>
    </div>
  </div>
</nav>


<div class="container-fluid promo-bg pb-5">
		<h1 class="display-4 fw-bold text-center text-white mt-5 pt-5 lh-lg">hugs + kisses plushie company</h1>
		
	<div class="container w-50 bg-white p-4 mt-5 rounded-3">
		<p class="lead">Welcome to Hugs + Kisses Plushie Company! We are a small team of friends who like to create fun loving plushies! We use yarn fabricated from child slave workshops only!</p>
		
		<a href="products.php" class="btn btn-outline-primary btn-lg px-4 me-md-2 mt-4 fw-bold">Shop Now</a>
	</div>
</div>

<br><br>
<div class="container-md  p-4 mb-2 rounded-2 about-div-1">
	
	<div class="float-end bg-white w-50 p-4 rounded-3">
		<h2 class="text-center fs-3 pb-3">What We Do</h2>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	
	<div style="float:none;clear:both;"></div>
</div><br>

<h1 class="text-center display-5 mb-5">Our Newest Friends!</h1>
<a href="products.php"><h3 class="text-center display-7 mb-8 btn btn-outline-primary btn-lg">Check Them Out Here!</h3></a>
<!-- PRODUCT LIST 1 -->
<div class="product-row">
<div class="bg-white ">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
	
		<div class="group relative">
			<div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
				<img src="images/chicken-crochet.png" alt="" class="product-image w-full object-cover object-center lg:h-full lg:w-full">
			</div>
			<div class="mt-4 flex justify-between">
				<div>
					<h3 class="text-sm text-gray-700">
					</h3>
					<p class="mt-1 text-sm text-gray-500">Chicken Plushie</p>
				
				</div>
			</div>
			</div>
			<div class="group relative">
			<div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
				<img src="images/bat-crochet.png" alt="" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
			</div>
			<div class="mt-4 flex justify-between">
				<div>
					<h3 class="text-sm text-gray-700">

					</h3>
					<p class="mt-1 text-sm text-gray-500">Bat</p>
				</div>
			</div>
		</div>
		</div>
		
	</div>
</div>

















<div class="container">
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-5 border-top">
		<p class="col-md-4 mb-0 text-body-secondary">© 2023 Hugs + Kisses Plushie Company</p>

		<a href="home.php" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
			<img src="images/hugs + kisses plushie company logo.png" alt="Company Name." style="height:100px;width:100px;background:gray">
		</a>

		<ul class="nav col-md-4 justify-content-end">
			<li class="nav-item"><a href="home.php" class="nav-link px-2 text-body-secondary">Home</a></li>
			<li class="nav-item"><a href="products.php" class="nav-link px-2 text-body-secondary">Products</a></li>
			<li class="nav-item"><a href="contact.php" class="nav-link px-2 text-body-secondary">Contact</a></li>
			<li class="nav-item"><a href="about.php" class="nav-link px-2 text-body-secondary">About</a></li>
		</ul>
</footer>
</div>

<script src="cart.js"></script>
</body>