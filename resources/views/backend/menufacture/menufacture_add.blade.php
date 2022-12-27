@extends('backend_layout')

@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="page-title m-3">menufacture

                </h2>
                <div class="card-deck">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <h3><strong class="card-title">Add Menufacture</strong>
                        <a href="{{ route('categories.index') }}" class="btn btn-success btn-sm float-right">All Menufacture List</a></h3>
                    </div>

                    <div class="card-body">
                      <form action="{{ route('menufacture.store') }}" method="POST">
                        @csrf
                          <div class="form-group">
                            <label for="inputEmail4"><b>Menufacture Name</b></label>
                            <input type="text" value="{{ old('manufacture_name') }}" name="manufacture_name" class="form-control" id="inputEmail4" placeholder="Menufacture">

                            @error('manufacture_name')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="inputPassword4"><b>Menufacture Description</b></label>
                            <textarea name="manufacture_description" value= "{{ old('manufacture_description') }}" id="" cols="20" rows="5" class="form-control"></textarea>

                            @error('manufacture_description')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label class="m-2" for="PublicationStatus"><b>Menufacture Status</b></label>
                            <input type="checkbox" id="MenufactureStatus" name="menufacture_status" value="1">
                          </div>
                        <input type="submit" value="Add MenuFacture" class="btn btn-success btn-sm">
                        <input type="reset" value="Cancel" class="btn btn-info btn-sm">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection
