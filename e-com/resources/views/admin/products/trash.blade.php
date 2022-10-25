<x-admin.master>

    <!DOCTYPE html>
    <html lang="en">
    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Product List</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
              
                 <a href="{{route('products.trash')}}">
                    <button type="button" class="btn btn-sm btn-outline-secondary ">
                   Trash
                    </button>
                    </a>
                    <a href="{{route('products.index')}}">
                    <button type="button" class="btn btn-sm btn-outline-secondary ">
                        <!-- <span data-feather="plus"></span> -->
                   Home
                    </button>
                    </a>
                </div>
            </div>




            <div class="container mt-3">
      <table class="table table-bordered table-sm">

     @if (session('message'))
      <p  class="text-success">
     {{session('message')}}
      </p>
      @endif

        <thead>
          
            <th>SL</th>
            <th style="background-color: gray;">Product Name</th>
            <th style="background-color: #B2BEB5;">Category Name </th>
        </thead>
        <tbody>
 @php $id=1 @endphp
   @foreach ($pdata as $Product )

          <tr>
            <td>{{$id++}}</td>
            <td>{{$Product->title}}</td>
            <td>pending....</td>

        <td>

         <a class="btn btn-info" href="{{route ('products.restore', ['id'=>$Product->id])}}">Restore</a>


            <a class="btn btn-danger" href="{{route ('products.Tdelete', ['id'=>$Product->id])}}">Delete</a>

          </td>
          </tr>

          @endforeach

        </tbody>


      </table>
    </div>


    </body>
    </html>


    </x-admin.master>
