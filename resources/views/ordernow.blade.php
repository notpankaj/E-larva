@extends('master')

@section('content')

<div class="custom-product">
   <div class="col-sm-10">

      <table class="table table-striped">
         <tbody>
           <tr>
             <td>Amount</td>
             <td>$ {{ $total }}</td>
           </tr>
           <tr>
             <td>Tax</td>
             <td>$ 0</td>
           </tr>
           <tr>
             <td>Delivery</td>
             <td>$10</td>
           </tr>
           <tr>
             <td>Total Amount</td>
             <td>${{ $total + 10 }}</td>
           </tr>
         </tbody>
       </table>
   </div>

</div>
   <form action="/orderplace" method="POST">
      @csrf
      <div class="form-group">
         <textarea name="address" type="email" placeholder="enter your address" class="form-control"></textarea>
      </div>
      <div class="form-group">
         <label for="pwd">Payment Method</label>
         <input type="radio" name="payment" value="cash"><span>online payment</span> <br> <br> <br>
         <input type="radio" name="payment" value="cash"><span>EMI payment</span> <br> <br> <br>
         <input type="radio" name="payment" value="cash"><span>Payment on Delivery</span><br> <br> <br>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
   </form>


@endsection