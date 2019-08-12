                     <div class="row">
                            <label class="text-black" for="name">Title <sup class="text-danger">*</sup></label>
                                <input type="text" name="title" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" placeholder="Enter Listing title" value="@if(isset($listing)) {{ $listing->title}} @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif                            
                        </div>


                        <div class="row form-group mt-2">
                            <div class="col-md-6 pl-0">
                             <label class="text-black" for="name">Category <sup class="text-danger">*</sup></label>
                                <select name="category" id="" class="form-control">
                                    @if(!empty($categories))
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}"> {{ $category->title  }} </option>
                                        @endforeach
                                    @endif
                                </select>
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif

                            </div>
                            <div class="col-md-6">
                                <div class="row ">
                                    <label class="text-black" for="name">Price <sup class="text-danger">*</sup></label>
                                            <input type="text" name="price" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" placeholder="Enter initial price for listing" autocomplete="off" value="@if(isset($listing)) {{ $listing->initial_price }} @endif">
                                            @if(!empty($errors->name))
                                                <div class="invalid-feedback">
                                                    {{ $errors->name }}
                                                </div>
                                            @endif
                                </div>                                
                            </div>
                        </div>

                        <div class="row mt-4 form-group">
                            <div class="col-md-6 pl-0">
                                <label class="text-black" for="name">Deadline <sup class="text-danger">*</sup></label>
                                <div class='input-group date' id='datetimepicker1'>
                                     <input type='text' class="form-control" placeholder="Enter Listing Deadline" value="@if(isset($listing)) {{ $listing->deadline }} @endif" />
                                     <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar icon ion-calendar"></span>
                                     </span>
                                </div>  
                            </div>

                            <div class="col-md-6 pl-0">
                                <label class="text-black" for="name">Min. Bid Interval Price <sup class="text-danger">*</sup></label>
                                <input type="text" name="min_bid_price" placeholder="Enter Min. bid interval"  id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" value="@if(isset($listing)) {{ $listing->deadline }} @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif                               
                            </div>

                        </div>

                        <div class="row mt-4 form-group">
                            <label class="text-black" for="name">Description <sup class="text-danger">*</sup></label>
                                <textarea  name="description" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off" placeholder="Enter Product Description">@if(isset($listing)) {{ $listing->description }} @endif</textarea>
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                        </div>

                        <div class="row mt-4 form-group">
                            <label class="text-black" for="name"> Main Photo <sup class="text-danger">*</sup></label>
                                <input type="file" name="photo" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                        </div>

                        <div class="row mt-4 form-group">
                            <label class="text-black" for="name"> Photo 1</label>
                                <input type="file" name="photo1" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                        </div>

                        <div class="row mt-4 form-group">
                            <label class="text-black" for="name"> Photo 2 </label>
                                <input type="file" name="photo2" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                        </div>

                        <div class="row mt-4 form-group">
                            <label class="text-black" for="name"> Photo 3 </label>
                                <input type="file" name="photo3" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                        </div>

                        <div class="row mt-4 form-group">
                            <label class="text-black" for="name"> Photo 4</label>
                                <input type="file" name="photo4" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                        </div>

                        <div class="row mt-4 form-group">
                            <div class="col-md-6 pl-0">
                                <label class="text-black" for="name">Condition <sup class="text-danger">*</sup></label>
                                <select name="condition" class="form-control" id="">
                                    <option value="Brand New">Brand New</option>
                                    <option value="Like New(Used Sometimes)">Like New (Used Sometimes)</option>
                                    <option value="Good/Fair">Good/Fair</option>
                                    <option value="Poor Condition">Poor Condition</option>
                                </select>
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label class="text-black " for="name">Dispatch Time (in days) </label>
                                <input type="text" name="dispatch" value="@if(isset($listing)) {{ $listing->dispatch }} @endif" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off" placeholder="No. of days to dispatch ">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif                                
                            </div>
                        </div>

                        <div class="row mt-4 form-group">
                            <div class="col-md-6 pl-0">
                                <label class="text-black" for="name">Brand</label>
                                <input type="text" name="brand" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" placeholder="Enter brand name" value="@if(isset($listing)) {{ $listing->brand }} @endif" autocomplete="off">
                                @if(!empty($errors->name))
                                <div class="invalid-feedback">
                                    {{ $errors->name }}
                                </div>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label class="text-black" for="name">Quantity </label>
                                <input type="text" name="quantity" value="@if(isset($listing)) {{ $listing->quantity }} @endif" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off" placeholder="No. of items available">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif

                            </div>

                        </div>

                        <div class="row mt-4 form-group">
                            <label class="text-black" for="name">Location </label>
                                <input type="text" name="location" id="name" class="form-control @if(!empty($errors->name)) is-invalid @endif" autocomplete="off" value="@if(isset($listing)) {{ $listing->location }} @endif" placeholder="Enter location you this listing is available">
                                @if(!empty($errors->name))
                                    <div class="invalid-feedback">
                                        {{ $errors->name }}
                                    </div>
                                @endif
                        </div>
