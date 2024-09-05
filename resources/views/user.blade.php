<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
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
    <div class="container-fluid" style="background-color: rgb(198, 201, 200); height:65vh; width:85%;">
        <div class="container">
           <div class="row">
            <div class="col-md-6">
                <h5 class="text-white" style="margin-top: 25%; font-size: 40px;">Your Future Furniture</h5>
                <h6 class="text-white" style="font-size: 30px">New Design for your dream</h6>
                <h3 class="text-white" style="font-size: 20px; margin-top: 40px;">Turn your room into a lot more <br>
                minimalist and modern</h3>
            </div>
            <div class="col-md-6" style="margin-top: 10px;">
                <img src="https://png.pngtree.com/png-clipart/20220719/ourmid/pngtree-lampu-gantung-modern-png-image_6006817.png" alt="">
            </div>
           </div>
        </div>
    </div>
</section>
<div class="row" style="margin-left: 14%">
    <div class="col-sm-4 m-3" style="background-color:rgb(224, 221, 221); width:25%; margin-left:10%; height:20vh;">
        <h6 class="text-black" style="margin-left:; margin-top: 10px;">COMFORTABLE <b>CHAIR</b></h6>
        <p style="font-size: 10px">Lorem ipsum dolor sit amet. <br>
        Lorem, ipsum dolor.</p>
        <a href="products">more..</a>
        <img style="width: 50%; margin-top:-110px; margin-left:55%" src="{{asset('storage/foto/Apartment_Therapy-removebg-preview.png')}}" alt="">
    </div>
    <div class="col-sm-4 m-3" style="background-color:rgb(224, 221, 221); width:25%; margin-left:10%; height:20vh;">
        <h6 class="text-black" style="margin-left:; margin-top: 10px;">COMFORTABLE <b>CHAIR</b></h6>
        <p style="font-size: 10px">Lorem ipsum dolor sit amet. <br>
        Lorem, ipsum dolor.</p>
        <a href="products">more..</a>
        <img style="width: 50%; margin-top:-110px; margin-left:55%" src="{{asset('storage/foto/Apartment_Therapy-removebg-preview.png')}}" alt="">
    </div>
    <div class="col-sm-4 m-3" style="background-color:rgb(224, 221, 221); width:25%; margin-left:10%; height:20vh;">
        <h6 class="text-black" style="margin-left:; margin-top: 10px;">COMFORTABLE <b>CHAIR</b></h6>
        <p style="font-size: 10px">Lorem ipsum dolor sit amet. <br>
        Lorem, ipsum dolor.</p>
        <a href="products">more..</a>
        <img style="width: 50%; margin-top:-110px; margin-left:55%" src="{{asset('storage/foto/Apartment_Therapy-removebg-preview.png')}}" alt="">
    </div>
  </div>
  <hr class="border-bottom border-1 border-dark" style="margin-top: 30px;">
  <h3 style="margin-left: 41%"><p>Shop By Categories</p></h3>
  <nav class="navbar navbar-expand-sm bg-light justify-content-center" style="height: 80px;">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="">Furniture</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Chair</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Sofa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Springbed</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Tables</a>
      </li>
    </ul>
</nav>
    <div class="container">
        <div class="row d-flex justify-content-center">
            @foreach ($product as $item)
                <div class="col-4">
                    <div class="thumbnail shadow px-3 py-4 mb-4">
                        <img src="{{ asset('storage/foto/'.$item->foto) }}" alt="Paris" width="300px" height="200px">
                        <br>
                        <p><strong>{{ $item->name }}</strong></p>
                        <p>Rp.{{ $item->harga }}</p>
                        <img src="https://st4.depositphotos.com/2046901/19949/v/450/depositphotos_199492008-stock-illustration-five-stars-rating-icon-vector.jpg" alt=""  width="70" height="50">
                        <form action="/checkout/{{$item->id}}" method="get" >
                            @csrf
                            <button typpe="submit" class="btn btn-success">Beli Sekarang</button>
                        </form>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
{{-- <div class="container mt-3">
    <div class="card" style="width:200px;height:200px">
      <a href="detail"><img class="card-img-top" src="https://i.pinimg.com/236x/4b/76/bc/4b76bc0fba824f47443572676e90c32c.jpg" alt="Card image" style="width:100%"></a>
      <div class="desk" style="margin-top: 5px;">
        kursi kaya
        <div class="harga">$5.99</div>
      </div>
      <div class="card-body">
        <a href="checkout" class="btn">Beli</a>
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
          <a href="checkout" class="btn">Beli</a>
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
          <a href="checkout" class="btn">Beli</a>
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
          <a href="checkout" class="btn">Beli</a>
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
          <a href="checkout" class="btn">Beli</a>
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
        <a href="checkout" class="btn">Beli</a>
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
          <a href="checkout" class="btn">Beli</a>
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
          <a href="checkout" class="btn">Beli</a>
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
          <a href="checkout" class="btn">Beli</a>
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
          <a href="checkout" class="btn">Beli</a>
          <a href="keranjang" class="btn">Keranjang</a>
        </div>
      </div>
</div> --}}
</div>
<div style="margin-top: 15%; margin-left:45%" class="view"><a href="products" class="btn ">view all products</a></div>
<section>
    <div class="container-fluid" style="height:50vh; width:85%; background-color: rgb(198, 201, 200)">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img style="margin-top:-15%;" src="{{asset('storage/foto/Canapé_2_places_bouclette_texturée_capitonné_blanc_I_sweeek-removebg-preview.png')}}" alt="">
                </div>
                <div class="col-md-6">
                    <div class="t" style=" margin-top:10px">
                    <h5 class="text-white" style="margin-top: 10%; font-size: 20px; margin-left:30%"><p>The <b> Best</b> of Furniture for this year</p></h5>
                    <a href="checkout" style=" margin-left:30%;">Buy Now</a>
                </div>
                </div>

            </div>
        </div>
    </div>
</section>
<footer class="bg-secondary text-light py-4" style="margin-top: 5%">
  <div class="container">
      <div class="row">
          <div class="col-md-6">
              <h5>Informasi</h5>
              <ul class="list-unstyled">
                  <li><a href="/tentang" class="text-light">Tentang Kami</a></li>
                  <li><a href="/faq" class="text-light">FAQ</a></li>
                  <li><a href="/kebijakan" class="text-light">Kebijakan Pengembalian</a></li>
              </ul>
          </div>
          <div class="col-md-6 text-md-end">
              <h5>Ikuti Kami</h5>
              <a href="https://facebook.com/yourpage" class="text-light me-3" target="_blank">Facebook</a>
              <a href="https://twitter.com/yourprofile" class="text-light me-3" target="_blank">Twitter</a>
              <a href="https://instagram.com/yourprofile" class="text-light" target="_blank">Instagram</a>
          </div>
      </div>
      <div class="text-center mt-3">
          <p class="mb-0">&copy; 2024 The Comfort Zone. Hak cipta dilindungi. | <a href="/syarat" class="text-light">Syarat & Ketentuan</a></p>
      </div>
  </div>
</footer>






{{-- </div>
    <h2>Total user : {{ $total_user }}</h2>
    <br>
    <a href="/user/viewcreate"><button>Tambah data</button></a>
    <br>

    <br>
    <table border="1px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        @foreach ($user as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>
                <a href="/user/viewedit/{{ $item-> edit}}"><button>Edit</button></a>
                <a href="/user/delete/{{ $item->id }}" onclick="return confirm('yakin mau hapus?')"><button>delete</button></a>
            </td>
        </tr>
        @endforeach
    </table> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
