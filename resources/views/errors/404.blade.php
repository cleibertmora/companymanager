@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p>Return to home</p>
                    
                    <a href="{{route('home')}}" class="mt-4">Click here</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
