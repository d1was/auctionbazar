@extends('layouts.app')

@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center pt-5">
                <div class="col-md-7 mb-5"  data-aos="fade" >


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{ route('register')  }}" method="post" enctype="multipart/form-data" class="p-5 bg-white mt-3">
                        @csrf
                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="name">Full Name</label>
                                <input type="text" name="name" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Username</label>
                                <input type="text" name="username" id="username" class="form-control @if(!empty($errors->username)) is-invalid @endif'" autocomplete="off">
                                @if(!empty($errors->username))
                                    <div class="invalid-feedback">
                                        {{ $errors->username }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control @if(!empty($errors->email)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->email))
                                    <div class="invalid-feedback">
                                        {{ $errors->email }}
                                    </div>
                                @endif
                            </div>
                        </div>



                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="phone">Phone Number</label>
                                <input type="tel" name="phone_number" id="phone" class="form-control " autocomplete="off">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-6">
                                <label class="text-black" for="local_address">Local Address</label>
                                <input type="text" name="local_address" id="local_address" class="form-control" autocomplete="off">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="district">District</label>
                                <select name="district" id="district" class="form-control">
                                    <option value="Kathmandu">Kathmandu</option>
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="photo" class="text-black">Your Photo: </label>
                                <input type="file" name="photo" class="form-control @if(!empty($errors->photo)) is-invalid @endif" id="photo" autocomplete="off">
                                @if(!empty($errors->photo))
                                    <div class="invalid-feedback">
                                        {{ $errors->photo }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="subject">Password</label>
                                <input type="password" name="password" id="subject" class="form-control @if(!empty($errors->password)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->password))
                                    <div class="invalid-feedback">
                                        {{ $errors->password }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="subject">Re-type Password</label>
                                <input type="password" name="password_confirmation" id="subject" class="form-control @if(!empty($errors->password_confirmation)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->password_confirmation))
                                    <div class="invalid-feedback">
                                        {{ $errors->password_confirmation }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-12">
                                <p>Have an account? <a href="{{ route('register') }}">Log In</a></p>
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
