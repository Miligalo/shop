
@extends('admin.layouts.main-spark')
@section('content')
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                edit
            </h1>
        </div>
        <div class="card">
            <div class="m-auto">
                <div>
                    <h3>edit post</h3>
                    <form action="{{route('admin.category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <p>title</p>
                        <p><input type="text" name="title" value="{{$category->title}}"></p>
                        <input type="submit" class="btn btn-primary m-3" value="Edit">
                    </form>
                </div>
            </div>
        </div>
        </div>


@endsection

