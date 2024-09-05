<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
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

    <main class="container my-4">
        <div class="row" id="cart-list">
            <!-- Item keranjang akan dimuat di sini oleh JavaScript -->
        </div>
        @extends('layouts.app')

@section('content')
    <h1>Shopping Cart</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($cartItems->isEmpty())
        <p>Your cart is empty!</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $item)
                    <tr>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>${{ $item->product->price }}</td>
                        <td>${{ $item->product->price * $item->quantity }}</td>
                        <td>
                            <a href="{{ route('cart.remove', $item->id) }}" class="btn btn-danger btn-sm">Remove</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

        <div class="text-end my-4">
            <a href="checkout.html" class="btn btn-primary">Checkout</a>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
