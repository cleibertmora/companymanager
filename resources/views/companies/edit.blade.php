@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Company <b>{{$company->name}}</b>
                <small><a href="{{URL::previous()}}">Return to companies</a></small>
            </div>
                <div class="card-body">
                    <form method="post" action="{{route('companies.update', $company->id)}}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        @include('companies.inc.form')
                        <p class="text-center">
                            <button type="submit" class="btn btn-warning">Update</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
