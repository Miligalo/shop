
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
                    <form action="{{route('admin.brand.update',$brand->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <p>title</p>
                        <p><input type="text" name="title" value="{{$brand->title}}"></p>
                        <div class="form-group">
                            <label>Выберите категорию</label>
                            <select name="category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}"
                                        {{$category->id == old('category_id') ? 'selected' : ''}}>{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary m-3" value="Edit">
                    </form>
                </div>
            </div>
        </div>
        </div>


@endsection

