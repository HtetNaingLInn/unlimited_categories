@extends('layouts.admin.master')

@section('css')

@endsection


@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Create New Category</h5>
            </div>
            <div class="card-body">
                <form  method="POST" action="{{Route('category.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text"  class="form-control" placeholder="Enter Category Name"
                            name="name">
                    </div>

                    <select class="form-control"  name="category_id">
                        <option value="">NULL</option>
                        @foreach ($data as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                         @endforeach





                      </select>
                      <button type="submit" class="btn btn-info btn-round mt-3 float-right">Create</button>
                </form>
            </div>
        </div>
    </div>


@endsection
