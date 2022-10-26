<x-frontend.master>
    <div class="container marketing">
        <br /><br /><br /><br />
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4 mb-2">
                <div class="card">
                    <div class="card-header">
                        <img src="{{ asset('storage/products/'.$product->image) }}" height="350" />
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-8 mb-2">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $product->title }}</h4>
                    </div>
                    <div class="card-body">
                        <p>Price: {{ $product->price }}</p>
                        <p>Description: {{ $product->description }}</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-sm btn-primary" href="#">Add to Cart</a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <section>
            @auth
            <form action="{{ route('products.comments.store', $product->id) }}" method="post">
                @csrf
                <x-forms.textarea name="body" label="Your Comment" />
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
            @else
            <a href="{{ url('/login') }}"><button class="btn btn-info">Login to comment</button></a>
            @endauth
        </section>
        <hr />
        <section>
            <h2>Comments</h2>
            <ul>
                @foreach($product->comments as $comment)
                <li>
                    <div>
                        <h3>
                            {{ $comment->commentedBy->name }} <small><mark>{{ $comment->created_at->diffForHumans() }}</mark></small>
                        </h3>
                        <p>{{ $comment->body }}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </section>
    </div>
    <!-- /END THE FEATURETTES -->

</x-frontend.master>