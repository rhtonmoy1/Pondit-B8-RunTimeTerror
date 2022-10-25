
<x-admin.master>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Product List:</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="#">
                        <button type="button" class="btn btn-sm btn-outline-primary">PDF</button>
                    </a>
                    <a href="{{route('products.trash')}}">
                        <button type="button" class="btn btn-sm btn-outline-danger">Trash</button>
                    </a>
                </div>
                <a href="{{route('products.create')}}"> 
                    <button type="button" class="btn btn-sm btn-outline-primary">
                        <span data-feather="plus"></span>
                        Add New
                    </button>
                </a>
            </div>
        </div>

     

        <table class="table">

        @if (session('message'))
      <p  class="text-success">
     {{session('message')}}
      </p>
      @endif
            <thead>
                <tr>
                    <th style="background-color: #DDE2E2;">SL#</th>
                    <th style="background-color: #bdc4f0;">Product</th>
                    <th style="background-color: #DDE2E2;">Category</th>
                    <th style="background-color: #bdc4f0; width:180px">Action</th>
                </tr>
            </thead>
            <tbody>
            @php $id=1 @endphp
               @foreach ($pdata as $Product )
                <tr>
                    <td>{{$id++}}</td>
                    <td>{{$Product->title}}</td>
                    <td>Pending...</td>
                    <td class="d-flex">
                        <a class="btn btn-info" href="{{route ('products.show', ['id'=> $Product->id])}}">Show</a>
                        <a class="btn btn-success" href="{{route ('products.edit', ['id'=>$Product->id])}}">Edit</a>
                        <a class="btn btn-danger" href="{{route ('products.delete', ['id'=>$Product->id])}}">Delete</a>
                    </td>
                </tr>
                @endforeach

               
            </tbody>
        </table>

</x-admin.master>