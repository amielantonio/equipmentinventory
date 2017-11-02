@extends('layouts.form')

@section('page-title')
    Workstation Form
@endsection

@section('form-title')
    Workstation
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


    </form>

@endsection


@section('ajax-script')

    <script src="{{ asset('js/ajax/workstation.js') }}"></script>

@endsection