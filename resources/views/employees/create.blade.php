@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Employee for <b>{{$company->name}}</b>
                    <small><a href="{{URL::previous()}}">Return to employees</a></small>
                </div>
                @php
                    $employee=null;
                @endphp
                <div class="card-body">
                    <form method="post" action="{{route('employees.store')}}">
                        @csrf
                        <input type="hidden" name="company_id" value="{{$company->id}}">
                        @include('employees.inc.form')
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
