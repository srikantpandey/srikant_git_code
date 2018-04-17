<?php
include('header/header.php');?>
<!doctype html>
<html>
<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/sliderstyle.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/productdetails.css')?>">
</head>

<!--sliderpart  -->

<header>
<div class="slideshow-container"style="max-width:100%">

    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="<?php echo base_url()?>assets/images/img1.jpg" alt="jd" style="width:100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="<?php echo base_url()?>assets/images/img2.jpg" alt="jd" style="width:100%">
        <div class="text"></div>
    </div>



    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="<?php echo base_url()?>assets/images/img3.jpg" alt="jd" style="width:100%">
        <div class="text"></div>
    </div>

</div>

<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
</header>
<br/>

<body>
<!--product details -->
<div class="container">
<div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="category.html">Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sub-category</li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                <ul class="list-group category_block">
                    <li class="list-group-item"><a href="category.html">men's wear</a></li>
                    <li class="list-group-item"><a href="category.html">women's wear</a></li>
                    <li class="list-group-item"><a href="category.html">kids wear</a></li>
                    <li class="list-group-item"><a href="category.html">accessories</a></li>
                    <li class="list-group-item"><a href="category.html">sports wear</a></li>
                </ul>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white">Trending Product</div>
                <div class="card-body">
                    <img class="card-img-top"  src="<?php echo base_url()?>assets/images/l1.jpg" alt="jd">
                    <h3 class="card-title">APPLE Macbook Pro </h3>
                    <h5 class="card-text">MACOS SIERRA WITH TOUCH BAR</h5>
                    <h4 class="bloc_left_price">$4099.00</h4>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top"  src="<?php echo base_url()?>assets/images/m1.jpg" alt="jd">


                        <div class="card-body">
                            <h4 class="card-title"><a href="product.html" title="View Product">Wrangler</a></h4>
                            <p class="card-text">Men's white Casual Shirt</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block">99.00 $</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top"  src="<?php echo base_url()?>assets/images/m2.jpg" alt="jd">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.html" title="View Product">roadstar</a></h4>
                            <p class="card-text">Men's Solid Casual Shirt</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block">99.00 $</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top"  src="<?php echo base_url()?>assets/images/m3.jpg" alt="jd">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.html" title="View Product">hoffman</a></h4>
                            <p class="card-text">Men's Casual red Shirt</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block">99.00 $</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top"  src="<?php echo base_url()?>assets/images/w3.jpg" alt="jd">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.html" title="View Product">zara</a></h4>
                            <p class="card-text">Printed Women's Black hoody</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block">99.00 $</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top"  src="<?php echo base_url()?>assets/images/w1.jpg" alt="jd">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.html" title="View Product">zara</a></h4>
                            <p class="card-text"> Printed Women's gray top.</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block">99.00 $</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top"  src="<?php echo base_url()?>assets/images/w2.jpg" alt="jd">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.html" title="View Product">Forever 21 </a></h4>
                            <p class="card-text">Printed Women's white top</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block">99.00 $</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top"  src="<?php echo base_url()?>assets/images/k3.jpg" alt="jd">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.html" title="View Product">Rebook</a></h4>
                            <p class="card-text">kids wear for particular age group </p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block">59.00 $</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top"  src="<?php echo base_url()?>assets/images/k1.jpg" alt="jd">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.html" title="View Product">lee cooper</a></h4>
                            <p class="card-text"> fashionable cap for trending wear</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block">99.00 $</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top"  src="<?php echo base_url()?>assets/images/k2.jpg" alt="jd">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.html" title="View Product">puma</a></h4>
                            <p class="card-text">kids wear under the age </p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block">99.00 $</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</div>
<br/><br/><br/><br/><br/>



</body>
</html>
<?php
include('footer/footer.php');?>

