@extends('layouts.layout')

@section('title', 'Home Page')

@section('content')

<span>This is login page</span>



<div class="container-fluid landing-page">
    <div class="row w-100">
        <div class="col-md-6 left-side">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
        </div>
        <div class="col-md-6 right-side">
            <form class="login-form">
                <h2 class="text-center mb-4">Login</h2>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>
</div>




@endsection