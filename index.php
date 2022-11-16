<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .card
  {
	  width: 100%;
	  margin:50px;
	  border-radius:0px;
    background-color: burlywood;
    padding: 25px;
  }
  *{
	padding: 0px;
	margin: 0px;
	/* box-sizing: border-box; */
}
html,body
{
 width: 100%;
 height: 100%;
 margin: 0;
 padding: 0;
 overflow-x: hidden;
}
.btn{
  /* background-image: linear-gradient(to right, rgb(0, 0, 0), red, yellow); */
  display: block;
	width: 10%;
	height: 40px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, rgb(0, 0, 0), red, yellow);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 2rem 1rem;
	cursor: pointer;
	transition: .5s;

}
.btn:hover{
	background-position: right;
}
  .jumbotron {
    background-color: black;
  }
  .btn-amaz{
    display: block;
	width: 40%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, rgb(0, 0, 0), red, yellow);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
	transition: .5s;
  }
  .btn-amaz:hover{
	background-position: right;
}
.page-footer{
  background-color: black;
}
.btn-flip{
    display: block;
	width: 40%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, rgb(0, 0, 0), red, yellow);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
	transition: .5s;
  }
  .btn-flip:hover{
	background-position: right;
}
  img
  {
	  height:180px;
  }
  span
  {
	  font-weight:bolder;
	  font-size: large;
  }
  .heading{
    color: white;
    text-align: center;
  }
  .container{
    margin: 0rem 14rem;
  }
  #visitsite
  {
	  text-decoration:none;
	  color:white;
  }
  
  .navbar{
    display: block;
	width: 100%;
	height: 13%;
  text-align: center;
	background-color: black;
	/* background-image: linear-gradient(to right, rgb(0, 0, 0), red, yellow); */
	background-size: 200%;
	
  }
  .navbar-collapse{
    background-color: black;
  }
  .navbar:hover{
	background-position: right;
}
.link{
  text-decoration:none;
	  color:white;
}  
  .card-text
  {
	  font-weight:bolder;
	  font-size: large;
  }

  @media screen and (max-width: 1050px){
	.container{
		grid-gap: 5rem;
	}
  .navbar-brand{
    text-align: center;
  }

  .navbar{
    display: block;
	width: 100%;
	height: 20%;
  text-align: center;
	background-color: black;
	/* background-image: linear-gradient(to right, rgb(0, 0, 0), red, yellow); */
	background-size: 200%;
	
  }
  form-control{
		width: 50%;
	}
  .btn{
		width: 50%;
	}
  .btn-flip{
		width: 50%;
	}
  .btn-amaz{
		width: 50%;
	}
}
@media screen and (max-width: 400px){
	.container{
		grid-gap: 5rem;
	}

  form-control{
		width: 50%;
	}
  .btn{
		width: 50%;
	}
  .btn-flip{
		width: 50%;
	}
  .btn-amaz{
		width: 50%;
	}
}

@media screen and (max-width: 1000px){
	form-control{
		width: 50%;
	}

  .btn{
		width: 50%;
	}
  .btn-flip{
		width: 50%;
	}
  .btn-amaz{
		width: 50%;
	}
	.img img{
		width: 400px;
	}
}

@media screen and (max-width: 900px){
	.container{
		grid-template-columns: 1fr;
	}

  form-control{
		width: 50%;
	}
  .btn{
		width: 50%;
	}
  .btn-flip{
		width: 50%;
	}
	.img{
		display: none;
	}

}


body{
  background-image: url('bg.jpeg');
}
</style>  
<head>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
</head>
<body>
  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark btn-dark">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="index.php">
  <h5 class="heading"> Ecommerce Price Comparison Using Web Scrapping</h5>
  </a>
  <h5 class="heading">Here you can compare prices of a product on various e-commerce platforms..</h5>

  <!-- Collapse button -->
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->


</nav>
<!--/.Navbar-->
<br><br>

<!-- <div class="jumbotron">
  <div class="container">
    <h1 class="heading">Ecommerce Price Comparison Using Web Scrapping</h1>      
    <h5 class="heading">Price Comparison Tool : Here you can compare prices of a product on various e-commerce platforms..</h5>
  </div>
</div> -->

<br><br>
<form class="form-inline d-flex justify-content-center md-form form-sm mt-0" action="index.php" method="POST">
  <i class="fas fa-search" aria-hidden="true"></i>
  <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" name="searchtext" value=""
    aria-label="Search"><br><br>
  <input class="btn btn-dark btn-rounded " type="submit" value="Search">
</form>

<!--Section: Group of personal cards-->
<section class="pt-5 mt-3 pb-3">

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-md-12">

      <!--Card group-->
      <div class="card-group">

        <!--Card-->
        <div class="card card-personal mb-6 mr-2">

          <!--Card image-->
          <div class="view">
            <img class="card-img-top" src="flipkart.jpeg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body">
            <!--Title-->
            <a>
              <h4 class="card-title">flipkart.com</h4>
            </a>
            <hr>
            <h5 class="card-meta">Search Results</h5>

            <!--Text-->
            <p class="card-text">
<?php
require 'simple_html_dom.php';
$searchtext="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$searchtext = $_POST["searchtext"];
}
$searchtext = str_replace(' ', '%20', $searchtext);
$flp_str1="https://www.flipkart.com/search?q=";
$flp_str2="&otracker=search&otracker1=search&marketplace=FLIPKART&as-show=on&as=off";
$flp_query=$flp_str1.$searchtext.$flp_str2;
$flip_link="";
$html = file_get_html($flp_query);
#1
$title=[];
$i=0;
if(isset($html->find('div[class="_4rR01T"]',0)->plaintext)){
   foreach($html->find('div[class="_4rR01T"]') as $t){
    $title[$i++]=$t->plaintext;
    if($i>3)
    break;
   }
}
// echo "<pre>";
// print_r($title);
// echo "</pre>";
echo "<span class='float-left'>";
$price=[];
$i=0;
if(isset($html->find('div[class="_30jeq3 _1_WHN1"]',0)->plaintext)){
  foreach($html->find('div[class="_30jeq3 _1_WHN1"]') as $p){
    $price[$i++]=$p->plaintext;
    if($i>3)
    break;
   }
}
$pic_flip = [];
$i=0;
if(isset($html->find('div[class="CXW8mj"]',0)->innertext)){
  foreach($html->find('div[class="CXW8mj"]')as $p){
    $pic_flip[$i++]=$p->innertext;
    if($i>3)
    break;
  }
}
$rate_flip=[];
$i=0;
if(isset($html->find('div[class="gUuXy-"]',0)->plaintext)){
  foreach($html->find('div[class="gUuXy-"]')as $r){
    $rate_flip[$i++]=$r->plaintext;
    if($i>3)
    break;
  }
}

$link_flip=[];
$i=0;
if(isset($html->find('a[class="_1fQZEK"]',0)->href)){
  foreach($html->find('a[class="_1fQZEK"]') as $l){
  $link_flip[$i++]=$l->href;
  if($i>3)
  break;
  }
}
// echo "<pre>";
// print_r($link_flip);
// echo "</pre>";
function fun($title,$price,$pic_flip,$rate_flip,$link_flip){
  return "$title $price <br> $pic_flip <br>$rate_flip <button type='button' class='btn-flip btn-primary '><a href='https://www.flipkart.com$link_flip' id='visitsite'>Go To Flipkart</a></button>";
}
$newProduct = array_map('fun',$title,$price,$pic_flip,$rate_flip,$link_flip);
// echo "<pre>";
foreach($newProduct as $np){
  echo "<b> $np </b> ";
  echo "</br></br>";
}
// echo "</pre>";



?>
			
			
			
			
			</p>
            <!-- <hr> -->
          </div>
          <!--Card content-->

        </div>
        <!--Card-->

        <!--Card-->
        <div class="card card-personal mb-6">

          <!--Card image-->
          <div class="view">
            <img class="card-img-top" src="amazon.jpeg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body">
            <!--Title-->
            <a>
              <h4 class="card-title">amazon.com</h4>
            </a>
            <hr>
            <h5 class="card-meta">Search Results</h5>

            <!--Text-->
            <p class="card-text">
			<?php
$amz_str1="https://www.amazon.in/s?k=";
$amz_str2="&ref=nb_sb_noss_2";

$amz_query=$amz_str1.$searchtext.$amz_str2;

$amaz_link="";

$html = file_get_html($amz_query);

#1

//  if(isset($html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->innertext)){
// 	echo $html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->innertext;
// }
// echo "<span class='float-right'>";

// if(isset($html->find('span[class="a-offscreen"]',0)->plaintext)){
//   // echo "₹";
// 	echo $html->find('span[class="a-offscreen"]',0)->plaintext;
// }
// if(isset($html->find('a[class="a-link-normal s-underline-text s-underline-link-text s-link-style a-text-normal"]',0)->href)){
//   $amaz_link=$html->find('a[class="a-link-normal s-underline-text s-underline-link-text s-link-style a-text-normal"]',0)->href;
//   echo "<br>";
//     // echo $amaz_link;
//   echo "<br>";
//    echo "<button type='button' class='btn-amaz btn-primary'><a href='https://www.amazon.in$amaz_link' id='visitsite'>Go To Amazon</a></button>";
//   }

$title_amaz=[];
$i=0;
if(isset($html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->plaintext)){
   foreach($html->find('span[class="a-size-medium a-color-base a-text-normal"]') as $t){
    $title_amaz[$i++]=$t->plaintext;
    if($i>3)
    break;
   }
}
// echo "<pre>";
// print_r($title);
// echo "</pre>";
echo "<span class='float-left'>";
$price_amaz=[];
$i=0;
if(isset($html->find('span[class="a-offscreen"]',0)->plaintext)){
  foreach($html->find('span[class="a-offscreen"]') as $p){
    $price_amaz[$i++]=$p->plaintext;
    if($i>3)
    break;
   }
}
$pic_amaz = [];
$i=0;
if(isset($html->find('div[class="a-section aok-relative s-image-fixed-height"]',0)->innertext)){
  foreach($html->find('div[class="a-section aok-relative s-image-fixed-height"]')as $p){
    $pic_amaz[$i++]=$p->innertext;
    if($i>3)
    break;
  }
}
$rate_amaz=[];
$i=0;
if(isset($html->find('div[class="a-row a-size-small"]',0)->plaintext)){
  foreach($html->find('div[class="a-row a-size-small"]')as $r){
    $rate_amaz[$i++]=$r->plaintext;
    if($i>3)
    break;
  }
}

$link_amaz=[];
$i=0;
if(isset($html->find('a[class="a-link-normal s-underline-text s-underline-link-text s-link-style a-text-normal"]',0)->href)){
  foreach($html->find('a[class="a-link-normal s-underline-text s-underline-link-text s-link-style a-text-normal"]') as $l){
  $link_amaz[$i++]=$l->href;
  if($i>3)
  break;
  
  }
}
// echo "<pre>";
// print_r($link_flip);
// echo "</pre>";
function fun2($title_amaz,$price_amaz,$pic_amaz,$rate_amaz,$link_amaz){
  return "$title_amaz $price_amaz <br> $pic_amaz <br> $rate_amaz <button type='button' class='btn-amaz btn-primary '><a href='https://www.amazon.in$link_amaz' id='visitsite'>Go To Amazon</a></button>";
}
$newProduct_amaz = array_map('fun2',$title_amaz,$price_amaz, $pic_amaz,$rate_amaz, $link_amaz);
// echo "<pre>";
foreach($newProduct_amaz as $np){
  echo "<b> $np </b> ";
  echo "</br></br>";
}
// echo "</pre>";
?>	
			</p>
            <!-- <hr> -->
           <!-- <button type="button" class="btn btn-primary"><a href="https://www.amazon.in/s?k=+<?$amaz_link ?>" id="visitsite">Visit amazon</a></button> -->
          </div>
          <!--Card content-->

        </div>
        <!--Card-->


      </div>
      <!--Card group-->

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->

</section>
<!--Section: Group of personal cards-->


<!-- Footer -->
<footer class="page-footer font-small  pt-4 btn-dark" >

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Price Comparison Tool</h5>
        <p>Here you can compare prices of a product on various e-commerce platforms.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">E-commerce sites</h5>

        <ul class="list-unstyled">
          <li>
           <h6> Amazon</h6>
          </li>
          <li>
          <h6>Flipkart</h6>
          </li>
         
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a class="link" href="https://www.amazon.in">Amazon</a>
          </li>
          <li>
            <a class="link" href="www.flipkart.com">Flipkart</a>
          </li>
        
          
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
</body>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2022 Copyright:
    <a href=""> Created By Group 27</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>