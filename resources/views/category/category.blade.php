@extends('layouts.admin.master')

@section('css')

@endsection


@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Create List</h5>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-12 bg-white">

                            <div class="card-body">
                                <a href="{{route('category.create')}}" class="btn btn-info btn-round mt-3 mb-3">
                                    <i class="fas fa-plus"></i> Add
                                </a>

                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Sub_Category</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($data as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->category_id == NULL ? 'Main Category' :$category->category_id }}</td>


                                        @endforeach

                                    </tbody>

                                </table>

                            </div>
                        </div>

                    </div>
                    <!-- /.row -->

                </div><!-- /.container-fluid -->
            </div>
        </div>
    </div>


@endsection
