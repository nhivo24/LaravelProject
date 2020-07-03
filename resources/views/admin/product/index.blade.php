    @include('admin/dashboard/admin_page')

  <table align="center" width="600px" border="1" cellspacing="0" cellpadding="3"
    class="table table-hover table-bordered">
  <tr class="table-primary table-header" style="text-align: center;">
   <a href="/products/sortBy"><i class="fas fa-sort-amount-down"></i></i></a>
   <a href="/products/sortDesc"><i class="fas fa-sort-amount-up"></i></a>

    <th>STT</th>
    <th >Name Product</th>
    <th >Price</th>
    <th >Description</th>
    <th >Quantity</th>
    <th >Category</th>
    <th >Image</th>
    <th>Edit</th>
    <th >Delete</th>
    
  </tr>
</thead>

        @foreach($products as $product)  
        <tr>  
              <td>{{$product->id}}</td>       
              <td> {{ $product->name}}</td>
              <td> {{ $product->getPrice()}}</td>
              <td> {{ $product->description}}</td>
              <td> {{ $product->quantity}}</td>
              <td>{{$product->category->name}}</td>
              

              <td> </br><img src="{{'/storage/'.$product->image}}" style="height: 300px;width: 250px;"></td>           
              <td>                
                  @csrf
                  <a style="text-align: center;" href="index/{{$product->id}}" type="submit"class="btn btn-success">Edit</a>                
              </td>
              <td>
                <form method="post" action="index/{{$product->id}}">
                  @csrf
                  @method('DELETE')
                  <button style="text-align: center; " type="submit" class="btn btn-danger">Delete</i>
                </button>
                </form>
              </td>
                </tr>        
    
             </div>
         @endforeach
      </div> 