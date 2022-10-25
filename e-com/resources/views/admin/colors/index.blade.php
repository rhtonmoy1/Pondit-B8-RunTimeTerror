<x-admin.master>
    

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Colors</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <!-- <a href="#"> 
                        <button type="button" class="btn btn-sm btn-outline-primary">PDF</button>
                    </a> -->
                    <a href="{{route('colors.trash')}}">
                        <button type="button" class="btn btn-sm btn-outline-danger">Trash</button>
                    </a>
                </div>

                <a href="{{route('colors.create')}}">
                    <button type="button" class="btn btn-sm btn-outline-primary">
                        <span data-feather="plus"></span>
                        Add New
                    </button>
                </a>
            </div>

        </div>
        <table class="table">
        @if(session('message'))
          <p class="text-success">
               {{ session('message') }}
             </p>
                 @endif
            <thead>
                <tr>
                    <th style="background-color: #f7ded7;">SL#</th>
                    <th style="background-color: #DDE2E2;">Color Name</th>
                    <th style="background-color: #f7ded7;">Color Code</th>
                    <th style="background-color: #c1c2f5; width:180px">Action</th>
                </tr>
            </thead>
            <tbody>
              
            @php $id=1 @endphp 
            @foreach ($data as $Color)
                <tr>
                    <td>{{$id++}}</td>
                    <td>{{$Color->title}}</td>
                 
                    <td> <div>{{$Color->color_code}}</div> </td>
                    <td class="d-flex">
                       <a class="btn btn-info" href="{{route('colors.show',['id' => $Color->id])}})}}">Show</a>
                        <a class="btn btn-success" href="{{route('colors.edit', ['id' => $Color->id])}}">Edit</a>
                        <a class="btn btn-danger" href="{{route('colors.delete', ['id' => $Color->id])}}">Delete</a>
                    </td>
                </tr>
                @endforeach

              
               
            </tbody>
        </table>

</x-admin.master>