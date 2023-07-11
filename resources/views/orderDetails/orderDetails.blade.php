<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oyster Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/orderDetails.css')}}">

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
                <li><a href="{{url('adminDashboard')}}"><div class="bt"><i class="bi bi-house-fill"></i></div></a></li>
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
    <section>
        <div class="h1 text-secondary text-center">Customer Order Details</div>
    <table class="table container mt-5 table-secondary table-striped table-hover">
        <thead class="table-dark">
              <th>Name</th>
              <th>Mobile No</th>
              <th>E-mail Id</th>
              <th>Address</th>
              <th>Product Name</th>
              <th>weight</th>
              <th>packSize</th>
              <th>Status</th>   
        </thead>
        <tbody>
        @foreach($datas as $data)
              <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->mobile}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->productName}}</td>
                {{-- <td><?php $str1=$data->discount;$str2=$data->price; $str3=$str2*($str1/100);$disPrice=$str2-$str3;print_r(ceil($disPrice));  ?></td> --}}
                <td>{{$data->weight}}</td>    
                <td>{{$data->packSize}}</td>    
                <td>
                <div style="display: flex;gap:1rem; justify-content: space-between; align-items: center;">
                    <button class="btn btn-primary" type="submit">Edit</button>
                    <button class="btn btn-danger" type="submit">Delete</button>
                </div>
                </td>
                
            
              </tr>
              @endforeach
        </tbody>
      </table>
    </section>
    <!-- footer -->
    <div class="section10 container-fluid">
        <p class="text-center">Copyright &#169; 2023 akrfamousmushroomfarm.com All Rights Reserved.</p>
        <p class="text-center">Wedsite Designed by<span class="text-primary"> Arun soft System Pvt Ltd</span></p>
    </div>
</body>
</html>