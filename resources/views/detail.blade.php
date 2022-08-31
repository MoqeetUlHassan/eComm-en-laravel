@extends('master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">
    <img src="https://image.shutterstock.com/image-photo/mobile-smart-phone-on-white-260nw-1311685394.jpg" alt="product img">   <br>
</div>
<div class="col-sm-6">
    <a href="/">Go back</a>
    <h2>Name: {{$prodetail['name']}}</h2>
    <h3>Price: ${{$prodetail->price}}</h3><br>
    <h4>Category: {{$prodetail['category']}}</h4><br>
    <h4>Description: {{$prodetail['description']}}</h4><br>
</div>
    <div class="col-sm-6" style="padding-left: 100px">
        <form action="/addToCart" method="POST">
            @csrf
         <input type="hidden" name="product_id" value={{$prodetail['id']}}>   
        <button class="btn btn-primary">Add to cart</button>
        </form>

        <button class="btn btn-success">Buy now</button>
    </div>
 
    </div>
</div>
@endsection


