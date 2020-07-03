@include('partials/headercart')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
  .btn a{
    text-decoration: none !important;
  }

</style>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th >Image</th>
                        <th class="text-center">Name</th>
                        <th>Price</th>
                        <th class="text-center">Quantity</th>
                          <th class="text-center">Remove</th>
                        <th class="text-center">Total</th>
                        
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                  <?php $total = 0 ?>
                     @foreach($cart as $carts)
                     @foreach($carts->products as $product)

                   <!-- <form class="form-inline" method="POST" enctype="multipart/form-data" > -->
                     @csrf
                    <tr>
                        <td class="col-sm-8 col-md-6">
                            <p hidden="">{{$product->id}}</p>
                            <div class="img-thumbnail"><img src="{{'/storage/'.$product->image}}" style="height: 150px;width: 150px;"> 
                        </div>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center">{{$product->name}}</td>
                        <td class="col-sm-1 col-md-1 text-center">{{$product->getPrice()}}</strong></td>
                       
                        <td class="col-sm-3 col-md-3 text-center">
                              <div class="grid-container">
                                 <span class="color blue">
                                     <form method="post" action="/update/{{$carts->id}}">
                                          @csrf
                                          
                                          <input type="" hidden name="number" value="-1">                        
                                          <button style="text-align: center;" type="submit" class="btn btn-info"><i class="fas fa-minus"></i></button>
                                    </form>
                                 </span>
                                {{$carts->quantity}}
                                 <span class="color blue">
                                     <form method="post" action="/update/{{$carts->id}}">
                                      @csrf
                                      <input type="" hidden name="number" value="1">
                                      <button style="text-align: center;" type="submit" class="btn btn-warning"><i class="fas fa-plus"></i></button>
                                    </form>
                                 </span>
                            </div>
                        </td>
 
                      <td class="col-sm-1 col-md-1 text-center">
                       
        
    
                    <form method="post" action="/cart/{{$carts->id}}">
                      @csrf
                      @method("DELETE")
                      <button style="text-align: center;" type="submit" class="btn btn-danger not-available "></button>
                    </form>
                </td>
                         <td class="col-sm-1 col-md-1 text-center" style="color: #d25223">{{number_format($product['price'] * $carts['quantity'])}} VND</strong></td>
                       
                      <?php $total +=$product['price'] * $carts['quantity']?>
                        @endforeach
                        @endforeach
                        {{Session::put("total",$total)}}
                    </tr>
                    <tr><form class="form-inline" action="/coupons" method="post">
                      @if (session('status'))
                          <script>
                              alert('{{session('status')}}');
                          </script>
                         @endif
                     @csrf                    
                        <td> 
                         <span style="display: inline-block;"><h5><b>Discount Code:</b> 

                               {{Session::get('coupons')}}
                               ({{(1-Session::get('percent_off'))*100}}%)
                             
                               </span>
                               <br></h5> 
                            <form action="/coupons" method="post">
                                    @csrf                         
                                    <input type="text" class="form-control" placeholder="Enter code" name="coupon_code">
                                    @if(Session::get('coupons'))
                                    {{Session::put("total",$total*Session::get('percent_off'))}}
                                    <!-- <p>Mã:{{Session::get('coupons')}}</p> -->
                                    
                                    @endif

                            </td>                         
                          <td>

                             <h5><br></h5> 
                              <button type="submit" class="btn btn-secondary">Apply</button> 
                        </td>
                        
                        </form>
                        <td></td>
                        <form action="/cart" method="post">

                        <td ><h5><b>Subtotal:</b>
                        {{number_format(Session::get("total"))}} VND</h5>                                          
                      </td>
                      </form>
                        <td class="text-right"><h5><strong></strong></h5></td>
                    </tr>
                    
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default"><a href="/home">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping</a>
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-success"><a href="orders">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                            </a>
                        </button></td>
                    </tr>
               <!--  </form> -->
                </tbody>
            </table>
        </div>
    </div>
</div>