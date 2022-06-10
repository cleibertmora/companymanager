@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Companies</div>
                <div class="card-body">
                    <a class="btn btn-success" href="{{route('companies.create')}}">Create New Company</a>
                    <div class="card mt-3">
                        <div class="card-header">Companies list</div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Website</th>
                                    <th scope="col">Email</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($companies as $company)
                                    <tr>
                                        <th scope="row">
                                            @if($company->logo)
                                                @php
                                                    $logo = str_replace("public", "storage", $company->logo)
                                                @endphp
                                                <img width="50px" height="auto" src="{{asset($logo)}}" alt="">
                                            @else
                                                🏢
                                            @endif

                                        </th>
                                        <th>{{$company->name}}</th>
                                        <td>{{$company->address}}</td>
                                        <td>{{$company->website}}</td>
                                        <td>{{$company->email}}</td>
                                        <td>
                                            <a href="{{route('companies.edit', $company->id)}}"><button class="btn-sm btn-light">Edit</button></a>
                                            <button class="btn-sm btn-danger" href="{{ route('companies.destroy', $company->id) }}"
                                                onclick="event.preventDefault();
                                                        document.getElementById('delete-company-{{$company->id}}').submit();">
                                                {{ __('Delete') }}
                                            </button>
                                            
                                            <form id="delete-company-{{$company->id}}" action="{{ route('companies.destroy', $company->id) }}" method="POST">
                                                {{ method_field('DELETE') }}
                                                @csrf
                                            </form>
                                            <a href="{{route('companies.show', $company->id)}}"><button class="btn-sm btn-info" >Employees</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>

                            {{$companies->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
