@extends('layouts.app')

@section('title', 'Edit Employee')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('employees.index') }}">Employees</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <form action="{{ route('employees.update', $employee) }}" method="POST">
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-lg-12">
                    @include('utils.alerts')
                    <div class="form-group">
                        <button class="btn btn-primary">Update Employee <i class="bi bi-check"></i></button>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="employees_name">Employee Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="employees_name" required value="{{ $employee->employees_name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="employees_email">Employee Email <span class="text-danger">*</span></label>
                                        <input type="employees_email" class="form-control" name="employees_email" required value="{{ $employee->employees_email }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="employees_phone">Employee Phone <span class="text-danger">*</span></label>
                                        <input type="employees_phone" class="form-control" name="employees_phone" required value="{{ $employee->employees_phone }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="city">City <span class="text-danger">*</span></label>
                                        <input type="city" class="form-control" name="city" required value="{{ $employee->city }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="country">Country <span class="text-danger">*</span></label>
                                        <input type="coutry" class="form-control" name="country" required value="{{ $employee->country }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="address">Address <span class="text-danger">*</span></label>
                                        <input type="address" class="form-control" name="address" required value="{{ $employee->address }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="jobdesk">Jobdesk <span class="text-danger">*</span></label>
                                        <input type="jobdesk" class="form-control" name="jobdesk" required value="{{ $employee->jobdesk }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

