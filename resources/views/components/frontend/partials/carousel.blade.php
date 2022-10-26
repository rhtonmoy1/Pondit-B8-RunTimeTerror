
@props(['carousels'=>[],])

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        @for ($i = 0; $i < count($carousels); $i++)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i}}" 
            @if ($i == 0)class="active" aria-current="true" @endif aria-label="Slide {{$i+1}}"></button>
        @endfor

    </div>
    <div class="carousel-inner">
        @forelse ($carousels as $carousel)
            <div
                class="carousel-item 
                @if ($loop->first) active @endif
                
                ">
                <img src="{{ asset('storage/carousels/' . $carousel->image) }}" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>{{ $carousel->name }}</h1>
                        <p>{{ $loop->iteration }}</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>

        @empty
            <h1>No Caousel Found</h1>
        @endforelse

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
