@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12 col-md-2">
                            <div class="container">
                             
                                <div class="menu">
                                  <a class="dropdown-item" href="#">Home</a>
                                  <a class="dropdown-item" href="#">Perfil</a>
                                  <a class="dropdown-item active" href="#">Friends</a>
                                  <a class="dropdown-item" href="#">Setting</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8 bg-primary">
                           @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                           @endif
                        </div>

                        <div class="col-sm-12 col-md-2">
                            <div class="container">
                             
                                <div class="menu">
                                  <a class="dropdown-item" href="#">Home</a>
                                  <a class="dropdown-item" href="#">Perfil</a>
                                  <a class="dropdown-item active" href="#">Friends</a>
                                  <a class="dropdown-item" href="#">Setting</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
