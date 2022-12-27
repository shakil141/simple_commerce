@extends('backend_layout')

@section('main_content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="page-title">Slider List</h2>

        <div class="row justify-content-center">
          <!-- simple table -->
          <div class="col-md-10 my-4">
            <div class="card shadow">
              <div class="card-body">
                <h5 class="card-title">All Slider
                    <a href="{{ route('sliders.create') }}" class="btn btn-primary btn-sm float-right">Add Slider</a>
                </h5>

                @if(session()->has('added-sucess'))
                        <div class="alert alert-success">
                            <span>{{session('added-sucess')}}</span>
                        </div>
                        @endif

                @if(session()->has('alert-danger'))
                        <div class="alert alert-danger">
                            <span>{{session('alert-danger')}}</span>
                        </div>
                        @endif
                <table class="table table-hover">
                  <thead>
                    <tr class="text-center">
                      <th>SL NO</th>
                      <th>Product Image</th>
                      <th>Publication Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($all_slider as $slider)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td><img height="100px" src="{{URL::to($slider->slider_img)}}" alt="slider_img"></td>
                            <td>
                                @if ($slider->publication_status == 'Active')
                                    <span class="btn btn-sm btn-success">Active</span>
                                @else
                                    <span class="btn btn-sm btn-danger">In Active</span>
                                @endif
                            </td>
                            <td class="d-flex">
                                @if ($slider->publication_status == 'Active')
                                    <a href="{{ route('unactive.slider',['slider'=>$slider->id]) }}" style="margin-right: 10px" class="btn btn-danger btn-sm white"><i class="fas fa-thumbs-down"></i></a>
                                @else
                                     <a href="{{ route('active.slider',['slider'=>$slider->id]) }}" class="btn btn-danger btn-sm white"><i class="fas fa-thumbs-up"></i></a>
                                @endif
                                {!! Form::open(['url'=>route('sliders.destroy',['slider'=>$slider->id]),'method'=>'POST']) !!}
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure !')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                {!! Form::close() !!}

                            </td>
                        </tr>

                     @endforeach
                  </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $all_slider->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection
