@extends('admin.layouts.main-spark')
@section('content')
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                Tables
            </h1>
        </div>
        <div class="row">
            <div class="col-1 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Category Table</h5>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->title}}</td>
                                <td class="table-action">
                                    <a href="{{route('admin.category.edit',$category->id)}}"><i
                                            class="align-middle fas fa-fw fa-pen"></i></a>
                                </td>
                                <td>
                                    <form action="{{route('admin.category.delete',$category->id)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="border-0 bg-white">
                                            <i class="fas fa-trash text-danger" role="button"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
@endsection
