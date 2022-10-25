<x-admin.master>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Color Create</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('colors.index') }}">
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>

 


    <form action="{{route('colors.store')}}" method="POST" enctype="multipart/form-data">
        
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        @endif

    @csrf

  <div class="form-group">
    <label for="title">Name</label>
    <input name="title" type="text" class="form-control" id="title"  placeholder="Enter name" value="">
    
 
    <label for="color_code">Select Color</label>
    <input name="color_code" type="color" class="form-control" id="color_code">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</x-admin.master>