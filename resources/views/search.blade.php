@extends('layouts.app')

@section('content')



    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                                <div class="row mb-5">
                <div class="col-md-7 text-left border-primary">
                    <h2 class="font-weight-light text-primary">Search items: </h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
					@foreach($listings as $listing)
                    <div class="d-block d-md-flex listing">
                        <a href="single-listing.html" class="img d-block" style="background-image: url({{ $listing->photo_main  }})"></a>
                        <div class="lh-content">
                            <span class="category"> {{ $listing->condition }} </span>
                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                            <h3><a href="{{ route('single-listing', ['id' => $listing->id]) }}"> {{ $listing->title }} </a></h3>
                            <address>{{ $listing->location }}</address>
                            <p class="mb-0">
                               {{ $listing->deadline }}
                            </p>
                        </div>
                    </div>
                    @endforeach

 
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
