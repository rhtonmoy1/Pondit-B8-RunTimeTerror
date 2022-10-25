<x-admin.master>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"> Brand List</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                
                <a href="{{route('brands.create')}}">
                <button type="button" class="btn btn-info ">
                    <span data-feather="plus"></span>
                   Add Brand
                </button>
                </a>
            </div>
        </div>

<div class="container mt-3">
  <table class="table table-bordered table-sm">
  

  
 

    <thead>
      <tr>
        <th></th>
        <th>Brand Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
       @php $id=1 @endphp 
            @foreach ($brandData as $brand)
      <tr>
        <td>{{$id++}}</td>
        <td>{{$brand->name}} </td>
        <td>
        <a class="btn btn-info" href="{{route('brands.show', ['id' => $brand->id])}}">Show</a>
        <a class="btn btn-success" href="{{route('brands.edit', ['id' => $brand->id])}}">Edit</a>
        <a class="btn btn-danger" href="{{route('brands.delete', ['id' => $brand->id])}}">Delete</a>
      </td>
      </tr>
      @endforeach
    </tbody>


  </table>
</div>

</body>
</html>


{{ $brandData->links() }}

</x-admin.master>