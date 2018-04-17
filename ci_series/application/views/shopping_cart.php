<?php include('header/header.php')
?>
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
            setTimeout(showSlides, 1600); // Change image every 2 seconds
        }
    </script>



<html>
<head>
    <title>Codeigniter Shopping </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <br /><br />

    <div class="col-lg-6 col-md-6">
        <div class="table-responsive">
            <h3 align="center">Product In sell</h3><br />
            <?php
   foreach($product as $row)
   {
    echo '
    <div class="col-md-4" style="padding:16px; background-color:#f1f1f1; border:1px solid #ccc; margin-bottom:16px; height:400px" align="center">
     <img src="'.base_url().'images/'.$row->product_image.'" class="img-thumbnail" /><br />
     <h4>'.$row->product_name.'</h4>
     <h3 class="text-danger">$'.$row->product_price.'</h3>
     <input type="text" name="quantity" class="form-control quantity" id="'.$row->product_id.'" /><br />
     <button type="button" name="add_cart" class="btn btn-success add_cart" data-productname="'.$row->product_name.'" data-price="'.$row->product_price.'" data-productid="'.$row->product_id.'" />Add to Cart</button>
    </div>
    ';
   }
   ?>

        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <div id="cart_details">
            <h3 align="center">Cart is Empty</h3>
        </div>
    </div>

</div>
</body>
</html>
<script>
    $(document).ready(function(){

        $('.add_cart').click(function(){
            var product_id = $(this).data("productid");
            var product_name = $(this).data("productname");
            var product_price = $(this).data("price");
            var quantity = $('#' + product_id).val();
            if(quantity != '' && quantity > 0)
            {
                $.ajax({
                    url:"<?php echo base_url(); ?>shopping_cart/add",
                    method:"POST",
                    data:{product_id:product_id, product_name:product_name, product_price:product_price, quantity:quantity},
                    success:function(data)
                    {
                        alert("Product Added into Cart");
                        $('#cart_details').html(data);
                        $('#' + product_id).val('');
                    }
                });
            }
            else
            {
                alert("Please Enter quantity");
            }
        });

        $('#cart_details').load("<?php echo base_url(); ?>shopping_cart/load");

        $(document).on('click', '.remove_inventory', function(){
            var row_id = $(this).attr("id");
            if(confirm("Are you sure you want to remove this?"))
            {
                $.ajax({
                    url:"<?php echo base_url(); ?>shopping_cart/remove",
                    method:"POST",
                    data:{row_id:row_id},
                    success:function(data)
                    {
                        alert("Product removed from Cart");
                        $('#cart_details').html(data);
                    }
                });
            }
            else
            {
                return false;
            }
        });

        $(document).on('click', '#clear_cart', function(){
            if(confirm("Are you sure you want to clear cart?"))
            {
                $.ajax({
                    url:"<?php echo base_url(); ?>shopping_cart/clear",
                    success:function(data)
                    {
                        alert("Your cart has been clear...");
                        $('#cart_details').html(data);
                    }
                });
            }
            else
            {
                return false;
            }
        });

    });
</script>


<?php
 include ('footer/footer.php');
?>
</html>