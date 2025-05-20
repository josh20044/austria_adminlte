@extends('layouts.app')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ __('BSIT Students') }}</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="container">
    <form action="{{ route(name: "student1.post") }}" method="post" class="form">
        @csrf
        <div class="row mb-3 pt-3">
            <div class="col-4">
                <label class="pt-2" for="">Student #</label>
                <input class="form-control form-control-lg" type="text" name="student_id" id="student_id" placeholder="Student #" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="pt-2" for="">First Name</label>
                <input class="form-control form-control-lg" type="text" name="fname" id="fname" placeholder="Fname" required>
            </div>
            <div class="col">
                <label class="pt-2" for="">Middle Name</label>
                <input class="form-control form-control-lg" type="text" name="mname" id="mname" placeholder="Mname" required>
            </div>
            <div class="col">
                <label class="pt-2" for="">Last Name</label>
                <input class="form-control form-control-lg" type="text" name="lname" id="lname" placeholder="Lname" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="pt-2" for="">Address</label>
                <input class="form-control form-control-lg" type="text" name="stud_add" id="stud_add" placeholder="address" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <label class="pt-2" for="">Birthday</label>
                <input class="form-control form-control-lg" type="date" name="stud_DOB" id="stud_DOB" placeholder="DOB" required>
            </div>
        </div>
        <button class="btn btn-primary float-right" type="submit">Submit</button>
    </form>
    <div class="mt-3">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Student #</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Birthday</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $data)
                <tr>
                    <td>{{ $data-> student_id}}</td>
                    <td>{{ $data-> fname}}</td>
                    <td>{{ $data-> mname}}</td>
                    <td>{{ $data-> lname}}</td>
                    <td>{{ $data-> stud_add}}</td>
                    <td>{{ $data-> stud_DOB}}</td>
                    <td>
                        <span class="badge bg-success"><a href="{{ route("student1.edit", $data->id) }}" class="">
                                <h5>Edit</h5>
                            </a></span>
                    </td>
                    <td>

                        <span class="badge bg-danger"><a href="{{ route("student1.delete", $data->id) }}" class="">
                                <h5>Delete</h5>
                            </a></span>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>
@endsection