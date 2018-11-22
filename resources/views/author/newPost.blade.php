@extends('layouts.admin')

@section('title')
    New post
@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            New Post
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
                        <form action="{{ route('createPost') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" class="form-control-label">Title</label>
                                            <input name="title" id="normal-input" class="form-control" placeholder="Post title">
                                        </div>
                                    </div>

                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="content" class="form-control-label">Content</label>
                                            <textarea class="form-control" name="content" id="" cols="30" rows="10" Placeholder="Post content"></textarea>
                                        </div>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-success">Create Post</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>

            {{-- <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            Input Groups
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Text addon</label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Recipient's username">
                                        <div class="input-group-append">
                                            <span class="input-group-text">@</span>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Icon addon</label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Email address" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Card Number">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-hashtag"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Sizes</label>

                                    <div class="input-group input-group-lg mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
                                    </div>

                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <label for="input-group-1">Input Group with Button</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                                        </span>
                                        <input type="text" id="input-group-1" name="input1-group2" class="form-control" placeholder="Username">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="input-group-2">Input Group with Button</label>
                                    <div class="input-group">
                                        <input type="text" id="input-group-2" name="input1-group2" class="form-control" placeholder="Username">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="input-group-3">Input Group with Dropdown</label>
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action
                                                <span class="caret"></span>
                                            </button>

                                            <div class="dropdown-menu" x-placement="bottom-start">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>

                                        <input type="text" id="input-group-3" name="input1-group3" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            Switches
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="toggle-switch">
                                        <label for="ts1" class="ts-label">Toggle Swith Default</label>
                                        <input id="ts1" type="checkbox" hidden="hidden">
                                        <label for="ts1" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="toggle-switch" data-ts-color="primary">
                                        <label for="ts2" class="ts-label">Primary Toggle Switch</label>
                                        <input id="ts2" type="checkbox" hidden="hidden">
                                        <label for="ts2" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="toggle-switch" data-ts-color="secondary">
                                        <label for="ts3" class="ts-label">Secondary Toggle Switch</label>
                                        <input id="ts3" type="checkbox" hidden="hidden">
                                        <label for="ts3" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="toggle-switch" data-ts-color="success">
                                        <label for="ts4" class="ts-label">Success Toggle Switch</label>
                                        <input id="ts4" type="checkbox" hidden="hidden">
                                        <label for="ts4" class="ts-helper"></label>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row mt-4">
                                <div class="col-md-3">
                                    <div class="toggle-switch" data-ts-color="info">
                                        <label for="ts5" class="ts-label">Info Swith Default</label>
                                        <input id="ts5" type="checkbox" hidden="hidden">
                                        <label for="ts5" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="toggle-switch" data-ts-color="warning">
                                        <label for="ts6" class="ts-label">Warning Toggle Switch</label>
                                        <input id="ts6" type="checkbox" hidden="hidden">
                                        <label for="ts6" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="toggle-switch" data-ts-color="danger">
                                        <label for="ts7" class="ts-label">Danger Toggle Switch</label>
                                        <input id="ts7" type="checkbox" hidden="hidden">
                                        <label for="ts7" class="ts-helper"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

@endsection