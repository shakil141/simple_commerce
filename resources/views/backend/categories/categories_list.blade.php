@extends('backend_layout')

@section('main_content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="page-title">Categories List</h2>

        <div class="row justify-content-center">
          <!-- simple table -->
          <div class="col-md-8 my-4">
            <div class="card shadow">
              <div class="card-body">
                <h5 class="card-title">All Category
                    <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm float-right">Add Category</a>
                </h5>
                <p class="card-text">The definition of a category is any sort of division or class. An example of category is food that is made from grains</p>
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
                      <th>Category Name</th>
                      <th>Category Description</th>
                      <th>Publication Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($category as $category_item)
                       <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category_item->category_name }}</td>
                            <td>{{ $category_item->category_description }}</td>
                            <td>
                                @if ($category_item->publication_status =='Active')
                                    <span class="btn btn-sm btn-success">Active</span>
                                @else
                                    <span class="btn btn-sm btn-danger">In Active</span>
                                @endif
                            </td>
                            <td class="d-flex">
                                @if ($category_item->publication_status=='Active')
                                    <a href="{{ route('un_active',['category'=>$category_item->category_id]) }}" style="margin-right: 5px" class="btn btn-danger btn-sm white">
                                        <i class="fas fa-thumbs-down"></i>
                                    </a>
                                @else
                                    <a href="{{ route('active',['category'=>$category_item->category_id]) }}" style="margin-right: 5px" class="btn btn-success btn-sm white">
                                        <i class="fas fa-thumbs-up"></i>
                                    </a>
                                @endif

                                <a style="margin-right: 5px"  href="{{ route('categories.edit',['category'=> $category_item->category_id]) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('categories.destroy',['category' => $category_item->category_id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are You Sure !')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                       </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $category->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection
