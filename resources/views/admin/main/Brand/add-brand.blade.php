
@extends('admin.layouts.main-spark')
@section('content')
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                add brand
            </h1>
        </div>
        <div class="card">
            <div class="m-auto">
                <div>
                    <h3>add brand</h3>
                </div>

                    <form action="{{route('admin.brand.store')}}" method="POST">
                        @csrf
                        <p>title</p>
                        <p><input type="text" name="title"></p>
                        @error('title')
                        <div class="text-damger">Это поле нужно заполнить</div>
                        @enderror
                        <div class="form-group">
                            <label>Выберите категорию</label>
                            <select name="category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}"
                                        {{$category->id == old('category_id') ? 'selected' : ''}}>{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary m-3" value="Добавить">
                    </form>
                </div>
            </div>
        </div>
        </div>


@endsection
