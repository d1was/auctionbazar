@extends('layouts.app')

@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center mt-1">
                <div class="col-md-3 mb-5" data-aos="fade">
                    @include('includes/_home-sidebar')
                </div>

                <div class="col-md-9 mb-5 bg-white p-2"  data-aos="fade" >
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="icon ion-md-clock"></i> &nbsp; Your ongoing Bids</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> <i class="icon ion-md-trophy"></i> &nbsp; Your Won Bids</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row p-4">
                                @if(sizeof($active_bids))
                                    @foreach($active_bids as $bid)
                                    @if($bid->listing->is_active)
                    <div class="col-lg-12">

                    <div class="d-block d-md-flex listing flat-listing">
                        <a href="listings-single.html" class="img d-block" style="background-image: url('{{ $bid->listing->photo_main  }}')"></a>
                        <div class="lh-content d-flex justify-content-between align-items-center">
                            <div class="left-side">
                                <h3><a href="listings-single.html" class="title"> {{ $bid->listing->title }} </a></h3>
                                <address><i class="icon ion-md-pin"></i> &nbsp; {{ $bid->listing->location }}</address>

                                <span class="category">{{ $bid->listing->fullPrice() }}</span>
                                <span class="category">{{ $bid->listing->condition }}</span>
                            </div>
                            <p class="mb-0 deadline">    
                                    <i class="icon ion-md-stopwatch"></i> {{ $bid->listing->deadline }}
                            </p>
                        </div>
                    </div>

</div>
@endif

                                    @endforeach

                                    @else


                                     <div id="notfound">
                                            <div class="notfound">
                                                <div class="notfound-404">
                                                    <h1>:(</h1>
                                                </div>
                                                <h2>OOPS - No bids on any active item</h2>
                                                <p>You don't have any bids on active listing, either you haven't bid in any product or the product have been expired.</p>
                                                <a href="{{ route('home') }}">View Listings</a>
                                     </div>
                                 </div>

                                    @endif
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row p-4">
                                @if(!empty($won_bids))
                                    @foreach($won_bids as $bid)
                                 <div class="col-lg-12">                                    
                                        <div class="d-block d-md-flex listing flat-listing">
                                            <a href=" {{ route('single-listing', ['id' => $bid->listing->id]) }}" class="img d-block" style="background-image: url('{{ asset($bid->listing->photo_main) }}')"></a>
                                        <div class="lh-content d-flex justify-content-between align-items-center">
                                            <div class="left-side">
                                                <h3><a href="listings-single.html" class="title"> {{ $bid->listing->title }} </a></h3>
                                                <address><i class="icon ion-md-pin"></i> &nbsp; {{ $bid->listing->location }}</address>

                                                <span class="category">{{ $bid->listing->fullPrice() }}</span>
                                                <span class="category">{{ $bid->listing->condition }}</span>
                                            </div>
                                            <p class="mb-0 deadline">    
                                                <button type="button" data-toggle="modal" data-target="#sellerContact" class="category"> Get Seller's info</button>                                                
                                            </p>
                                         </div>         
                                <!-- modal -->
                                        <div class="modal fade" id="sellerContact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Seller's Information</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                                          <div class="modal-body seller-info">
                                                            <table class="table">
                                                                <tr>
                                                                    <td class="title"> Seller Username </td>
                                                                    <td>{{ $bid->user->username }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Seller Email</td>
                                                                    <td> {{ $bid->user->email }} </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Phone Number: </td>
                                                                    <td>{{ $bid->user->profile->phone_number }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Address: </td>
                                                                    <td> {{ $bid->user->profile->local_address }}, {{ $bid->user->profile->district }} </td>
                                                                </tr>
                                                            </table>
                                                          </div>
                                                         
                                                        </div>
                                                      </div>
                                                    </div>

                                                <!-- modal end --> 
                                            </div>
                                        </div>
                                    @endforeach
                                    @else

                                    <div id="notfound">
                                            <div class="notfound">
                                                <div class="notfound-404">
                                                    <h1>:(</h1>
                                                </div>
                                                <h2>OOPS - Seems like you haven't won any bid</h2>
                                                <p>You don't have won any bid, either you haven't bid on any product or your bids have been topped.</p>
                                                <a href="{{ route('home') }}">View Other Listings</a>
                                     </div>

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



@section('scripts')



@endsection