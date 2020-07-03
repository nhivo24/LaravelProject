<!DOCTYPE html>
<html>
<head>
  @include('/partials/header1')  

  <title></title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

<style type="text/css">
  .row{
   
    margin-left:200px;
    padding:10px;
    }
  .container{
    background: none;
  }
</style>
</head>
<body>




<!-- <div style="background-image: url(https://product.hstatic.net/1000148994/product/btc2m-25x35-03a.jpg)"></div> -->
<div class="container">  
  <div class="carousel-inner">
    <div class="item active carousel-item">
      <div class="row">             
             @foreach($research as $products)  
          <div class="col-md-3">
            <div>{{ $products->name}}</div>
            <div>{{ $products->price}}  </div> 
      <div class="container-a2">
       <ul class="caption-style-2">
         <li>
          <div class="img-thumbnail"><img src="{{'/storage/'.$products->image}}" style="height: 320px;width: 250px;"> 
             <div class="caption">
              <div class="blur"></div>
              <div class="caption-text">          
             @csrf
                  <a style="text-align: center;" href="admin/product/detail/{{$products->id}}" type="submit"class="btn btn-success"><i class="fas fa-info-circle fa-2x"></i></a>
                  <a style="text-align: center;" href="admin/product/cart/{{$products->id}}" type="submit"class="btn btn-success">  <i class="fas fa-shopping-cart fa-2x"></i></a>
               
              </div>
            </div>
         </li>
      </ul>
      </div>
        </div>

         @endforeach
</div> 
</div>
</div>
</li>
</ul>
</div> 
</body>
</html>


