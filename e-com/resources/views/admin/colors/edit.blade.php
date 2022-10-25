<x-admin.master>
<form  action="{{route('colors.update', $coloredit->id)}}" method="POST">
           @method('patch')
            @csrf
 
  <div class="form-group">
    <label for="title">Color title</label>
    <input name="title" type="text" class="form-control" id="title"  placeholder="Enter title"
    value="{{$coloredit->title}}">
  </div>
  
  <div class="form-group">
    <label for="color_code">color_code</label>
    <input name="color_code" type="color" class="form-control" id="Product_Code"  value="{{$coloredit->color_code}}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </x-admin.master>