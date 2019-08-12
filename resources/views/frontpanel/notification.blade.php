@extends('layouts.app')

@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-3 mb-5 " data-aos="fade">
                    @include('includes/_home-sidebar')
                </div>

                <div class="offset-md-1 shadow-the-box col-md-7 mb-5 bg-white p-2"  data-aos="fade" >
                        <div class="seller-info bg-white p-3  small-and-beautiful mb-4">
                            <h5 class="box-title">Your Notifications</h3>
                                <hr>
                                    @if(sizeof($user->notifications))

                                <div class="notifications">
    <ul class="notification-list">
        @foreach($user->notifications as $notification)
            @if($notification->type == "App\Notifications\WonTheBid")

        <li>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img src="https://cdn4.iconfinder.com/data/icons/mayssam/512/user-128.png" class="media-object cat-icon rounded" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <ul class="n-user-list">
                    <li class="ml-1">
                         Congratulations !!
                    </ul>
                    <p class="media-heading @if(!$notification->read_at) font-weight-bold @endif">
                        {{ $notification->data['message'] }} <a href="{{ route('single-listing', ['id' => $notification->data['listing']['id'] ]) }} ">{{ $notification->data['listing']['title'] }}</a>
                    </p>
                    <p class="small-and-beautiful">
                        {{ $notification->data['time'] }}
                    </p>
                </div>
            </div>
        </li>
        @else
        <li>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img src="https://cdn4.iconfinder.com/data/icons/mayssam/512/heart-128.png" class="media-object cat-icon rounded-circle" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <ul class="n-user-list">
                    <li><a href="#"><img src="http://1plusx.com/app/mu-plugins/all-in-one-seo-pack-pro/images/default-user-image.png" class="avatar rounded" alt="..."></a></li>
                     <li><a href="#"><img src="http://1plusx.com/app/mu-plugins/all-in-one-seo-pack-pro/images/default-user-image.png" class="avatar rounded" alt="..."></a></li>
                     <li><a href="#"><img src="http://1plusx.com/app/mu-plugins/all-in-one-seo-pack-pro/images/default-user-image.png" class="avatar rounded" alt="..."></a></li>
                     <li><a href="#"><img src="http://1plusx.com/app/mu-plugins/all-in-one-seo-pack-pro/images/default-user-image.png" class="avatar rounded" alt="..."></a></li>
                     <li><a href="#"><img src="http://1plusx.com/app/mu-plugins/all-in-one-seo-pack-pro/images/default-user-image.png" class="avatar rounded" alt="..."></a></li>
                    </ul>
                    <p class="media-heading"><b>Ranjeet Rajput</b> and 4 others Like your Post.</p>
                </div>
            </div>
        </li>

        @endif


           


        @endforeach
    </ul>
</div>
@else

 <div id="notfound">
        <div class="notfound">
              <div class="notfound-404">
                     <h1>:(</h1>
              </div>
                <h2>No Notifications - seems like you've nothing to get alerted</h2>
              <p>You don't have any notification, either you haven't been here long or you have no interaction with any listings</p>
      </div>
    </div>


@endif


                        </div>



            </div>
        </div>
    </div>
</div>

@endsection
