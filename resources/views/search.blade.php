@extends('master')
@section('content')

<div class="container custom-product">
	
		
   
    
 


<div class="col-sm-4">
<div class="trending-wrapper">
  <h3>Searched products</h3>
  
    @foreach($products as $item)
    <div class="searched-item">
      <a href="detail/{{$item['id']}}">
      <img class="trending-img" src="{{$item['gallery']}}" height="338px" width="960px" >
      <div class="">
        <h2>{{$item['name']}}</h2>
        <h5>{{$item['discription']}}</h5>
        
      </div>
      </a>
    </div>
    
   @endforeach
  </div>
  </div>

	
</div>


@endsection




