<x-admin.master>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Account Details</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">

                            <form action="">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Photo</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John Michael</td>
                                            <td><img src="{{asset('ui/dashboard/img/team-1.jpg')}}" alt="" style="height:100px; margin-left:-20px;"class="mx-4"></td>
                                            <td>Online</td>
                                            <td>200</td>
                                            <td>23/04/18</td>
                                            <td>Edit
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>John Michael</td>
                                            <td>Manager</td>
                                            <td>Online</td>
                                            <td>200</td>
                                            <td>23/04/18</td>
                                            <td>Edit
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.master>
