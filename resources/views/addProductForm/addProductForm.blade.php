<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/addProductForm.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <header class="nav">
        <div class="logoDiv">    
            <img src="/images/logo.png" alt=""width="130px">
            <div class="logoText">
                <h3>A.K.R Famous Mushroom Cultivation</h3>
                <!-- <h4></h4> -->
            </div>
        </div>
        <div class="bt"><a href="{{url('adminDashboard')}}"><i class="bi bi-house-fill"></i></a></div>
    </header>
    
    <!-- <div class="navLink">
        <ul>
            <li><a href="#section1">Home</a></li>
        </ul>
    </div> -->
    <div class="text-center h2 mt-3 text-secondary">Add Products Form</div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="form container p-5" id="border">    
        <form method="post" action="{{url('formSave')}}" class="row g-3" enctype="multipart/form-data">
            @csrf
            <div class="col-md-4">
                <label for="Category" class="form-label">Product Category</label>
                <select id="Category" name="Category" class="form-select">
                    <option selected>Choose...</option>
                    <option>Button Mushroom</option>
                    <option>Oyster Mushroom</option>
                </select>
            </div>
            <div class="col-md-8">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="productName" id="productName">
                <div class="error1"></div>
            </div>
            <div class="col-md-4">
                <label for="weight" class="form-label">Pack Size (in Kg)</label>
                <input type="text" class="form-control" name="weight" id="weight">
                <div class="error1"></div>
            </div>
            <div class="col-md-4">
                <label for="price" class="form-label">Product Price (in Rs.)</label>
                <input type="text" class="form-control" name="price" id="price">
                <div class="error1"></div>
            </div>
            <div class="col-md-4">
                <label for="discount" class="form-label">Product Discount (%)</label>
                <input type="text" class="form-control" name="discount" id="discount">
                <div class="error1"></div>
            </div>
            <div class="col-md-12">
                <label for="description" class="form-label">Product Description</label>
                <textarea type="text" rows="3" name="description" class="form-control" id="description"></textarea>
            </div>
            <div class="col-md-4">
                <label for="image1" class="form-label">Choose best Image 1</label>
                <input type="file" class="form-control" name="image1" id="image1">
            </div>
            <div class="col-md-4">
                <label for="image2" class="form-label">Choose best Image 2</label>
                <input type="file" class="form-control" name="image2" id="image2">
            </div>
            <div class="col-md-4">
                <label for="image3" class="form-label">Choose best Image 3</label>
                <input type="file" class="form-control" name="image3" id="image3">
            </div>
            <div class="d-grid gap-2 col-3 mx-auto mt-5">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>

        </form>
    </div>

</body>
</html>