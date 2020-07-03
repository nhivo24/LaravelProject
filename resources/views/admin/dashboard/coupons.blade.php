@include('admin/dashboard/admin_page')

    <table align="center" width="600px" border="1" cellspacing="0" cellpadding="3"
    class="table table-hover table-bordered">
  <tr class="table-primary table-header" style="text-align: center;">
    <th>STT</th>
    <th >Discount Name</th>
    <th>Code</th>
     <th>Delete</th> 

  </tr>
</thead>

        @foreach($coupons as $item) 
      
        <tr>  
              <td>{{$item->id}}</td>       
              <td> {{$item->code}}</td>
              <td> {{$item->percent_off}}</td>
              <td>
                <form method="POST" action="/coupons/{{$item->id}}">
                  @csrf
                  @method('DELETE')
                  <button style="text-align: center;" type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
                </tr>        
    
             </div>
           
         @endforeach
      </div> 