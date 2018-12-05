@extends('layouts.admin')

@section('title')
    Edit Product
@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            Edit Product
                        </div>

                        @if (Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('adminEditProduct', $product->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="thumbnail" class="form-control-label">Thumbnail</label>
                                            <input type="file" name="thumbnail" id="normal-input" class="form-control">
                                        </div>
                                        <img src="{{ asset($product->thumbnail) }}" width="100" alt="">
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" class="form-control-label">Title</label>
                                            <input name="title" value="{{ $product->title }}" id="normal-input" class="form-control" placeholder="Product title">
                                        </div>
                                    </div>

                                </div>
                                
                                <div class="row mt-4">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description" class="form-control-label">Description</label>
                                            <textarea class="form-control" name="description" id="" cols="30" rows="10" Placeholder="Product description">{{ $product->description }}</textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="price" class="form-control-label">Price</label>
                                            <input name="price" value="{{ $product->price }}" id="normal-input" class="form-control" placeholder="10.00">
                                        </div>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-success">Update Product</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection