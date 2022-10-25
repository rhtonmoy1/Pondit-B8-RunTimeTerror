<x-admin.master>


  <form  action="{{route('brands.update', $brandEdit->id)}}" method="POST">
           @method('patch')
            @csrf
  <div class="form-group">
    <label for="name">Brand_Name</label>
    <input name="name" type="text" class="form-control" id="name"  placeholder="Enter product Name"
    value="{{$brandEdit->name}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</x-admin.master>