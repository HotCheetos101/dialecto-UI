@extends('layouts.layout')

@section('title', 'Home Page')

@include('component.header')

@include('component.sidebar')

@section('content')


<!-- <div class="container-fluid main-container">


    <div class=" row justify-content-center">
        <div class="col-md-10 col-lg-8"> 
            <div class="custom-container">
                <h1 class="text-center">Your Content Here</h1>
                <p>Additional content goes here...</p>
            </div>
        </div>
    </div>
</div> -->

<div class="container-fluid main-container">
    <div class="row">
        <div class="col-fixed">
            <div class="custom-container">
                <h1 class="text-center">Your Content Here</h1>
                <p>Additional content goes here...</p>
            </div>
        </div>
        <div class="col">
            <!-- Other content or empty div to adjust the layout -->
        </div>
    </div>
</div>



@endsection