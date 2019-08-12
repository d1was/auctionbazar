@extends('layouts.app')

@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-3 mb-5" data-aos="fade">

                </div>

                <div class="col-md-9 mb-5"  data-aos="fade">
                    <form action="{{ route('register')  }}" method="post" enctype="multipart/form-data" class="p-5 bg-white mt-3">
                        @csrf

                        <div class="row mt-4">
                            <label class="text-black col-md-3" for="name">Category </label>
                            <div class="col-md-9">
                                <select name="category" id="" class="form-control">
                                    <option value="">Men</option>
                                </select>
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label class="text-black col-md-3" for="name">Title </label>
                            <div class="col-md-9">
                                <input type="text" name="title" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label class="text-black col-md-3" for="name">Price </label>
                            <div class="col-md-9">
                                <input type="text" name="price" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label class="text-black col-md-3" for="name">Deadline </label>
                            <div class="col-md-9">
                                <input type="text" name="deadline" id="name" class="w-50 form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label class="text-black col-md-3" for="name">Min. Bid Interval Price </label>
                            <div class="col-md-9">
                                <input type="text" name="min_bid_price" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label class="text-black col-md-3" for="name">Description </label>
                            <div class="col-md-9">
                                <textarea  name="description" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off"></textarea>
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label class="text-black col-md-3" for="name"> Main Photo </label>
                            <div class="col-md-9">
                                <input type="file" name="photo" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label class="text-black col-md-3" for="name"> Photo 1</label>
                            <div class="col-md-9">
                                <input type="file" name="photo1" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label class="text-black col-md-3" for="name"> Photo 2 </label>
                            <div class="col-md-9">
                                <input type="file" name="photo2" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label class="text-black col-md-3" for="name"> Photo 3 </label>
                            <div class="col-md-9">
                                <input type="file" name="photo3" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label class="text-black col-md-3" for="name"> Photo 4</label>
                            <div class="col-md-9">
                                <input type="file" name="photo4" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label class="text-black col-md-3" for="name">Condition </label>
                            <div class="col-md-9">
                                <input type="text" name="condition" id="name" class="w-50 form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label class="text-black col-md-3" for="name">Dispatch Time </label>
                            <div class="col-md-9">
                                <input type="text" name="dispatch" id="name" class="w-50 form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label class="text-black col-md-3" for="name">Brand </label>
                            <div class="col-md-9">
                                <input type="text" name="brand" id="name" class="w-50 form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label class="text-black col-md-3" for="name">Quantity </label>
                            <div class="col-md-9">
                                <input type="text" name="quantity" id="name" class="w-50 form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label class="text-black col-md-3" for="name">Location </label>
                            <div class="col-md-9">
                                <input type="text" name="location" id="name" class="w-50 form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                            </div>
                        </div>



                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Sign In" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
