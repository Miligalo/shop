
@extends('admin.layouts.main-spark')
@section('content')
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                add category
            </h1>
        </div>
        <div class="card">
            <div class="m-auto">
                <div>
                    <h3>add post</h3>
                </div>

                    <form action="{{route('admin.category.store')}}" method="POST">
                        @csrf
                        <p>title</p>
                        <p><input type="text" name="title"></p>
                        @error('title')
                        <div class="text-damger">Это поле нужно заполнить</div>
                        @enderror
                        <input type="submit" class="btn btn-primary m-3" value="Добавить">
                    </form>
                </div>
            </div>
        </div>
        </div>


@endsection
