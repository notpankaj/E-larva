@extends('master')

@section('content')

<div class="custom-product">
   
   <div class="col-sm-4">
      <a href="">Fillter</a>
   </div>

   <div class="col-sm-4">
      <div class="trending-wrapper">
         <h4>my orders</h4>
         @foreach ($orders as $item)
            <div class="searched-item">
               <a href="detail/{{ $item->id }}">
                  <img class="trending-img" src={{ $item->gallery }} >
                  <div>
                     <h2>name: {{ $item->name }}</h2>
                     {{-- <h5>description: {{ $item->description }}</h5> --}}
                     <h5>Delivery status: {{ $item->status }}</h5>
                     <h5>Address: {{ $item->address }}</h5>
                     <h5>Payment status: {{ $item->payment_status }}</h5>
                     <h5>Payment method: {{ $item->payment_method }}</h5>
                  </div>
               </a>


            </div>
            <hr>
            <br>
         @endforeach

      </div>
   </div>

</div>

@endsection