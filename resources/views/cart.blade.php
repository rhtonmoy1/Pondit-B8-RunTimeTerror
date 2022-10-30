<x-frontend.master>
    <div class="container marketing">
        <br /><br /><br /><br />
        <div class="card">
            <div class="card-header">
                <h4>My Shopping Cart</h4>
            </div>
            <div class="card-body">


                <p id="loader">Loading</p>
                <form name="cart">
                    <table class="table table-info">
                        <thead>
                            <tr>
                                <th>SL#</th>
                                <th>Item Name</th>
                                <th>Unit Price</th>
                                <th>Qty</th>
                                <th>Total Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="cartItems"></tbody>
                    </table>
                </form>

                Total Price: <span id="totalPrice">0</span>

            </div>
            <div class="card-footer">
                <a class="btn btn-sm btn-primary" href="#">By Now</a>
            </div>
        </div>
    </div>
    <!-- /END THE FEATURETTES -->

    @push('script')
    <script src="{{ asset('ui/frontend/js/cart.js') }}"></script>
    @endpush

</x-frontend.master>