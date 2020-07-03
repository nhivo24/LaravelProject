 @include('admin/dashboard/admin_page')
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <table align="center" width="600px" border="1" cellspacing="0" cellpadding="3"
    class="table table-hover table-bordered">
  <tr class="table-primary table-header" style="text-align: center;">
    <th>STT</th>
    <th >First Name</th>
    <th >Last name</th>
    <th >Address</th>
    <th >City</th>
    <th >Cart Type</th>
    <th>View</th>
    <th>Delete</th>  
  </tr>
</thead>

        @foreach($orders as $order) 
       
        <tr>  
              <td>{{$order->id}}</td>       
              <td> {{$order->fname}}</td>
              <td> {{$order->lname}}</td>
              <td> {{$order->address}}</td> 
              <td> {{$order->city}}</td>  
              <td> {{$order->cardtype}}</td>     
              <td> 
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-eye"></i></button>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Invoice</h4>
        </div>
        <div class="modal-body">
          <p><strong>Name: </strong>{{$order->lname}}</p>
          <p><strong>Address: </strong>{{$order->address}}</p>
          <p><strong>City: </strong>{{$order->city}}</p><hr>           
          <p> 
            @foreach(json_decode($order->detail) as $product)

            <p><span><strong>Name Product:</strong> {{$product->name}}</span></p>

            <p><span><strong>Quantity: </strong>{{$product->quantity}}</span></p>
            <p><span><strong>Price:</strong> {{number_format($product->price)}} VND</span></p>

             <p><span><img src="{{'/storage/'.$product->image}}" style="height: 130px;width: 150px;"></span></p><hr>

           
             @endforeach
               <p><span>Total: {{number_format($order->total)}}</span></p>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>   
    </div>
  </div></td>  
              <td>
                <form method="post" action="/list_orders">
                  @csrf
                  @method('DELETE')
                  <input  name="id" hidden value="{{$order->id}}">
                  <button style="text-align: center;" type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
                </tr>        
    
             </div>
           
         @endforeach
      </div> 