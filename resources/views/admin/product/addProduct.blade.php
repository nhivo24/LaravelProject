
@include('admin/dashboard/admin_page')
<style type="text/css">
  .form-group{
    padding: 20px;
  }
</style>
<div class="container" >
<form class="form-inline" method="POST" enctype="multipart/form-data" action="/admin/product/store">
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
     @endif
  @csrf
  <div class="form-group">
    <label for="name_product">Name Product:</label>
    <input type="text" class="form-control" name="name" >
  </div>
  <div class="form-group">
    <label for="price">Price:</label>
    <input type="text" class="form-control" name="price">
  </div>
   <div class="form-group">
    <label for="des">Description:</label>
    <input type="text" class="form-control" name="description">
  </div>
   <div class="form-group">
    <label for="quantity">Quantity:</label>
    <input type="number" class="form-control" name="quantity">
  </div>
    <div class="form-group">
            <label  for="number">Category:</label>
            <select type="text" class="form-control" name="category" placeholder="">
             @foreach($categories as $categorie) 
             <option value="{{$categorie->id}}">{{$categorie->name}}</option>
             @endforeach
         </select>
        </div>
  <div class="form-group">
    
    <label for="image">Image:</label>
    <input type="file" class="form-control" name="image" value="upload">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


