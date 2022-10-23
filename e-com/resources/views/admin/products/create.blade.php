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

<form action="#" method="post" enctype="multipart/form-data">

  <div class="form-group" style="margin-top: 7px;">


  <select name="#" class="form-control" require>
  <option value=""> select Category name </option>
  <option value="#">Category_01</option>
  <option value="#">Category_02</option>
  <option value="#">Category_03</option>
  <option value="#">Category_04</option>
</select>
</div>

<div class="form-group" style="margin-top: 7px;">
    <label for="name">Product Name</label>
    <input name="id_name" type="text" class="form-control" id="name"  placeholder="Enter Product Name .........">
  </div>
</form>
</x-admin.master>