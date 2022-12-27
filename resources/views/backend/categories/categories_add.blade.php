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
                      <h3><strong class="card-title">Add Categories</strong>
                        <a href="{{ route('categories.index') }}" class="btn btn-success btn-sm float-right">All Catgory List</a></h3>
                    </div>

                    <div class="card-body">
                      <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                          <div class="form-group">
                            <label for="inputEmail4"><b>Category Name</b></label>
                            <input type="text" value="{{ old('category_name') }}" name="category_name" class="form-control" id="inputEmail4" placeholder="Category">

                            @error('category_name')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="inputPassword4"><b>Category Description</b></label>
                            <textarea name="category_description" value= "{{ old('category_description') }}" id="" cols="20" rows="5" class="form-control"></textarea>

                            @error('category_description')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label class="m-2" for="PublicationStatus"><b>Publication Status</b></label>
                            <input type="checkbox" id="PublicationStatus" name="publication_status" value="1">
                          </div>
                        <input type="submit" value="Add Category" class="btn btn-success btn-sm">
                        <input type="reset" value="Cancel" class="btn btn-info btn-sm">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection
