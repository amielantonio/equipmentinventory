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


    <form method="POST" class="fg-form" id="computer-form">
        {{ csrf_field() }}

        <div class="fg-form-group">
            <input type="text" id="computer_name" name="computer_name" class="fg-form-control" required="required">
            <label for="computer_name">Computer Name <span class="required">*</span></label>
        </div>

        <div class="fg-form-group">
            <input type="text" id="computer_parts" name="computer_parts" class="fg-form-control" required="required">
            <label for="computer_parts">Specs <span class="required">*</span></label>
        </div>

        <div class="fg-form-group">
            <input type="text" id="operating_system" name="operating_system" class="fg-form-control" required="required">
            <label for="operating_system">Operating System <span class="required">*</span></label>
        </div>

        <div class="fg-form-group">
            <input type="text" id="product_id" name="product_id" class="fg-form-control" required="required">
            <label for="product_id">Product ID <span class="required">*</span></label>
        </div>

        <div class="fg-form-group">
            <select name="status" id="status" class="fg-form-control">
                <option>Working</option>
                <option>For Repair</option>
                <option>Broken</option>
            </select>
            <label for="status">Status <span class="required">*</span></label>
        </div>

        <button type="button" class="btn btn-primary submit"><span>Add New</span></button>
        <button type="reset" class="btn btn-warning"><span>Clear</span></button>

    </form>

@endsection


@section('ajax-script')

    <script src="{{ asset('js/ajax/computer.js') }}"></script>

@endsection