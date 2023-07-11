<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/homePage.css')}}">
</head>
<body>
    <div class="section1" id="section1">
        <header class="nav">
            <div class="logoDiv">    
                <img src="images/logo.png" alt=""width="130px">
                <div class="logoText">
                    <h3>A.K.R Famous</h3>
                    <h4>Mushroom Cultivation</h4>
                </div>
            </div>
            <div class="navLink">
                <ul>
                    <li><a href="#section1">Home</a></li>
                    <li><a href="#section2">About Us</a></li>
                    <li><a href="#section3">Products</a></li>
                    <li><a href="#section4">Benefits</a></li>
                    <li><a href="#section5">Sustainability</a></li>
                    <li><a href="#section7">Recipes</a></li>
                    <li><a href="#section6">Order</a></li>
                    <li><a href="#section8">Contact Us</a></li>

                </ul>
            </div>
        </header>
        <div class="mainText">
            <ul class="text-white">
                <li class="bar1"><h5 class="text-white bar">&emsp;&emsp;&emsp;The Best Service</h5></li>
                <li><h3 class="" style="color: rgb(90, 219, 58);">A.K.R Famous Mushroom</h3></li>
                <li><h3 class="text-white">Cultivation Chennai</h3></li>
                <li><p>Welcome to Oyster Mushroom Farm</p></li>
                <li><p>Discover the Delicious World of Oyster Mushrooms</p></li>
            </ul>
        </div>
        <div class="add add1">
            <div class="whatsapp"><i class="bi bi-whatsapp"></i></div>
            <div class="whatsapp-content"><h5>+91 7418191487</h5><h5>arun199606@gmail.com</h5></div>
        </div>

    </div>
    <!-- About us -->
    <div class="section2" id="section2">
        <h1 class="m-5 text-secondary" >About Us</h1>
        <p class="col-8">Founded with a passion for natural and sustainable farming practices,<strong> A.K.R Famous Mushroom Farm</strong> is dedicated to bringing you the highest quality mushrooms straight from our farms to your table. With years of expertise and a commitment to excellence, we have established ourselves as a leading provider of premium mushrooms in the region</p>
        <p><strong>Experience the Excellence of Oyster Mushroom Farm</strong></p>
        <p class="col-8">At Oyster Mushroom Farm, we are a passionate team of farmers dedicated to cultivating the highest quality oyster mushrooms. With years of expertise and a commitment to sustainable farming practices, we take pride in providing our customers with mushrooms that are not only delicious but also environmentally friendly.</p>
    </div>
    <div class="section3" id="section3">
        <h1 class="m-5 text-secondary">Our Products</h1>
        <div class="borders mt-4">
            <div class="box box1"><a href="{{url('allProducts')}}"><img src="images/byproduct1.jpg" alt="" srcset=""></a></div>
            <div class="box box2"><a href="{{url('oysterMushroom')}}"><img src="images/oyster1.jpg" alt="" srcset=""></a></div>
            <div class="box box3"><a href="{{url('buttonMushroom')}}"><img src="images/button1.jpg" alt="" srcset=""></a></div>
            <div class="box4"><img src="images/home5.jpg" alt="" srcset=""></div>
            {{-- <div class="box4"><a href="#"><img src="images/home5.jpg" alt="" srcset=""></a></div> --}}
            <div class="contentProduct col-10 mt-4"><p>Explore our wide range of hand-picked mushrooms, each carefully nurtured to perfection. From classic varieties like White Button and Portobello to exotic mushrooms such as Shiitake, Oyster, and Enoki, we offer an extensive selection to satisfy every palate. With a focus on organic cultivation methods, we ensure that our mushrooms are free from harmful chemicals and pesticides, providing you with a safe and natural choice.</p></div>
        </div>
    </div>
    <!-- Health Benefits -->
    <div class="section2 section4" id="section4">
        <h1 class="m-5 text-secondary container" >Health Benefits</h1>
        <p class="col-8">Mushrooms are not only a delicious addition to your meals but also a powerhouse of nutrients. Packed with vitamins, minerals, and antioxidants, they contribute to a well-balanced diet and support overall well-being. Whether you're looking to boost your immune system, improve digestion, or enhance brain function, our mushrooms are an excellent choice for incorporating healthy ingredients into your daily routine.</p>
        <p><strong>Benefits of Oyster Mushrooms:</strong></p>
        <p class="col-8 container" >Oyster mushrooms not only tantalize your taste buds but also offer a wide range of health benefits. Packed with essential nutrients and compounds, these fungi support a healthy lifestyle and contribute to your overall well-being. Discover why oyster mushrooms should be a part of your diet and explore their potential health benefits.</p>
    </div>
    <!-- Sustainability -->
    <div class="section5 section2" id="section5">
        <h1 class="p-5 text-light text-center ">Sustainability</h1>
        <p class="col-6 p-4 text-center">At <strong>A.K.R Famous Mushroom Farm</strong>, we prioritize sustainable practices to minimize our ecological footprint. Our mushroom cultivation techniques are designed to promote environmental stewardship, including recycling organic waste, optimizing water usage, and using renewable energy sources. By choosing our mushrooms, you're supporting a greener future and sustainable farming methods.</p>
    </div>
    <!-- Ordering -->
    <div class="section6 section2" id="section6">
        <h1 class="m-5 text-secondary container" >Ordering and Delivery</h1>
        <p class="col-8 p-4 text-center">Ordering from <strong>A.K.R Famous Mushroom Farm</strong> is a breeze. Visit our user-friendly website to browse our selection and place your order conveniently online. We offer various packaging sizes to suit your needs, from small packages for personal use to bulk orders for restaurants and businesses. Our dedicated team ensures prompt delivery, so you can enjoy farm-fresh mushrooms delivered straight to your doorstep.</p>
        <button type="button" class="btn btn-secondary"><a href="{{url('allProducts')}}">View Products</a></button>
    </div>
    <!-- Recipes and Inspiration -->
    <div class="section7" id="section7">
        <h1 class="m-5 text-light text-center p-4">Recipes and Inspiration</h1>
        <div class="recipes container-fluid">
            <div class="card">
                <img src="images/01.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title text-center"><strong>Mushroom Manchurian</strong></h4>
                  <div class="card-text">
                    <P><i class="bi bi-circle-fill"></i>  1 teaspoon ginger garlic paste</P>
                    <P><i class="bi bi-circle-fill"></i>  1 teaspoon ginger garlic paste</P>
                    <P><i class="bi bi-circle-fill"></i>  1 teaspoon ginger garlic paste</P>
                    <p><i class="bi bi-circle-fill"></i>  1 teaspoon soy <a href="#">Read...</a></p>
                </div>
                </div>
              </div>
              <div class="card">
                <img src="images/06.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title text-center"><strong>Mushroom Manchurian</strong></h4>
                  <div class="card-text">
                    <P><i class="bi bi-circle-fill"></i>  1 teaspoon ginger garlic paste</P>
                    <P><i class="bi bi-circle-fill"></i>  1 teaspoon ginger garlic paste</P>
                    <P><i class="bi bi-circle-fill"></i>  1 teaspoon ginger garlic paste</P>
                    <p><i class="bi bi-circle-fill"></i>  1 teaspoon soy <a href="#">Read...</a></p>
                </div>
                </div>
              </div>
              <div class="card">
                <img src="images/08.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title text-center"><strong>Mushroom Manchurian</strong></h4>
                  <div class="card-text">
                    <P><i class="bi bi-circle-fill"></i>  1 teaspoon ginger garlic paste</P>
                    <P><i class="bi bi-circle-fill"></i>  1 teaspoon ginger garlic paste</P>
                    <P><i class="bi bi-circle-fill"></i>  1 teaspoon ginger garlic paste</P>
                    <p><i class="bi bi-circle-fill"></i>  1 teaspoon soy <a href="#">Read...</a></p>
                </div>
                </div>
              </div>
        </div>
    </div>
    <!-- Connect with Us -->
    <div class="section8" id="section8">
        <h1 class="p-3 text-secondary text-center p-4">Connect with Us</h1>
        <div class="contact">
            <div class="contactText col-4">
                <div class="images3">
                    <img src="images/contact2.jpg" alt="" srcset="">
                    <img src="images/contact1.jpg" alt="" srcset="">
                    <img src="images/contact3.jpg" alt="" srcset="">
                </div>
                <!-- <p class="text-justify">Experience the exceptional taste and nutritional benefits of fresh, locally grown mushrooms by choosing [Your Mushroom Farm Name]. We invite you to embark on an exciting journey with us and indulge in the wonders of mushrooms. Place your order today and let us bring the magic of our farm to your table.</p> -->
            </div>
            <div class="contactInput col-7">
                <form action="{{url('customerquery')}}" method="post">
            <div class="feed row row-cols-2 row-cols-md-2 g-1">
                    @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="customerName" id="floatingName">
                    <label for="floatingName">Full Name</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="floatingEmail">
                    <label for="floatingEmail">E-mail</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="contactNo" id="floatingContact">
                    <label for="floatingContact">Contact No</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="websiteRating" id="floatingRating">
                    <label for="floatingRating">Website Rating</label>
                </div>
            </div>
            <div class="form-floating mt-3 g-1" id="comm">
                <textarea class="form-control" name="customerComment" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Comments</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3" id="bt1"><span>Submit</span></button>
                </form>    
        </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="section9" id="section8">
        <div class="navFooter col-3">
            <h3 class="text-secondary">&emsp;Quick Links</h3>
            <ul>
                <li><a href="{{url('homepage')}}">Home</a></li>
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
    <div class="section10">
        <p class="text-center">Copyright &#169; 2023 akrfamousmushroomfarm.com All Rights Reserved.</p>
        <p class="text-center">Wedsite Designed by<span class="text-primary"> Arun soft System Pvt Ltd</span></p>
    </div>
    <script src="index.js"></script>
</body>
</html>
