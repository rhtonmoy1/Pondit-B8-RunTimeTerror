<x-admin.master>

    <form  action="{{route('products.update', $product->id)}}" method="POST">
            @method('patch')
                @csrf
    

    <!-- <div class="form-group">
        <label for="name">category_Name</label>
        <input name="category_id" type="text" class="form-control" id="name"  placeholder="Enter Name"
        value="{{$product->category_id}}">
    </div> -->


    <div class="form-group">
        <label for="title">Product_Name</label>
        <input name="title" type="text" class="form-control" id="title"  placeholder="Enter Name"
        value="{{$product->title}}">
    </div>
        

    <div class="form-group">
        <label for="description">description</label>
        <input name="description" type="text" class="form-control" id="description"  placeholder="Enter description"
        value="{{$product->description}}">
    </div>
    <div class="form-group">
        <label for="price">price</label>
        <input name="price" type="number" class="form-control" id="price"  placeholder="Enter price"
        value="{{$product->price}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-admin.master>
