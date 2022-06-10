@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employees of <b>{{$company->name}}</b>
            </div>
            <div class="card-body">
            <a class="btn btn-success mb-4" href="{{route('employees.create', ["company" => "$company->id"])}}">Create New Employee</a>
            
                @if($company->employees->isNotEmpty())
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($company->employees as $employee)
                            <tr>
                                <td>{{$employee->fullName}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->phone}}</td>
                                <td>
                                    <a href="{{route('employees.edit', $employee->id)}}"><button class="btn-sm btn-light">Edit</button></a>
                                    <button class="btn-sm btn-danger" href="{{ route('employees.destroy', $employee->id) }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('delete-employee-{{$employee->id}}').submit();">
                                        {{ __('Delete') }}
                                    </button>
                                    
                                    <form id="delete-employee-{{$employee->id}}" action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                                        {{ method_field('DELETE') }}
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                @else
                    <p>No employees registered for this company at the moment.</p>
                @endif
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
