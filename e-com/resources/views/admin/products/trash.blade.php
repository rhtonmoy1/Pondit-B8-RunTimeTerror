<x-admin.master>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Trash List:</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="{{route('products.trash')}}">
                        <button type="button" class="btn btn-sm btn-outline-danger">Trash</button>
                    </a>
                </div>
                <a href="{{route('products.index')}}"> 
                    <button type="button" class="btn btn-sm btn-outline-primary">
                        <span data-feather="plus"></span>
                        Home
                    </button>
                </a>
            </div>
        </div>

     

        <table class="table">
            <thead>
                <tr>
                    <th>SL#</th>
                    <th>Product</th>
                    <th>Category</th>
                    <th width="180">Action</th>
                </tr>
            </thead>
            <tbody>
               
                <tr>
                    <td>01</td>
                    <td>Product_Name</td>
                    <td>Category_Name</td>
                    <td class="d-flex">
                        <a class="btn btn-sm btn-outline-info" href="#">Show</a>
                        <a class="btn btn-sm btn-outline-info" href="#">Edit</a>
                        <a class="btn btn-sm btn-outline-danger" href="#">Delete</a> 
                    </td>
                </tr>

                <tr>
                    <td>02</td>
                    <td>Product_Name</td>
                    <td>Category_Name</td>
                    <td class="d-flex">
                        <a class="btn btn-sm btn-outline-info" href="#">Show</a>
                        <a class="btn btn-sm btn-outline-info" href="#">Edit</a>
                        <a class="btn btn-sm btn-outline-danger" href="#">Delete</a> 
                    </td>
                </tr>

                <tr>
                    <td>03</td>
                    <td>Product_Name</td>
                    <td>Category_Name</td>
                    <td class="d-flex">
                        <a class="btn btn-sm btn-outline-info" href="#">Show</a>
                        <a class="btn btn-sm btn-outline-info" href="#">Edit</a>
                        <a class="btn btn-sm btn-outline-danger" href="#">Delete</a> 
                    </td>
                </tr>
            </tbody>
        </table>
</x-admin.master>