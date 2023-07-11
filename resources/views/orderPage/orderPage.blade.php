<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/orderPage.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <header class="nav">
        <div class="logoDiv">    
            <img src="/images/logo.png" alt=""width="130px">
            <div class="logoText">
                <h3>A.K.R Famous Mushroom Cultivation</h3>
                <h6><em>Discover the Delicious World of Oyster Mushrooms</em></h6>
                <!-- <h4></h4> -->
            </div>
        </div>
        <div class="bt"><a href="{{url('homepage')}}"><i class="bi bi-house-fill"></i></a></div>
    </header>
    
    <!-- <div class="navLink">
        <ul>
            <li><a href="#section1">Home</a></li>
        </ul>
    </div> -->
    <div class="text-center h2 m-4 text-secondary">Add Products Form</div>
    <div class="form container p-5" id="border"> 
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="personal">
            <div class="post1 h4">Personal Details</div>
            <form action="{{url("orderFormSave")}}" method="post" class="row m-3">
                <div class="col-md-12 mt-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                    <div class="error1"></div>
                </div>
                <div class="col-md-12">
                    <label for="mobile" class="form-label">Mobile No</label>
                    <input type="text" class="form-control" name="mobile" id="mobile">
                    <div class="error1"></div>
                </div>
                <div class="col-md-12">
                    <label for="email" class="form-label">Email Id</label>
                    <input type="text" class="form-control" name="email" id="email">
                    <div class="error1"></div>
                </div>
                <div class="col-md-12">
                    <label for="address" class="form-label">Address</label>
                    <textarea type="text" rows="3" name="address" class="form-control" id="address" placeholder="Description in your product details maximum 120 words"></textarea>
                </div>
        </div>
        <div class="product">
            <div class="post2 h4">Product Details</div>
                @csrf
                <div class="col-md-11 m-3">
                    <label for="productName" class="form-label">Mushroom Name</label>
                    <input type="text" class="form-control" name="productName" value="{{$datas->productName}}" id="productName" >
                    <div class="error1"></div>
                </div>
                <div class="col-md-11 m-3">
                    <label for="weight" class="form-label">Weight</label>
                    <input type="text" class="form-control" name="weight" id="weight" value="{{$datas->weight}}" >
                    <div class="error1"></div>
                </div>
                <div class="col-md-11 m-3">
                    <label for="packSize" class="form-label">Pack Size</label>
                    <input type="quantity" class="form-control" name="packSize" id="packSize" placeholder="Which Qty you have '3'Packets">
                    <div class="error1"></div>
                </div>
                <div class="d-grid gap-2 col-3 mx-auto mt-5">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
        </div>  
    </form>
    </div>
</body>
</html>