@extends('admin.master')
@section('body')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center red">Edit Product Form</h4>
                <hr>
                <form class="form-horizontal p-t-20" action="{{ route('product.add') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}">

                    <div class="form-group row input-control">
                        <label for="exampleInputuname6" class="col-sm-3 control-label">Brand Name : <span
                                class="red">*</span></label>
                        <div class="col-sm-9">
                            <div class="input-group">

                                <select class="form-control @error('brand_id') is-invalid @enderror" name="brand_name"
                                    id="exampleInputuname6">
                                    <option value="" disabled selected>-- Selected --</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->brand_name }}"
                                            {{ $brand->brand_name == $product->brand_name ? 'selected' : '' }}>
                                            {{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="error"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail7" class="col-sm-3 control-label">Name:</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ $product->name }}" id="exampleInputEmail7"
                                    placeholder="Model Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="examplenputEmail7" class="col-sm-3 control-label">Slug:</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                    name="slug" value="{{ $product->slug  }}" id="exampeInputEmail7" placeholder="slug">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail8" class="col-sm-3 control-label">Year:</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('year') is-invalid @enderror"
                                    name="year" value="{{ $product->year }}" id="exampleInputEmail8" placeholder="Year">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail9" class="col-sm-3 control-label">Fuel Type:</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('fuel_type') is-invalid @enderror"
                                    name="fuel_type" value="{{ $product->fuel_type }}" id="exampleInputEmail9"
                                    placeholder="Fule Type">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail10" class="col-sm-3 control-label">Stock :</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('stock') is-invalid @enderror"
                                    name="stock" value="{{ $product->stock }}" id="exampleInputEmail10" placeholder="Stock">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleputEmail10" class="col-sm-3 control-label">Milage :</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('milage') is-invalid @enderror"
                                    name="milage" value="{{ $product->milage }}" id="exampleputEmail10" placeholder="Milage">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exameputEmail10" class="col-sm-3 control-label">Engine :</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('engine') is-invalid @enderror"
                                    name="engine" value="{{ $product->engine }}" id="exameputEmail10" placeholder="Engine">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exameputmail10" class="col-sm-3 control-label">Transmission :</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('transmission') is-invalid @enderror"
                                    name="transmission" value="{{ $product->transmission }}" id="exameputmail10"
                                    placeholder="Transmission">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="examepumail10" class="col-sm-3 control-label">Drive :</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('drive') is-invalid @enderror"
                                    name="drive" value="{{ $product->drive }}" id="examepumail10" placeholder="Drive">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="examepumil10" class="col-sm-3 control-label">Exterior Color :</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('exterior_color') is-invalid @enderror"
                                    name="exterior_color" value="{{ $product->exterior_color }}" id="examepumil10"
                                    placeholder="Exterior Color">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="examepumail10" class="col-sm-3 control-label">Interior Color :</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('interior_color') is-invalid @enderror"
                                    name="interior_color" value="{{ $product->interior_color }}" id="examepumail10"
                                    placeholder="Interior Color">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail10" class="col-sm-3 control-label"> Price:</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="number" class="form-control @error('price') is-invalid @enderror"
                                    name="price" value="{{ $product->price }}" id="exampleInputEmail10"
                                    placeholder="Regular Price">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail5" class="col-sm-3 control-label">Shot Description :</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text"
                                    class="form-control @error('short_description') is-invalid @enderror"
                                    name="short_description" value="{{ $product->short_description }}"
                                    id="exampleInputEmail5" placeholder="Shot Description">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail12" class="col-sm-3 control-label">Long Description :</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <textarea class="form-control summernote  @error('long_description') is-invalid @enderror" name="long_description"
                                    value="{{ $product->regular_price }}" id="exampleInputEmail12">{{ $product->long_description }}</textarea>

                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-file-now" class="col-sm-3 control-label">Feature Image :</label>
                        <div class="col-sm-4">
                            <input type="file" id="input-file-now" name="image"
                                class=" @error('image') is-invalid @enderror dropify" accept="image/*" />
                            <img src="{{ asset($product->image) }}" alt="" height="200" width="250">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-file-now" class="col-sm-3 control-label">Other Image :</label>
                        <div class="col-sm-4">
                            <input type="file" id="input-file-now" name="other_image[]" multiple
                                class=" @error('other_image') is-invalid @enderror dropify" accept="image/*" />
                            @foreach ($product->otherImage as $otherImage)
                                <img src="{{ asset($otherImage->image) }}" alt="" height="200"
                                    width="250">
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Publication Status : </label>
                        <div class="col-sm-9">
                            <input type="radio" {{ $product->status == 1 ? 'checked' : '' }} value="1" name="styled_radio" id="styled_radio1"
                                class="form-check-input @error('styled_radio') is-invalid @enderror">
                            <label class="form-check-label me-3" for="styled_radio1">Published</label>
                            <input type="radio" {{ $product->status == 0 ? 'checked' : '' }} value="0" name="styled_radio" id="styled_radio2"
                                class="form-check-input @error('styled_radio') is-invalid @enderror">
                            <label class="form-check-label" for="styled_radio2">Unpublished</label>
                        </div>

                    </div>
                    <div class="form-group row m-b-0">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update
                                Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
