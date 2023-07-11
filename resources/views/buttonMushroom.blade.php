<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oyster Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/buttonMushroom.css')}}">

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
    <div class="spacing">
        <div><h1 class="container-fluid header1">Button Mushroom Products</h1></div>
    <div class="boxsize">
        <div class="row row-cols2 row-cols-md-5 g-4">
            @foreach($datas as $data)
            <div class="col">
              <div class="card">
                <img src="{{asset($data->image_url1)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="card-title h6" style="font-weight: 600;">{{$data->productName}}</div>
                  <div class="card-text m-1">
                    <P class="lh-1" style="margin: 5px;">{{$data->description}}</P>
                    <p class=""><del>{{$data->price}}</del> <span class="text-success h6 ">{{$data->discount}}% off</span></p>
                    <div class="h5" style="margin: 5px;"><?php $str1=$data->discount;$str2=$data->price; $str3=$str2*($str1/100);$disPrice=$str2-$str3;print_r($disPrice);  ?></div>
                    <div class="d-grid gap-1 col-12 mx-auto">
                        <button class="btn btn-primary"><a href="{{url('productDetails')}}/{{$data->id}}">View</a></button> 
                    </div>
                </div>
                </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>

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