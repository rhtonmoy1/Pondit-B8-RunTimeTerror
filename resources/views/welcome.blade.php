<x-frontend.master>

    <x-frontend.partials.carousel :carousels="$carousels" />

    <div class="container marketing">
        <br /><br /><br /><br />
        <!-- Three columns of text below the carousel -->
        <div class="row" data-masonry='{"percentPosition": true }'>
            @foreach($products as $product)
            <div class="col-lg-4 mb-2">
                <div class="card">
                    <div class="card-header">
                        <img src="{{ asset('storage/products/'.$product->image) }}" height="250" />
                    </div>
                    <div class="card-body">
                        <h4>{{ Str::limit($product->title, 30) }}</h4>
                        <p>{{ Str::limit($product->description, 80) }}</p>
                    </div>
                    <div class="card-footer d-flex">
                        <a class="btn btn-sm btn-info" href="{{ route('frontend.products.show', $product->id) }}">View details &raquo;</a>

                        <form method="post" action="{{ route('products.cart.store', $product->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                        </form>

                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            @endforeach
        </div><!-- /.row -->
        {{ $products->links() }}
    </div>
    <!-- /END THE FEATURETTES -->
    @push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
    @endpush
</x-frontend.master>