@extends('master')


@section('title')
    Home Page
@endsection



@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-header text-success text-center display-6">Manage All Category</div>
                    <div class="card-body">
                        <h4 class="text-center text-success">{{session('message')}}</h4>
                        <table class="table table-hover table-bordered text-center">
                            <thead>
                            <tr>
                                <th>SO NO</th>
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Category Image</th>
                                <th colspan="3">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->description}}</td>
                                    <td><img src="{{asset($category->image)}}" alt="" width="120" height="120"></td>
                                    <td>
                                        <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-success btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{route('category.delete',['id'=> $category->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this...')">Delete</a>
                                    </td>
                                    <td>
                                        <a href="{{route('view.detail',['id'=>$category->id])}}" class="btn btn-info btn-sm">View</a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


