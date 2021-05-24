@extends('master')
@section('content')
   <div class="custome-product">
      <div class="col-sm-4">
         <a href="">Filter</a>
      </div>
         <div class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach ($products as $item )
               <div class="searched-item">
                  <a href="detail/{{ $item['id'] }}">
                     <img src="{{ $item['gallery'] }}" class="trending-img">
                     <div>
                        <h2>{{ $item['name'] }}</h2>
                        <h3>{{ $item['description'] }}</h3>
                     </div>
                  </a>
               </div>
            @endforeach
            </div>
         </div>
         
   </div>
@endsection