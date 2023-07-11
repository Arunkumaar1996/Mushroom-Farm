<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oyster Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/adminDashboard.css')}}">

</head>
<body>
    <header class="nav">
        <div class="logoDiv">    
            <img src="/images/logo.png" alt="logo.jpg"width="130px">
            <div class="logoText">
                <h3>A.K.R Famous Mushroom Cultivation</h3>
                <h6><em>Discover the Delicious World of Oyster Mushrooms</em></h6>
            </div>
        </div>
        <div class="navLink">
            <ul>
                <li><a href="{{url('homepage')}}"><div class="bt"><i class="bi bi-house-fill"></i></div></a></li>
                <!-- <li><a href="#section2">About Us</a></li> -->
                <!-- <li><a href="#section3">Products</a></li> -->
                <!-- <li><a href="#section4">Benefits</a></li> -->
                <!-- <li><a href="#section5">Sustainability</a></li> -->
                <!-- <li><a href="#section7">Recipes</a></li> -->
                <!-- <li><a href="#section6">Order</a></li> -->
                <!-- <li><a href="#section8">Contact Us</a></li> -->

            </ul>
        </div>
    </header>
    <!-- table -->
    <div class="outer">
        <h1 class=" text-secondary">Admin Dashboard</h1>
        <div class="inner">
            <div class="box"><a href="{{url('addProductForm')}}">Add product Form</a></div>
            <div class="box"><a href="{{url('viewUploadProduct')}}">Product Status</a></div>
            <div class="box"><a href="{{url('orderDetails')}}">Customer Order Details</a></div>
            <div class="box"><a href="{{url('customerQueryView')}}">Customer Query</a></div>
        </div>
    </div>

    <!-- footer -->
    <div class="section10 container-fluid">
        <p class="text-center">Copyright &#169; 2023 akrfamousmushroomfarm.com All Rights Reserved.</p>
        <p class="text-center">Wedsite Designed by<span class="text-primary"> Arun soft System Pvt Ltd</span></p>
    </div>
</body>
</html>