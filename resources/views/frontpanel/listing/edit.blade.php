@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">
@endsection

@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row ">
                <div class="col-md-3 mb-5" data-aos="fade">
                    @include('includes/_home-sidebar')
                </div>

                <div class="col-md-7 offset-md-1 mb-5 bg-white"  data-aos="fade" >

                    <h3 class="title-exclusive pt-4"> <i class="icon ion-md-add-circle mr-2"></i> Edit  Listing</h3>
                    <form action="{{ route('listing.update',['id' => $listing->id])  }}" method="post" enctype="multipart/form-data" class="px-5 listing-submit-form bg-white mt-3">
                        @csrf
                        @method("update")

                        @include('frontpanel.listing.form')


                        <div class="row form-group">
                            <div class="col-md-12 py-0">
                                <button type="submit" value="Submit" class="form-control btn btn-primary py-2 px-4 text-white">
                                    <i class="ion icon-add"></i> Submit
                                </button>
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection



@section('scripts')
<script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script> 
<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>

@endsection        