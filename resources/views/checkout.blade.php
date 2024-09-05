<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4" style="margin-left: 40%;">Checkout</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="/confirm" method="post">

            @csrf
            <div class="row">
            <div class="col-md-6">
                <div class="thumbnail shadow px-3 py-4 mb-4">
            <div class="from-group">
                <div class="p  justify-content-center">
                <img src="{{asset('/storage/foto/'.$produk->foto)}}" alt="" width="30%" srcset="">
                <ul><label for="name">Produk :  {{$produk->name}}</label></ul>
                <ul><label for="harga">Harga : Rp.{{$produk->harga}}</label></ul>
                <ul> <label for="harga">Stok : {{$produk->stok}}</label></ul>
                <ul> <label for="harga">Stok : {{$produk->warna}}</label></ul>




            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name"required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>
            <div class="barang"></div>
            <div class="form-group">
                <label for="payment_type">Payment Type</label>
                <select class="form-control" id="payment_type" name="payment_type" required>
                    <option value="credit_card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="bank_transfer">Bank Transfer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="total_amount">Total Amount</label>
                <input type="number" class="form-control" id="total_amount" name="total_amount" step="0.01" required>
            </div>
            <form action="confirm" method="get">
            <button type="submit" class="btn btn-primary">Place Order</button>

</div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
