@extends('backend_layout')



@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="page-title m-3">Slider

                </h2>
                <div class="card-deck">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <h3><strong class="card-title">Add Slider</strong>
                        <a href="{{ route('sliders.index') }}" class="btn btn-success btn-sm float-right">All Slider List</a></h3>
                    </div>

                    <div class="card-body">
                      <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                          <div class="form-group">
                            <label class="m-2" for="inputSliderImage"><b>Slider Image</b></label>
                            <input type="file" name="slider_img" class="form-control" id="inputSliderImage" >

                            @error('slider_img')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label class="m-2" for="PublicationStatus"><b>Publication Status</b></label>
                            <input type="checkbox"  id="PublicationStatus" name="publication_status" value="1">
                          </div>

                        <input type="submit" value="Add Slider" class="btn btn-success btn-sm">
                        <input type="reset" value="Cancel" class="btn btn-info btn-sm">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection
