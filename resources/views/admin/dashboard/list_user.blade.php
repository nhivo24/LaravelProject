    @include('admin/dashboard/admin_page')

    <table align="center" width="600px" border="1" cellspacing="0" cellpadding="3"
    class="table table-hover table-bordered">
  <tr class="table-primary table-header" style="text-align: center;">
    <th>STT</th>
    <th >User Name</th>
    <th >Full name</th>
    <th>Delete</th>  
  </tr>
</thead>

        @foreach($users as $user) 
        @if($user->role =="user")
        <tr>  
              <td>{{$user->id}}</td>       
              <td> {{$user->username}}</td>
              <td> {{$user->name}}</td>     
              <td>
                <form method="post" action="/admin/users/{{$user->id}}">
                  @csrf
                  @method('DELETE')
                  <button style="text-align: center;" type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
                </tr>        
    
             </div>
             @endif
         @endforeach
      </div> 