@include('partials/header1')  
  <style type="text/css">
    tr,td{
      padding: 10px;
    }
  </style>
  <body>
  <div class="container">
    <div class="card" style="margin-left: 30px;">
      <div class="name" >
          <h3 >{{$products->name}}</h3>
      </div>
      <div class="container-fliud">
        <div class="wrapper row">

          <div class="preview col-md-6">
            
            <div class="preview-pic tab-content">   
              <input type="" hidden="" name="id" value="{{$products->id}}">
              <img class="img-container"src="/storage/{{$products->image}}">
            </div>
          </div>
          <div class="details col-md-6">
            <h3 class="product-title">{{$products->name}} </h3>
            <div class="rating">
              <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <span class="review-no">41 reviews</span>
            </div>
            <p class="product-description"></p>
            <h4 class="price">Current Price: <span> <h4 style="color: #fe542b;">{{$products ->getPrice()}}</h4></span></h4>
            <h5 class="sizes">Sizes:
              <span class="size" data-toggle="tooltip" title="small">s</span>
              <span class="size" data-toggle="tooltip" title="medium">m</span>
              <span class="size" data-toggle="tooltip" title="large">l</span>
              <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
            </h5>
            <h5 class="colors">Colors:
              <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
              <span class="color green"></span>
              <span class="color blue"></span>
            </h5>
            <div class="action"> 
              <form method="post" action="/cart/{{$products->id}}">       
             @csrf
                 <button  style="text-align: center;" type="submit" class="add-to-cart btn btn-default" type="button">add to cart</button>
                   <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
               </form> 
            
            </div>
            
          </div>

        </div>
      </div>
      <div class="des">
      Tổng quan <br>
      {{$products->description}}
    </div>
  </div>
  <div class="comment" style="float: right;margin-top: 30px;">
     @foreach($comments as $comment)
       @if ($comment->product_id == $products->id)
          <table>
            <tr>
              <td><h5 style="color:#d25223 ">{{$comment->users->name}}: </h5></td>
              <td> {{$comment->message}}</td>
              <td> {{$comment->created_at}}</td>
            </tr>
           
          </table>
          @endif
        @endforeach
   <form  class="form-inline" method="post" enctype="multipart/form-data"action="/detail/{{$products->id}}">
              @csrf
             
            <input type="text" name="message"class="form-control" placeholder="Comment">
             <button type="submit"  class="btn btn-secondary"><i class="fas fa-paper-plane"></i></button> 
            
          
   </form>
 </div>
</div>

   
              
  @include('partials/footer')
  </body>
</html>

