@extends('layouts.app')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Edit info') }}</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="container">
    <form action="" method="POST" class="form">
    @csrf
    @method('PUT')
        <div class="row mb-3 pt-3">
            <div class="col-4">
                <label class="pt-2" for="">Student #</label>
                <input class="form-control form-control-lg" type="text" name="student_id" id="student_id" placeholder="Student #" value="{{ $student -> student_id }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="pt-2" for="">First Name</label>
                <input class="form-control form-control-lg" type="text" name="fname" id="fname" placeholder="Fname" value="{{ $student -> fname }}" required>
            </div>
            <div class="col">
                <label class="pt-2" for="">Middle Name</label>
                <input class="form-control form-control-lg" type="text" name="mname" id="mname" placeholder="Mname" value="{{ $student -> mname }}" required>
            </div>
            <div class="col">
                <label class="pt-2" for="">Last Name</label>
                <input class="form-control form-control-lg" type="text" name="lname" id="lname" placeholder="Lname" value="{{ $student -> lname }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="pt-2" for="">Address</label>
                <input class="form-control form-control-lg" type="text" name="stud_add" id="stud_add" placeholder="address" value="{{ $student -> stud_add }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <label class="pt-2" for="">Birthday</label>
                <input class="form-control form-control-lg" type="date" name="stud_DOB" id="stud_DOB" placeholder="DOB" value="{{ $student -> stud_DOB }}" required>
            </div>
        </div>
        <button class="btn btn-primary float-right" type="submit">Submit</button>
    </form>

</div>
@endsection