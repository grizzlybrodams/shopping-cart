<!DOCTYPE html>

<head>

<title>Hugs + Kisses Plushie Company | About Us</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://kit.fontawesome.com/de60f73fe8.js" crossorigin="anonymous"></script>
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

    .flex-container{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
    }
	.h1-style{
			font-size: 50px;
			font-family: 'Roboto', serif;
			text-align: center;
			padding: 25px;
		}
	input{
		border-color: #c0c0c0;
		border-width: 3px;
	}
	textarea{
		border-color: #c0c0c0;
		border-width: 3px;
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
          <a class="nav-link active" href="home.php">Home</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="products.php">Products</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
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
<main>

    <div class="flex-container">
		
		<div>
		
		<h1 class="h1-style">Contact Us Here</h1>
		<form action="" method="" class="form-layout">
		<label>Name: </label><br><input type="text"><br><br>
		<label>Email: </label><br><input type="email"><br><br>
		<label>Comment: </label><br><textarea></textarea><br><br>
			
		<input type="submit">
		</form>
		
		</div>
		<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3463.4674102292033!2d-95.3765117!3d29.76412329999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640bf491b59aab1%3A0x2f6eefee256ac1a1!2s1814%20Memorial%20Dr%2C%20Houston%2C%20TX%2077007!5e0!3m2!1sen!2sus!4v1701874808086!5m2!1sen!2sus" width="600" height="450" class="google-map" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>	
	</div>


</main>




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