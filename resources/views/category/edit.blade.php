@extends('master')


@section('title')
    Edit Category Page
@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-success text-center display-6">Edit Category Form</div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{session('message')}}</h4>
                            <form action="{{route('category.update',['id'=>$category->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <label for="" class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="{{$category->name}}">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="" class="col-md-3">Category Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$category->description}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="" class="col-md-3">Category Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                        <img src="{{asset($category->image)}}" alt="" height="150" width="150">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Update Category Info">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



