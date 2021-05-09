@extends('master')
@section('content')

<div class="container">
	
		<div class="row">
        <div class="col-sm-6">
          <img class="detail-img" src="{{$product['gallery']}}" alt="">
          
        </div> 
        <div class="col-sm-6">
          <a href="/">Go Back</a>
          
          <h2>Name : {{$product['name']}}</h2>
          <h3>Price : {{$product['price']}}</h3>
          <h3>Category : {{$product['category']}}</h3>
          <h3>Description : {{$product['discription']}}</h3>
          <br><br>
          <form action="/add_to_cart" method="POST">
            <input type="hidden" name="product_id" value="{{$product['id']}}">
            @csrf
            <button class="btn btn-success">Add to cart</button>
          </form>
          <br><br>
          <button class="btn btn-primary">Buy now</button>
          <br><br>
        </div> 
    </div>
  
	
</div>


@endsection




