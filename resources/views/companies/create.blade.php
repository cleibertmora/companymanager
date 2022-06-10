@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Company
                    <small><a href="{{URL::previous()}}">Return to companies</a></small>
                </div>
                @php
                    $company=null;
                @endphp
                <div class="card-body">
                    <form method="post" action="{{route('companies.store')}}" enctype="multipart/form-data">
                        @csrf
                        @include('companies.inc.form')
                        <p class="text-center">
                            <button type="submit" class="btn btn-info">Save</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
