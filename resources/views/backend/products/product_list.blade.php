@extends('backend_layout')

@section('main_content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="page-title">Product List</h2>

        <div class="row justify-content-center">
          <!-- simple table -->
          <div class="col-md-10 my-4">
            <div class="card shadow">
              <div class="card-body">
                <h5 class="card-title">All Product
                    <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right">Add Product</a>
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
                      <th>Product Name</th>
                      <th>Product Price</th>
                      <th>Product Image</th>
                      <th>Category Name</th>
                      <th>Menufacture Name</th>
                      <th>Publication Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($all_product_info as $product_item)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product_item->product_name }}</td>
                            <td>{{ $product_item->product_price }}</td>
                            <td><img style="width: 40px" src="{{URL::to($product_item->product_image)}}" alt=""></td>
                            <td>{{ $product_item->category->category_name }}</td>
                            <td>{{ $product_item->manufacture->manufacture_name ?? null }}</td>
                            <td>
                                @if ($product_item->publication_status == 'Active')
                                    <span class="btn btn-sm btn-success">Active</span>
                                @else
                                    <span class="btn btn-sm btn-danger">In Active</span>
                                @endif
                            </td>
                            <td class="d-flex">
                                @if ($product_item->publication_status=='Active')
                                <a href="{{ route('unactive.product',['product'=>$product_item->product_id]) }}" style="margin-right: 5px" class="btn btn-danger btn-sm white">
                                    <i class="fas fa-thumbs-down"></i>
                                </a>
                                @else
                                <a href="{{ route('active.product',['product'=>$product_item->product_id]) }}" style="margin-right: 5px" class="btn btn-success btn-sm white">
                                    <i class="fas fa-thumbs-up"></i>
                                </a>
                                @endif
                                <a style="margin-right: 5px"  href="{{ route('products.edit',['product'=>$product_item->product_id]) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                {!! Form::open(['url' => route('products.destroy',['product'=>$product_item->product_id]),'method'=>'POST']) !!}
                                  @method('DELETE')
                                    <button onclick="return confirm('Are you sure !')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                {!! Form::close() !!}

                            </td>

                        </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $all_product_info->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection
