
<?php
session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query(
$con,
"SELECT * FROM `products` WHERE `code`='$code'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>







<!DOCTYPE html>

<head>

<title>Hugs + Kisses Plushie Company | Home</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://kit.fontawesome.com/de60f73fe8.js" crossorigin="anonymous"></script>

<link href="shoppingcart.css" rel="stylesheet" type="text/css">

<script>
	tailwind.config = {
		plugins: [
			require('@tailwindcss/aspect-ratio'), /* Required for product list component */
		],
	}
</script>

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
</style>




</head>
<body>

<header class="py-3">
    <div class="container d-flex flex-wrap justify-content-between">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid promo-bg pb-5">
		<h1 class="display-4 fw-bold text-center text-white mt-5 pt-5 lh-lg">Hugs + Kisses Plushie Company</h1>
		
	<div class="container w-50 bg-white p-4 mt-5 rounded-3">
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
		
		<button type="button" class="btn btn-outline-primary btn-lg px-4 me-md-2 mt-4 fw-bold " >Shop Now</button>
	</div>
</div>























<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="cart-icon.png" /> Cart<span>
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

<?php
//This pulls the data from the database and gives it simple names for the categories loop.
$category = mysqli_query($con,"SELECT * FROM `category`");
foreach($category as $categories){
	$cat_id = $categories['id'];
	$cat_name = $categories['name'];
?>

<div class="product-row">
	<div class="bg-white ">
  		<div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    	<h2 class=" font-bold tracking-tight text-gray-900"><?= $cat_name ?></h2>

			<div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

<?php
//This pulls the data from the database and gives it simple names for the products loop.
$results = mysqli_query($con,"SELECT * FROM `products`");
foreach($results as $row){
	if ($row['cat_id'] == $cat_id) {

	$code = $row['code'];
	$image = $row['image'];
	$name = $row['name'];
	$price = $row['price'];
?>

<!-- This section is where the blocks are styled. To use the data from the database simply do "<?= $datatype ?>" in the field you're modifying. -->

	<div class="group relative product_wrapper">
    <form method='post' action=''>
    <input type='hidden' name='code' value="<?= $code ?>" />
		<div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
			<img src="<?= $image ?>" alt="" class="product-image w-full object-cover object-center lg:h-full lg:w-full">
		</div>
		<div class="mt-4 flex justify-between">
			<div>
				<h3 class="text-sm text-gray-700">
					<a>
					<span aria-hidden="true" class="absolute"></span>
					<?= $name ?>
					</a>
				</h3>
			</div>
			<p class="product-price text-sm font-medium text-gray-900">$<?= $price ?></p>
		</div>
			<button type='submit' class='buy'>Buy Now</button>
	</form>
	</div>

<?php
//This closes the products foreach loop.
}
}
?>

			</div>
		</div>
	</div>
</div>

<?php
//This closes the categories foreach loop.
}
mysqli_close($con);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>




































<div class="container">
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-5 border-top">
		<p class="col-md-4 mb-0 text-body-secondary">© 2023 Hugs + Kisses Plushie Company</p>

		<a href="#" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
			<img src="images/hugs + kisses plushie company logo.png" alt="Hugs + Kisses Plushie Company." style="height:100px;width:100px;background:gray">
		</a>

		<ul class="nav col-md-4 justify-content-end">
			<li class="nav-item"><a href="index.php" class="nav-link px-2 text-body-secondary">Home</a></li>
			<li class="nav-item"><a href="about.html" class="nav-link px-2 text-body-secondary">About</a></li>
		</ul>
</footer>
</div>

<script src="cart.js"></script>
</body>