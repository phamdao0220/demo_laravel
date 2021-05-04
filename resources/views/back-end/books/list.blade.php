@extends('layouts.index')
@section('title')
    <title>Trang chu</title>
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Trang sach</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active"><a href="{{route('list.book')}}">sach</a></li>
                            <li class="breadcrumb-item"><a href="{{route('add.book')}}">Add</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Img</th>
                    <th>Desc</th>
                    <th>Status</th>
                    <th>Auth</th>
                    <th>Category</th>
                    <th>Library</th>
                    <th colspan="2">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Img</th>
                    <th>Desc</th>
                    <th>Status</th>
                    <th>Auth</th>
                    <th>Category</th>
                    <th>Library</th>
                    <th colspan="2">Action</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($books as $key=>$book)
                    <tr>
                        <th>{{$key+1}}</th>
                        <td>{{$book->name}}</td>
                        <td><img width="100px" src="{{asset('storage/'.$book->img)}}"></td>
                        <td>{{$book->desc}}</td>
                        <td>{{$book->status->name}}</td>
                        <td>{{$book->auth->auth_name}}</td>
                        <td>{{$book->category->category_name}}</td>
                        <td>{{$book->product->name}}</td>

                        <td>
                            <a href="{{route('edit.book',$book->id)}}"><i class="fas fa-edit"></i></a>
                        </td>
                        <td>

                                <a onclick="return confirm('ban co chac muon xoa {{$book->name}} khong?? ')"
                                   href="{{route('delete.book',$book->id)}}">
                                    <i class="fa fa-trash" aria-hidden="true"></i></a>


                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
