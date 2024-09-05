<!DOCTYPE html>
<html>
<head>
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <nav class="navbar navbar-expand-sm bg-light justify-content-center fixed-top " style="height: 80px;">
        <ul class="navbar-nav">
        <a class="navbar-brand" href="javascript:void(0)">The Comfort Zone</a>
          <li class="nav-item">
            <a class="nav-link" href="user">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="future">Future</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">News</a>
          </li>
        </ul>
         <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">

            </form>
            <a href="/logout" style="margin-left:50px;"><button>Logout</button></a>
      </nav>
<section>
    <div class="container mt-3">
        <div class="card" style="width:200px;height:200px; margin-top:20%;">
          <a href="detail"><img class="card-img-top" src="https://i.pinimg.com/236x/4b/76/bc/4b76bc0fba824f47443572676e90c32c.jpg" alt="Card image" style="width:100%"></a>
          <div class="desk" style="margin-top: 5px;">
            kursi kaya
            <div class="harga">$5.99</div>
          </div>
          <div class="card-body">
            <a href="#" class="btn">Beli</a>
            <a href="keranjang" class="btn">Keranjang</a>
          </div>
        </div>
        <div class="card" style="width:200px;height:200px; margin-left:22%; margin-top:-18%; ">
            <a href="detail"><img class="card-img-top" src="https://i.pinimg.com/236x/4b/76/bc/4b76bc0fba824f47443572676e90c32c.jpg" alt="Card image" style="width:100%"></a>
            <div class="desk" style="margin-top: 5px;">
              kursi kaya
              <div class="harga">$5.99</div>
            </div>
            <div class="card-body">
              <a href="#" class="btn">Beli</a>
              <a href="keranjang" class="btn">Keranjang</a>
            </div>
          </div>
          <div class="card" style="width:200px;height:200px; margin-left:43%; margin-top:-18%; ">
            <a href="detail"><img class="card-img-top" src="https://i.pinimg.com/236x/4b/76/bc/4b76bc0fba824f47443572676e90c32c.jpg" alt="Card image" style="width:100%"></a>
            <div class="desk" style="margin-top: 5px;">
              kursi kaya
              <div class="harga">$5.99</div>
            </div>
            <div class="card-body">
              <a href="#" class="btn">Beli</a>
              <a href="keranjang" class="btn">Keranjang</a>
            </div>
          </div>
          <div class="card" style="width:200px;height:200px; margin-left:64%; margin-top:-18%; ">
            <a href="detail"><img class="card-img-top" src="https://i.pinimg.com/236x/4b/76/bc/4b76bc0fba824f47443572676e90c32c.jpg" alt="Card image" style="width:100%"></a>
            <div class="desk" style="margin-top: 5px;">
              kursi kaya
              <div class="harga">$5.99</div>
            </div>
            <div class="card-body">
              <a href="#" class="btn">Beli</a>
              <a href="keranjang" class="btn">Keranjang</a>
            </div>
          </div>
          <div class="card" style="width:200px;height:200px; margin-left:85%; margin-top:-18%; ">
            <a href="detail"><img class="card-img-top" src="https://i.pinimg.com/236x/4b/76/bc/4b76bc0fba824f47443572676e90c32c.jpg" alt="Card image" style="width:100%"></a>
            <div class="desk" style="margin-top: 5px;">
              kursi kaya
              <div class="harga">$5.99</div>
            </div>
            <div class="card-body">
              <a href="#" class="btn">Beli</a>
              <a href="keranjang" class="btn">Keranjang</a>
            </div>
          </div>
    </div>
    <div class="container mt-3">
        <div class="card" style="width:200px;height:200px; margin-top:20%;">
          <a href="detail"><img class="card-img-top" src="https://i.pinimg.com/236x/4b/76/bc/4b76bc0fba824f47443572676e90c32c.jpg" alt="Card image" style="width:100%"></a>
          <div class="desk" style="margin-top: 5px;">
            kursi kaya
            <div class="harga">$5.99</div>
          </div>
          <div class="card-body">
            <a href="#" class="btn">Beli</a>
            <a href="keranjang" class="btn">Keranjang</a>
          </div>
        </div>
        <div class="card" style="width:200px;height:200px; margin-left:22%; margin-top:-18%; ">
            <a href="detail"><img class="card-img-top" src="https://i.pinimg.com/236x/4b/76/bc/4b76bc0fba824f47443572676e90c32c.jpg" alt="Card image" style="width:100%"></a>
            <div class="desk" style="margin-top: 5px;">
              kursi kaya
              <div class="harga">$5.99</div>
            </div>
            <div class="card-body">
              <a href="#" class="btn">Beli</a>
              <a href="keranjang" class="btn">Keranjang</a>
            </div>
          </div>
          <div class="card" style="width:200px;height:200px; margin-left:43%; margin-top:-18%; ">
            <a href="detail"><img class="card-img-top" src="https://i.pinimg.com/236x/4b/76/bc/4b76bc0fba824f47443572676e90c32c.jpg" alt="Card image" style="width:100%"></a>
            <div class="desk" style="margin-top: 5px;">
              kursi kaya
              <div class="harga">$5.99</div>
            </div>
            <div class="card-body">
              <a href="#" class="btn">Beli</a>
              <a href="keranjang" class="btn">Keranjang</a>
            </div>
          </div>
          <div class="card" style="width:200px;height:200px; margin-left:64%; margin-top:-18%; ">
            <a href="detail"><img class="card-img-top" src="https://i.pinimg.com/236x/4b/76/bc/4b76bc0fba824f47443572676e90c32c.jpg" alt="Card image" style="width:100%"></a>
            <div class="desk" style="margin-top: 5px;">
              kursi kaya
              <div class="harga">$5.99</div>
            </div>
            <div class="card-body">
              <a href="#" class="btn">Beli</a>
              <a href="keranjang" class="btn">Keranjang</a>
            </div>
          </div>
          <div class="card" style="width:200px;height:200px; margin-left:85%; margin-top:-18%; ">
            <a href="detail"><img class="card-img-top" src="https://i.pinimg.com/236x/4b/76/bc/4b76bc0fba824f47443572676e90c32c.jpg" alt="Card image" style="width:100%"></a>
            <div class="desk" style="margin-top: 5px;">
              kursi kaya
              <div class="harga">$5.99</div>
            </div>
            <div class="card-body">
              <a href="#" class="btn">Beli</a>
              <a href="keranjang" class="btn">Keranjang</a>
            </div>
          </div>
    </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
