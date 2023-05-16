@extends('master')


@section('title')
    Category Add Page
@endsection



@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center text-success display-6">Add Category Form</div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{session('message')}}</h4>
                            <form action="{{route('category.create')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <label for="" class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name'):''}}</span>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="" class="col-md-3">Category Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                                        <span class="text-danger">{{$errors->has('description') ? $errors->first('description'):''}}</span>

                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <label for="" class="col-md-3">Category Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                        <span class="text-danger">{{$errors->has('image') ? $errors->first('image'):''}}</span>

                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Create New Category">
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

