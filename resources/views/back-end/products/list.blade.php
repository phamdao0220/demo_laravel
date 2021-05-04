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
                        <h1 class="m-0">Trang chu</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active"><a href="{{route('list.product')}}">danh sach</a></li>
                            <li class="breadcrumb-item"><a href="{{route('add.product')}}"
                                >Add</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Avatar</th>
                        <th colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Avatar</th>
                        <th colspan="2">Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($products as $key=>$product)
                        <tr>
                            <th>{{$key+1}}</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->address}}</td>
                            <td>{{$product->phone}}</td>
                            <td><img width="100px" src="{{asset('storage/'.$product->avatar)}}"></td>
                            <td>
                                <a href="{{route('edit.product',$product->id)}}"><i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a onclick="return confirm('ban co chac muon xoa {{$product->name}} khong?? ')"
                                   href="{{route('delete.product',$product->id)}}">
                                    <i class="fa fa-trash" aria-hidden="true"></i></a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
