
<x-admin.master>
    <form  action="{{route ('brands.store')}}" method="POST">


            <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->

     @csrf

  <div class="form-group" style="margin-top: 7px;">

    <label for="name">Brand_Name</label>
    <input name="name" type="text" class="form-control" id="name"  placeholder="Enter Brand Name .........">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </x-admin.master>

