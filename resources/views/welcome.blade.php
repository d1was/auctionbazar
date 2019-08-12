@extends('layouts.app')

@section('content')
    <div class="site-section bg-light">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h3 class="title-exclusive pt-4"> <i class="icon ion-md-add-circle mr-2"></i> Soon Ending Listings</h3>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-12  block-13">
                    <div class="owl-carousel nonloop-block-13">

                        @foreach($endingListings as $listing)
                        <div class="d-block d-md-flex listing vertical" lisid="{{ $listing->id }}">
                            <a href="{{ route('single-listing', ['id' => $listing->id, 'registerEvents' => 'true']) }}" class="img d-block" style="background-image: url({{ $listing->photo_main }})"></a>
                            <div class="lh-content">
                                <span class="category"> {{ $listing->condition }}</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="{{ route('single-listing', ['id' => $listing->id]) }}">{{ $listing->title }}</a></h3>
                                <address> {{ $listing->local_address }} , {{ $listing->district }}</address>
                                <p class="mb-0 text-danger">
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



    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class=" text-left border-primary">
                    <h3 class="font-weight-light text-primary">Categories</h3>
                </div>
                <ul class="mt-4"> 
                        @foreach($categories as $category)
                        <li><a href=""> {{ $category->title }} </a></li>
                        @endforeach
                    </ul>

                    
                </div>
                <div class="col-sm-9">
                    @if($recommended_items)
                                <div class="row mb-5">
                <div class="col-md-7 text-left border-primary">
                    <h3 class="title-exclusive pt-4"> <i class="icon ion-md-add-circle mr-2"></i> Recommended Listings for you</h3>
                </div>
            </div>
            <div class="row mt-5">
    
        @foreach($recommended_items as $listing)
                                                        <div class="col-lg-12">

                    <div class="d-block d-md-flex listing flat-listing">
                        <a href="{{ route('single-listing', ['id' => $listing->id]) }}" class="img d-block" style="background-image: url('{{ asset($listing->photo_main) }}')"> </a>
                        <div class="lh-content d-flex justify-content-between align-items-center">
                            <div class="left-side">
                                <h3><a href="listings-single.html" class="title"> {{ $listing->title }} </a></h3>
                                <address><i class="icon ion-md-pin"></i> &nbsp; {{ $listing->location }}</address>

                                <span class="category">{{ $listing->fullPrice() }}</span>
                                <span class="category">{{ $listing->condition }}</span>
                            </div>
                            <p class="mb-0 deadline">    
                                    <i class="icon ion-md-stopwatch"></i> {{ $listing->deadline }}
                            </p>
                        </div>
                    </div>

</div>
                    @endforeach

</div>
</div>
@endif
                </div>
            </div>
        </div>
    </div>


@endsection
