@extends('layouts.app')

@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-3 mb-5" data-aos="fade">
                    @include('includes/_home-sidebar')
                </div>

                <div class="col-md-9 mb-5 bg-white p-2"  data-aos="fade" >
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Your Active Listings</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Your Expired Listings</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row p-4">
                                @if(sizeof($active_listings))
                                    @foreach($active_listings as $listing)
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
                                    @else
                                    <div id="notfound">
                                            <div class="notfound">
                                                <div class="notfound-404">
                                                    <h1>:(</h1>
                                                </div>
                                                <h2>OOPS - No any active product of yours</h2>
                                                <p>You don't have any active product, either you haven't uploaded any product or the product have been expired.</p>
                                                <a href="{{ route('listing.create') }}">Create new listing</a>
                                     </div>

                                    @endif
                            </div>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row p-4">
                                @if(sizeof($inactive_listings))
                                    @foreach($inactive_listings as $listing)
                                    <div class="col-md-12">

                    <div class="d-block d-md-flex listing flat-listing">
                        <a href="listings-single.html" class="img d-block" style="background-image: url('{{ $listing->photo_main  }}')"></a>
                        <div class="lh-content d-flex justify-content-between align-items-center">
                            <div class="left-side">
                                <h3><a href="listings-single.html" class="title"> {{ $listing->title }} </a></h3>
                                <address><i class="icon ion-md-pin"></i> &nbsp; {{ $listing->location }}</address>

                                <span class="category">{{ $listing->fullPrice() }}</span>
                                <span class="category">{{ $listing->condition }}</span>
                            </div>
                            <p class="mb-0 deadline">    
                                   <button class="category" type="button" data-toggle="modal" data-target="#reAuction">
                                       Re auction this item
                                   </button>
                            </p>
                        </div>
                    </div>

                                            <!-- Modal start -->

                                            <div class="modal fade" id="reAuction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to re auction this item ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    Re auctioning will delete all previous bids for your item. 
                                                  </div>
                                                  <div class="modal-footer">
                                                    
                                                    <form action="{{ route('listing.resubmit' , ['id' => $listing->id ]) }}" method="post">
                                                        @csrf
                                                        <input type="text" name="deadline" placeholder="Enter Deadline" id="">
                                                       <button type="submit" class="btn btn-primary">Confirm</button>
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <!-- Modal end -->


                                        </div>

                                    </div>
                                    @endforeach
                                    @else

                                    <div id="notfound">
                                            <div class="notfound">
                                                <div class="notfound-404">
                                                    <h1>:(</h1>
                                                </div>
                                                <h2>OOPS - No any product that's expired</h2>
                                                <p>You don't have any product, either your product hasn't been expired yet.</p>
                                                <a href="{{ route('listing.create') }}">Create new listing</a>
                                     </div>


                                @endif


                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
