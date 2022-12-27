@extends('backend_layout')

@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="page-title m-3">Category

                </h2>
                <div class="card-deck">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <h3><strong class="card-title">Edit Categories</strong>
                        <a href="{{ route('categories.index') }}" class="btn btn-success btn-sm float-right">All Catgory List</a></h3>
                    </div>

                    <div class="card-body">
                      <form action="{{ route('categories.update',['category' => $single_cat->category_id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                          <div class="form-group">
                            <label for="inputEmail4"><b>Category Name</b></label>
                            <input type="text" value="{{ old('category_name') ?? $single_cat->category_name }}" name="category_name" class="form-control" id="inputEmail4" placeholder="Email">

                            @error('category_name')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="inputPassword4"><b>Category Description</b></label>
                            <textarea name="category_description" id="" cols="20" rows="5" class="form-control">{{ old('category_description') ?? $single_cat->category_description }}</textarea>

                            @error('category_description')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label class="m-2" for="PublicationStatus"><b>Publication Status</b></label>
                            @if ($single_cat->publication_status ==1)
                                <input type="checkbox"  id="PublicationStatus" name="publication_status" checked>
                            @else
                                <input type="checkbox"  id="PublicationStatus" name="publication_status" >
                            @endif
                          </div>
                        <input type="submit" value="Update Category" class="btn btn-success btn-sm">
                        <input type="reset" value="Cancel" class="btn btn-info btn-sm">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection
