
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
            <thead>
                <tr>
                    <th style="background-color: #DDE2E2;">SL#</th>
                    <th style="background-color: #bdc4f0;">Product</th>
                    <th style="background-color: #DDE2E2;">Category</th>
                    <th style="background-color: #bdc4f0; width:180px">Action</th>
                </tr>
            </thead>
            <tbody>
               
                <tr>
                    <td>01</td>
                    <td>Product_Name</td>
                    <td>Category_Name</td>
                    <td class="d-flex">
                        <a class="btn btn-info" href="#">Show</a>
                        <a class="btn btn-success" href="#">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>

                <tr>
                    <td>02</td>
                    <td>Product_Name</td>
                    <td>Category_Name</td>
                    <td class="d-flex">
                        <a class="btn btn-info" href="#">Show</a>
                        <a class="btn btn-success" href="#">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>

                <tr>
                    <td>03</td>
                    <td>Product_Name</td>
                    <td>Category_Name</td>
                    <td class="d-flex">
                    <a class="btn btn-info" href="#">Show</a>
                        <a class="btn btn-success" href="#">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a> 
                    </td>
                </tr>

                <tr>
                    <td>04</td>
                    <td>Product_Name</td>
                    <td>Category_Name</td>
                    <td class="d-flex">
                        <a class="btn btn-info" href="#">Show</a>
                        <a class="btn btn-success" href="#">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>

                <tr>
                    <td>05</td>
                    <td>Product_Name</td>
                    <td>Category_Name</td>
                    <td class="d-flex">
                        <a class="btn btn-info" href="#">Show</a>
                        <a class="btn btn-success" href="#">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>

</x-admin.master>