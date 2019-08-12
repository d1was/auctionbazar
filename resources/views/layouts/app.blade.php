<!DOCTYPE html>
<html lang="en">
<head>
    <title>Auctionbazaar &mdash; Online Auctioning </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rangeslider.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    

    @yield('custom-css')

</head>
<body>
    {{-- Including Header --}}
    @include('includes/_header')

    {{-- Content Here --}}
    @yield('content')

    {{-- Including Footer --}}
    @include('includes/_footer')

</div>

<script src="{{ asset('js/jquery-3.3.1.min.js')  }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js')  }}"></script>
<script src="{{ asset('js/jquery-ui.js')  }}"></script>
<script src="{{ asset('js/popper.min.js')  }}"></script>
<script src="{{ asset('js/bootstrap.min.js')  }}"></script>
<script src="{{ asset('js/owl.carousel.min.js')  }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js')  }}"></script>
<script src="{{ asset('js/jquery.countdown.min.js')  }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js')  }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js')  }}"></script>
<script src="{{ asset('js/aos.js')  }}"></script>
<script src="{{ asset('js/rangeslider.min.js')  }}"></script>

<script src="{{ asset('js/main.js') }}"></script>

@yield('scripts')


<script>
    
    $(function(){
    var timer;
    
    $('.listing').hover(function(){
        var id = $(this).attr('lisid');
        timer = setTimeout(function(){
            postLog(id);
        },  3000);
    }, function(){
        clearTimeout(timer);
    });
})

    function postLog(id){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var id = id;
        $.ajax({
            'url' : '/savelog/' + id + '/productHover',
            type: 'GET',
            success: function(data){
                console.log("data log inserted")
            },
            error: function(data){
                console.log(data)
            }

        });
    }


</script>

</body>
</html>
