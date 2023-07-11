<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oyster Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/productDetails.css')}}">

</head>
<body>
    <header class="nav">
        <div class="logoDiv">    
            <img src="/images/logo.png" alt="logo.jpg">
            <div class="logoText">
                <h3>A.K.R Famous Mushroom Cultivation</h3>
                <h6><em>Discover the Delicious World of Oyster Mushrooms</em></h6>
            </div>
        </div>
        <div class="navLink">
            <ul>
                <li><a href="{{url('homepage')}}">Home</a></li>
                {{-- <li><a href="#section2">About Us</a></li> --}}
                <!-- <li><a href="#section3">Products</a></li> -->
                {{-- <li><a href="#section4">Benefits</a></li> --}}
                <!-- <li><a href="#section5">Sustainability</a></li> -->
                <!-- <li><a href="#section7">Recipes</a></li> -->
                <!-- <li><a href="#section6">Order</a></li> -->
                {{-- <li><a href="#section8">Contact Us</a></li> --}}

            </ul>
        </div>
    </header>
    <section class="flex1">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset($datas->image_url1)}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset($datas->image_url2)}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset($datas->image_url3)}}" class="d-block w-100" alt="...">
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
          <div class="flex2">
            <div class="productName h4">{{$datas->productName}}</div>
            <div class="lablePrice h5 text-success">Start Bidding Price</div>
            <div class="price h3"> <span>Rs.</span><?php $str1=$datas->discount;$str2=$datas->price; $str3=$str2*($str1/100);$disPrice=$str2-$str3;print_r($disPrice);  ?> <del class="h5 text-danger"> Rs.{{$datas->price}}</del> <span class="text-success h6 ">{{$datas->discount}}% off</span></div>
            <div class="Description">
                <div class="mt-3 mb-2 h4">Description :</div>
                <!-- <div class="mt-3 mb-2 pe-5">Capture more of your world.Professional-looking vlogs are easy with the ZV-E10, thanks to interchangeable lenses that capture the world however you choose to see it. Watch the video below to discover some of the many creative possibilities.The ZV-E10's image-stabilisation system can shoot smooth, clean video footage even when you're walking6. Another feature, Face Priority Auto Exposure (AE), will automatically brighten the lighting of your face. Even when you're walking, it automatically detects your face and makes adjustments to keep it brightly lit as you move from indoors to outdoors, through light or shadow.,suitable_for-Enthusiast,-,sensor_type-Large APS-CExmor CMOS sensor,continuous_shooting_speed-5 fps</div> -->
                <div class="discr mt-4 ms-4">{{$datas->description}}</div>
            </div>
            <div class="start mt-3 h5">
                Health Benefits : <span class="h6">Mushrooms are not only a delicious addition to your meals but also a powerhouse of nutrients. Packed with vitamins, minerals, and antioxidants, they contribute to a well-balanced diet and support overall well-being. Whether you're looking to boost your immune system, improve digestion, or enhance brain function, our mushrooms are an excellent choice for incorporating healthy ingredients into your daily routine.</span>
            </div>
            {{-- <div class="start mt-3 h5">
                Bidding Starting Time : <span class="h4 text-danger">{{$datas->startingtime}}</span>
            </div> --}}
            <div class="button">
                <a href="{{url('orderPage')}}/{{$datas->id}}"><button type="button" class="btn btn-primary mt-5">Order Now</button></a>
            </div>   
        </div>
    </section>

    <!-- footer -->
    <div class="section9 container-fluid" id="section8">
        <div class="navFooter col-3">
            <h3 class="text-secondary">&emsp;Quick Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Benefits</a></li>
                <li><a href="#">Sustainability</a></li>
                <li><a href="#">Recipes</a></li>
                <li><a href="#">Order</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="productFooter col-3">
            <h3 class="text-secondary">&emsp;Our Services</h3>
            <ul>
                <li><a href="#">Button Mushroom</a></li>
                <li><a href="#">Oyster Mushroom</a></li>
                <li><a href="#">Recipes</a></li>
                <li><a href="#">Trainning</a></li>
                <li><a href="#">News</a></li>
            </ul>
        </div>
        <div class="addressFooter col-3">
            <h3 class="text-secondary">&emsp;Farm Address</h3>
            <ul>
                <li><a href="#">A.K.R Famous Mushroom Farm</a></li>
                <li><a href="#">No.54,Middle Street,</a></li>
                <li><a href="#">Kallottu(Village)</a></li>
                <li><a href="#">Tiruvannamalai</a></li>
                <li><a href="#">Pincode - 606811.</a></li>
                <li><a href="#">7418191487</a></li>
            </ul>
        </div>
        <div class="followFooter col-3">
            <h3 class="text-secondary">&emsp;Follow Us</h3>
            <ul>
                <li><button class="btn btn-secondary" type="button">Facebook</button></li>
                <li><button class="btn btn-secondary" type="button">Instagram</button></li>
                <li><button class="btn btn-secondary" type="button">Tiwtter</button></li>
                <li><button class="btn btn-secondary" type="button">Youtube</button></li>
            </ul>
        </div>
    </div>
    <div class="section10 container-fluid">
        <p class="text-center">Copyright &#169; 2023 akrfamousmushroomfarm.com All Rights Reserved.</p>
        <p class="text-center">Wedsite Designed by<span class="text-primary"> Arun soft System Pvt Ltd</span></p>
    </div>
</body>
</html>