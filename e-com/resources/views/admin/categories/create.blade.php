<x-admin.master>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Category Create</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{route ('categories.index')}}">  
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>

<form action="#" method="post" enctype="multipart/form-data">

<div class="form-group" style="margin-top: 7px;">
    <label for="name">Category Name</label>
    <input name="id_name" type="text" class="form-control" id="name"  placeholder="Enter Product Name .........">
  </div>
</form>
</x-admin.master>