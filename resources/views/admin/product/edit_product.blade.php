
@include('admin/dashboard/admin_page')

<form class="form-inline" method="POST" enctype="multipart/form-data" action="update">
  @csrf
  <input type="" hidden="" name="id" value="{{$products->id}}">
  <div class="form-group">
    <label for="name">Name Product:</label>
    <input type="text" class="form-control" name="name" value="{{$products->name}}">
  </div>
  <div class="form-group">
    <label for="price">Price:</label>
    <input type="text" class="form-control" name="price" value="{{$products->price}}">
  </div>
  <div class="form-group">
    <label  for="number">Category:</label>
    <select type="text" class="form-control" name="category_id" placeholder="">

     @foreach($categories as $category) 
     @if($products->category_id==$category->id)
      <option selected value="{{$category->id}}">{{$category->name}}</option>
     @else
     @endif
     <option value="{{$category->id}}">{{$category->name}}</option>
     @endforeach
    </select>
</div>
  <div class="form-group">
    <label for="price">Description:</label>
    <input type="text" class="form-control" name="description" value="{{$products->description}}">
  </div>
   <div class="form-group">
    <label for="quantity">Quantity:</label>
    <input type="text" class="form-control" name="quantity" value="{{$products->quantity}}">
  </div>
  <div class="form-group">  
    <label for="image">Image:</label>
    <input type="file" class="form-control" name="image"  value="upload" value="">
    <img src="/storage/{{$products->image}}">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>

</form>




