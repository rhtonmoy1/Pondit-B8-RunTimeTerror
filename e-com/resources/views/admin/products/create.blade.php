<x-admin.master>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Product Create</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{route ('products.index')}}">  
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>

<form action="{{route ('products.store')}}" method="post" enctype="multipart/form-data">
@csrf

<div class="form-group" style="margin-top: 7px;">
    <label for="title">Product_Name</label>
    <input name="title" type="text" class="form-control" id="title"  placeholder="Enter Product Name .........">
  </div>
  <div class="form-group">
    <label for="description">description</label>
    <input name="description" type="text" class="form-control" id="description"  placeholder="Enter Product_Code  .........">
  </div>
  <div class="form-group">
    <label for="price">Product_Quantity</label>
    <input name="price" type="number" class="form-control" id="price"  placeholder="Enter Product_Quantity .........">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</x-admin.master>