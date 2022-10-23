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
                                            <th style="background-color: #DDE2E2;">ID</th>
                                            <th style="background-color: #B7B9BE;">Photo</th>
                                            <th style="background-color: #DDE2E2;">User Name</th>
                                            <th style="background-color: #B7B9BE;">Status</th>
                                            <th style="background-color: #DDE2E2;">Date</th>
                                            <th style="background-color: #7AD9FFFF;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="background-color: #F2EEF4;">
                                            <td>  01</td>
                                            <td><img src="{{asset('ui/dashboard/img/logo.png')}}" alt="" style="height:70px; width:80px;"></td>
                                            <td>AB Mannan</td>
                                            <td>Admin</td>
                                            <td>21/10/2022</td>
                                            <td><a class="btn btn-info">show</a>
                                                <a class="btn btn-success">Edit</a>
                                                <a class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <tr style="background-color: #F6F5E2;">
                                            <td>  02</td>
                                            <td><img src="{{asset('ui/dashboard/img/logo.png')}}" alt="" style="height:70px; width:80px;"></td>
                                            <td>RH Tonmoy</td>
                                            <td>Admin</td>
                                            <td>21/10/2022</td>
                                            <td><a class="btn btn-info">show</a>
                                                <a class="btn btn-success">Edit</a>
                                                <a class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <tr style="background-color: #F2EEF4;">
                                            <td>  03</td>
                                            <td><img src="{{asset('ui/dashboard/img/logo.png')}}" alt="" style="height:70px; width:80px;"></td>
                                            <td>A.I Ahsfaq</td>
                                            <td>Admin</td>
                                            <td>21/10/2022</td>
                                            <td><a class="btn btn-info">show</a>
                                                <a class="btn btn-success">Edit</a>
                                                <a class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <tr   style="background-color: #F6F5E2;">
                                            <td>  04</td>
                                            <td><img src="{{asset('ui/dashboard/img/logo.png')}}" alt="" style="height:70px; width:80px;"></td>
                                            <td>Khandoker Tajuddin</td>
                                            <td>Admin</td>
                                            <td>21/10/2022</td>
                                            <td><a class="btn btn-info">show</a>
                                                <a class="btn btn-success">Edit</a>
                                                <a class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <tr style="background-color: #F2EEF4;">
                                            <td>  05</td>
                                            <td><img src="{{asset('ui/dashboard/img/logo.png')}}" alt="" style="height:70px; width:80px;"></td>
                                            <td>R H Milon</td>
                                            <td>Admin</td>
                                            <td>21/10/2022</td>
                                            <td><a class="btn btn-info" href="#">show</a>
                                                <a class="btn btn-success" href="#">Edit</a>
                                                <a class="btn btn-danger" href="#">Delete</a>
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
