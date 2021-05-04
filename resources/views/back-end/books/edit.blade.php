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
                        <h1 class="m-0">Sua san pham </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <form method="post" action="{{route('update.book',$book->id)}} " enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input value="{{$book->name}}" type="text" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Img</label>
                        <div class="input-group">
                            <div>
                                <input value="{{$book->img}}" type="file" class="custom-file-input" name="img">
                                <img style="width: 200px" src="{{asset('storage/'.$book->img)}}" alt="">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Desc</label>
                            <input value="{{$book->desc}}" type="text" class="form-control" id="exampleInputPassword1"
                                   name="desc">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Status</label>
                            <select name="status_id">
                                <option>{{$book->status->name}}</option>
                                @foreach($status as $statu)
                                    <option @if($statu->id === $book->status_id)
                                            selected
                                            @endif
                                            value="{{$statu->id}}">{{$statu->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Auth</label>
                            <select name="auth_id">
                                <option>{{$book->auth->auth_name}}</option>
                                @foreach($auths as $auth)
                                    <option @if($auth->id === $book->auth_id)
                                            selected
                                            @endif
                                            value="{{$auth->id}}">{{$auth->auth_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Category</label>
                            <select name="category_id">
                                <option>{{$book->category->category_name}}</option>
                                @foreach($categorys as $category)
                                    <option
                                            @if($category->id === $book->category_id)
                                            selected
                                            @endif
                                            value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Library</label>
                        <select name="product_id">
                            <option>{{$book->product->name}}</option>
                            @foreach($products as $product)
                                <option
                                        @if($product->id === $book->product_id)
                                        selected
                                        @endif
                                        value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

