@extends('master')
@section('content')

<div class="p-lg-5 p-md-3 p-sm-2 p-1">
    <div class="row">
        <div class="col-sm-6">
            <img class="w-100" src="{{$product->gallery}}" />
        </div>
        <div class="d-flex flex-column justify-content-center col-sm-6">
            <a href='/'>Go Back</a>
            <h2>{{$product->name}}</h2>
            <h3>£{{$product->price}}</h3>
            <h4>{{$product->description}}</h4>
            <h4><b class="text-uppercase">{{$product->category}}</b></h4>
            <br />
            <button id='cart' class="btn btn-primary">Add to cart</button>
            <br />
            <button class="btn btn-success">Buy now</button>
        </div>
    </div>
</div>

<script>
$('#cart').click(() => {
    let storage = window.localStorage;
    let cart = storage.getItem('cart');

    if(cart == null) {
        console.log("none")
        let data = [{productId: '{{$product->id}}', quantity: 1}];
        storage.setItem('cart', JSON.stringify(data));
    } else {
        let dupe = false;
        cart = JSON.parse(cart);

        cart.map((item, index) => {
            if(item.productId == '{{$product->id}}') {
                cart[index] = {...cart[index], quantity: cart[index].quantity + 1};
                dupe = true;
            }
        })

        if(!dupe) cart = [...cart, {productId: '{{$product->id}}', quantity: 1}];

        storage.removeItem('cart');
        storage.setItem('cart', JSON.stringify(cart));

        console.log('\n\n\n\nNew cart')
        console.log(cart)
    }
})
</script>

@endsection