@extends('backend_layout')



@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="page-title m-3">Product

                </h2>
                <div class="card-deck">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <h3><strong class="card-title">Edit Product</strong>
                        <a href="{{ route('products.index') }}" class="btn btn-success btn-sm float-right">All Product List</a></h3>
                    </div>

                    <div class="card-body">
                      <form action="{{ route('products.update',['product'=>$single_product->product_id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                          <div class="form-group">
                            <label for="inputProductName"><b>Product Name</b></label>
                            <input type="text" value="{{ old('product_name') ?? $single_product->product_name }}" name="product_name" class="form-control" id="inputProductName" placeholder="Product">

                            @error('product_name')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="control-group">
                                <label for="inputProductCategory" class="control-label m-1"><b>Product Category</b></label>
                            <div class="controls">
                                <select name="category_id" id="inputProductCategory" class="form-control">
                                    @foreach ($category as $single_category)
                                        <option value="{{ $single_category->category_id }}"  {{ ( $single_category->category_id == $single_product->product_id ) ? 'selected' : '' }}>{{ $single_category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                          </div>

                          <div class="control-group">
                                <label for="inputMenufactureName" class="control-label m-1"><b>Menufacture Name</b></label>
                            <div class="controls">
                                <select name="menufacture_id" id="inputMenufactureName" class="form-control">

                                    @foreach ($menufacture as $menufacture_item)
                                        <option value="{{ $menufacture_item->menufacture_id }}" {{ ( $menufacture_item->menufacture_id == $single_product->product_id ) ? 'selected' : '' }}>{{$menufacture_item->manufacture_name}}</option>
                                    @endforeach
                                </select>

                            </div>
                          </div>

                          <div class="form-group">
                            <label class="m-2" for="inputProductShortDescription"><b>Product Short Description</b></label>
                            <textarea name="product_short_description"  id="inputProductShortDescription"  rows="3" class="form-control">{{ old('$single_product->product_short_description') ?? $single_product->product_short_description }}</textarea>

                            @error('product_short_description')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label class="m-2" for="inputProductLongDescription"><b>Product Long Description</b></label>
                            <textarea name="product_long_description"  id="inputProductLongDescription"  rows="5" class="form-control">{{ old('$single_product->product_long_description') ?? $single_product->product_long_description }}</textarea>

                            @error('product_long_description')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label class="m-2" for="inputProductPrice"><b>Product Price</b></label>
                            <input type="text" name="product_price" id="inputProductPrice" class="form-control" value="{{ old('product_price') ?? $single_product->product_price }}" >

                            @error('product_price')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label class="m-2" for="inputProductImage"><b>Product Old Image</b></label>
                            <img style="width:200px" src="{{URL::to($single_product->product_image)}}" alt="product_image">

                          </div>

                          <div class="form-group">
                            <label class="m-2" for="inputProductImage"><b>Product New Image</b></label>
                            <input type="file" name="product_image" class="form-control" id="inputProductImage" >

                            @error('product_image')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label class="m-2" for="inputProductSize"><b>Product Size</b></label>
                            <input type="text" value="{{ old('product_size') ?? $single_product->product_size }}" name="product_size" class="form-control" id="inputProductSize">

                            @error('product_size')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label class="m-2" for="inputProductColor"><b>Product Color</b></label>
                            <input type="text" value="{{ old('product_color') ?? $single_product->product_color }}" name="product_color" class="form-control" id="inputProductColor">

                            @error('product_color')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label class="m-2" for="PublicationStatus"><b>Publication Status</b></label>
                            @if ($single_product->publication_status == 'Active')
                                <input type="checkbox"  id="PublicationStatus" name="publication_status"  checked>
                            @else
                                <input type="checkbox"  id="PublicationStatus" name="publication_status">
                            @endif
                          </div>
                        <input type="submit" value="Update Product" class="btn btn-success btn-sm">
                        <input type="reset" value="Cancel" class="btn btn-info btn-sm">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection
