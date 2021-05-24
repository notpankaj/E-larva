@extends('master')

@section('content')

<div class="custom-product">
   
   <div class="col-sm-4">
      <a href="">Fillter</a>
   </div>

   <div class="col-sm-4">
      <div class="trending-wrapper">
         <h4>Cart list</h4>
         <a href="/ordernow" class="btn btn-success">Order now</a> <br><br>
         @foreach ($products as $item)
            <div class="searched-item">
               <a href="detail/{{ $item->id }}">
                  <img class="trending-img" src={{ $item->gallery }} >
                  <div>
                     <h2>{{ $item->name }}</h2>
                     <h5>{{ $item->description }}</h5>
                  </div>
               </a>

               <a  href="/removecart/{{ $item->cart_id }}" class="btn btn-warning" >Remove from cart</a>

            </div>
            <hr>
            <br>
         @endforeach

      </div>
   </div>

</div>

@endsection