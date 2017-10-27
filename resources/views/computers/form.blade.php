@extends('layouts.form')

@section('page-title')
    Computer Form
@endsection

@section('form-title')
    Computer
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


    <form method="POST" class="fg-form" id="workstation-form">
        {{ csrf_field() }}

        <div class="fg-form-group">
            <input type="text" id="user_id" name="user_id" class="fg-form-control" required="required">
            <label for="user_id">User <span class="required">*</span></label>
        </div>

        <div class="fg-form-group">
            <input type="text" id="computer_id" name="computer_id" class="fg-form-control" required="required">
            <label for="computer_id">Computer <span class="required">*</span></label>
        </div>

        <div class="fg-form-group">
            <input type="text" id="location" name="location" class="fg-form-control" required="required">
            <label for="location">Location <span class="required">*</span></label>
        </div>

        <div class="fg-form-group">
            <input type="text" id="ip_address" name="ip_address" class="fg-form-control" required="required">
            <label for="ip_address">IP Address<span class="required">*</span></label>
        </div>

        <div class="fg-form-group">
            <input type="text" id="mac_address" name="mac_address" class="fg-form-control" required="required">
            <label for="mac_address">Mac Address<span class="required">*</span></label>
        </div>



        <button type="button" class="btn btn-primary submit"><span>Add New</span></button>
        <button type="reset" class="btn btn-warning"><span>Clear</span></button>

    </form>

@endsection


@section('ajax-script')

    <script src="{{ asset('js/ajax/workstation.js') }}"></script>

@endsection