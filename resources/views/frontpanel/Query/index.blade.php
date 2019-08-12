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
                    @if(Session::has('reply_success'))
                        <div class="alert alert-info">
                             {{ Session::get('reply_success') }}
                        </div>
                    @endif

                            <h5 class="box-title">Your Messages</h3>
                                <hr>
                                <div class="notifications">
                                    @if(sizeof($messages))
    <ul class="notification-list">
        @foreach($messages as $message)
        @if($message->isQuery())
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
                         <b>{{ $message->sender->username  }}</b> asks you question for your product <a href="{{ route('single-listing',['id' => $message->listing->id]) }}"> {{ $message->listing->title }} </a> 
                    </ul>
                    <p class="media-heading ">
                        <b> Q. {{ $message->query }}</b>
                    </p>
                    @if($message->reply)
                        <p class="media-heading">
                            <b> A. {{ $message->reply }} </b>
                        </p>
                        @else
                        <form action="{{ route('query.reply') }}" method="post">
                            @csrf
                            <textarea name="reply" id="" cols="30" rows="2"></textarea>
                            <input type="hidden" name="message_id" value="{{ $message->id }}">
                            <input type="submit" value="Reply">
                        </form>
                        @endif
                    <p class="small-and-beautiful">
                    </p>
                </div>
            </div>
        </li>
        @else
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
                         Your query was replied for  product <a href="{{ route('single-listing',['id' => $message->listing->id]) }}"> {{ $message->listing->title }} </a> 
                    </ul>
                    <p class="media-heading ">
                         Q. {{ $message->query }}
                    </p>
                    @if($message->reply)
                        <p class="media-heading">
                            <b> A. {{ $message->reply }} </b>
                        </p>
                        @endif
                    <p class="small-and-beautiful">
                    </p>
                </div>
            </div>
        </li>
        @endif
        @endforeach
    </ul>
    @else

    <div id="notfound">
        <div class="notfound">
              <div class="notfound-404">
                     <h1>:(</h1>
              </div>
                <h2>No message - seems like you're lonely</h2>
              <p>You don't have any message, either you haven't been here long or you have no friends</p>
      </div>
    </div>


    @endif
</div>
                        </div>



            </div>
        </div>
    </div>
</div>

@endsection
