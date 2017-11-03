@extends('layouts.form')

@section('page-title')
    Employee Form
@endsection

@section('form-title')
    Employee
@endsection

@section('form-content')

    <div class="notification">
        <div class="alert alert-primary alert-dismissable" role="alert">
            <span id="message"></span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>


    <form method="POST" class="fg-form" id="employee-form">
        {{ csrf_field() }}

        <div class="fg-form-group">
            <input type="text" id="first_name" name="first_name" class="fg-form-control" required="required">
            <label for="first_name">First Name <span class="required">*</span></label>
        </div>

        <div class="fg-form-group">
            <input type="text" id="last_name" name="last_name" class="fg-form-control" required="required">
            <label for="last_name">Last Name <span class="required">*</span></label>
        </div>

        <div class="fg-form-group">
            <input type="text" id="email" name="email" class="fg-form-control" required="required">
            <label for="email">Email <span class="required">*</span></label>
        </div>

        <div class="fg-form-group">
            <input type="text" id="contact" name="contact" class="fg-form-control" required="required">
            <label for="contact">Contact<span class="required">*</span></label>
        </div>

        <div class="fg-form-group">
            <input type="text" id="position" name="position" class="fg-form-control" required="required">
            <label for="position">Position<span class="required">*</span></label>
        </div>


        <div class="fg-form-group">
            <select id="computer_id" name="computer_id" class="fg-form-control">
                @foreach( $computers as $computer )
                    <option value="{{ $computer->id }}">{{ $computer->computer_name }}</option>
                @endforeach
            </select>
            <label for="computer_id">Computer Unit</label>
        </div>

        <button type="button" class="btn btn-primary submit"><span>Add New</span></button>
        <button type="reset" class="btn btn-warning"><span>Clear</span></button>

    </form>

@endsection


@section('ajax-script')

    <script src="{{ asset('js/ajax/employee.js') }}"></script>

@endsection