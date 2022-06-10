@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{trans('home.title')}}
                <span class="float-right">
                    <a href="lang/en"> English</a> | 
                    <a href="lang/es"> Spanish</a>
                </span>
                </div>
                <div class="card-body">
                    <p>{{trans('home.welcome')}}</p>
                    
                    <a href="{{route('companies.index')}}" class="mt-4">🏢 {{trans('home.action')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
