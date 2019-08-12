@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/guiz-table.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/ubislider.css ')}}">
@endsection

@section('content')

    <div class="site-section mt-5" id="app">
        <div class="container">
            <div class="row">
                  
                <div class="col-lg-4">

                    <div class="mb">
    
<div class="ubislider-image-container" data-ubislider="#slider" id="imageSlider"></div>
<div class="ubislider" id="slider">
    <a class="arrow prev"></a>
    <a class="arrow next"></a>
    <ul class="ubislider-inner">
        <li>
            <img src="{{ asset($listing->photo_main) }}">
        </li>
        <li>
            <img src="{{ asset($listing->photo_1) }}">
        </li>
        <li>
            <img src="{{ asset($listing->photo_2) }}">
        </li>

    </ul>
</div>

                    </div>


                    <div class="seller-info bg-white p-3 line-the-box small-and-beautiful mb-4" style="margin-top:-140px">
                            <h5 class="box-title mb-4">Bid History</h3>
                                <table class="table">
                                    <thead>
                                        <th>Bidder</th>
                                        <th>Bid Amount</th>
                                        <th>Bid Time</th>
                                    </thead>
                                    <tbody>
                                        @if(!empty($listing->bids))
                                        @foreach($listing->bids()->with('user')->orderBy('created_at', 'desc')->get() as $bid)
                                        <tr>
                                            <td> {{ $bid->user->username }}</td>
                                            <td>{{ $bid->amount }}</td>
                                            <td> {{ $bid->created_at->format('Y/m/d h:m:s') }}</td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                        </div>



                </div>
                <div class="col-lg-5">

                    <div class="mb-3 listing-title">
                        <h3 class="h3 text-black mb-3">{{ $listing->title }}</h3>

                    </div>

                    <div class="listing-options mb-4">
                        <div class="row single-option">
                            <span class="key col-sm-3 text-right">Condition:</span>
                            <span class="value col-sm-5"> {{ $listing->condition }}</span>
                        </div>
                        <div class="row single-option">
                            <span class="key col-sm-3 text-right">Expires in:</span>
                            <span class="value col-sm-5"> {{ $listing->deadline }}</span>
                        </div>
                    </div>

                    <div class="listing-bid mb-4">
                        <div class="listing-options">
                            <div class="row single-option">
                                <span class="key col-sm-3 text-right">Current bid:</span>
                                <div class="value price col-sm-5">{{ $listing->fullPrice() }}</div>
                            </div>
                            <div class="row single-option mt-2">
                                <div class="key col-sm-3"></div>
                                <div class="value col-sm-9">
                                    <form action="{{ route('bid.store') }}" method="post">
                                        @csrf
                                        <input type="text" name="amount">
                                        <input type="hidden" name="listing_id" value="{{ $listing->id }}">
                                        <input type="submit" value="Place bid">
                                    </form>
                                </div>
                            </div>

                            <div class="row single-option mt-2">
                                <div class="key col-sm-3"></div>
                                <div class="key col-sm-9">
                                    <span class="small-text">Enter {{ $listing->fullPrice() }} or more to bid</span>
                                </div>
                            </div>

                        </div>
                    </div>

                @if(Session::has('message'))
                    <div class="seller-description small-and-beautiful mb-4">
                        <div class="listing-bid p-2 ">
                            <div class="alert alert-info">
                                {{ Session::get('message') }}
                            </div>
                        </div>
                    </div>
                    @endif


                    <div class="seller-description small-and-beautiful">
                        <div class="listing-bid p-2">
                            Seller's Description
                        </div>
                        <div class="p-2 bg-white shadow-the-box">
                            {{ $listing->description }}
                        </div>

                    </div>

                    <hr>

                    <div class="row mb-5">
                        <div class="col-md-12">
                            <table class="table table-striped ">
                                <tr>
                                    <td>Condition</td>
                                    <td>{{ $listing->condition }}</td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td>{{ $listing->quantity }}</td>
                                </tr>
                                <tr>
                                    <td>Location</td>
                                    <td>{{ $listing->location }}</td>
                                </tr>
                                <tr>
                                    <td>Dispatch</td>
                                    <td>{{ $listing->dispatch }} days</td>
                                </tr>
                                <tr>
                                    <td>Brand</td>
                                    <td>{{ $listing->brand }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>


                    <div class="col-md-3">
                        <div class="seller-info bg-white p-3 line-the-box small-and-beautiful mb-4">
                            <h5 class="box-title">Seller's Information</h3>
                                <p class="mt-2">
                                    <a href="" class="d-block username-link">{{ $listing->user->username }}  ( {{ $listing->user->profile->district }} )</a>
                                    <span>--------------------------------------</span><br>
                                    <span class="username-link">{{ $listing->user->totalListing() }} Listings </span><br>
                                </p>
                        </div>

                         <div class="seller-info bg-white p-3 line-the-box small-and-beautiful">
                            @if(Session::has('query_message'))
                                        <div class="alert alert-info">
                                            {{ Session::get('query_message') }}
                                        </div>
                            @endif


                            <h5 class="box-title">Any queries for seller ?</h3>
                                <p class="mt-3">
                                    <form action="{{ route('queries.store') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="listing_id" value="{{ $listing->id }}">
                                        <textarea name="message" id="" cols="30" rows="3"></textarea>
                                        <input type="submit" value="Ask">
                                    </form>

                                </p>
                        </div>

                    </div>

            </div>
        </div>
    </div>


@if(!empty($recommended_products))
<div class="container">
     <div class="row p-3">
                <div class="col-12">
                    <h2 class="h5 mb-4 text-black">People who bid on this product also bid on these:</h2>
                </div>
            </div>
                <div class="row">
                <div class="col-12  block-13">
                    <div class="owl-carousel nonloop-block-13">

                        @foreach($recommended_products as $listing)
                        <div class="d-block d-md-flex listing vertical">
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
@endif

@endsection


@section('scripts')


    <script src="{{asset('js/ubislider.js') }}"></script>   
    <script type="text/javascript" src="https://cdn.jsdelivr.net/elevatezoom/3.0.8/jqueryElevateZoom.js"></script> 

<script>
    $(document).ready(function(){
 $('#slider').ubislider({
    arrowsToggle: true,
    type: 'ecommerce',
    hideArrows: true,
    autoSlideOnLastClick: true,
    modalOnClick: true,
    onTopImageChange: function(){
        $('#imageSlider img').elevateZoom();
    },
    position: 'vertical'
 });
});

</script>

    @endsection
