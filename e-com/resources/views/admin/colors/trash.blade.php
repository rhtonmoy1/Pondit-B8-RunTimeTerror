<x-admin.master>
    

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Trash List: </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="{{route('colors.trash')}}">
                        <button type="button" class="btn btn-sm btn-outline-danger">Trash</button>
                    </a>
                </div>

                <a href="{{route('colors.index')}}">
                    <button type="button" class="btn btn-sm btn-outline-primary">
                        <span data-feather="plus"></span>
                        Home
                    </button>
                </a>
            </div>

        </div>
        <table class="table">
        @method('patch')
            <thead>
                <tr>
                    <th>SL#</th>
                    <th>Color Name</th>
                    <th>Color Code</th>
                    <th width="180">Action</th>
                </tr>
            </thead>
            <tbody>
            @php $id=1 @endphp
               @foreach ($colors as $color)
                <tr>
                    <td>{{$id++}}</td>
                    <td>{{ $color->title }}</td>
                    <td><div>{{ $color->color_code }}</div></td>
                  

                    <td class="d-flex">
                        <form action="{{ route('colors.restore', $color->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <button class="btn btn-success" onclick="return confirm('Are you sure,, you want to restore??')">Restore</button>
                        </form>
                     
                        <form action="{{ route('colors.tdelete', $color->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure,,  you want to Delete??')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>

</x-admin.master>