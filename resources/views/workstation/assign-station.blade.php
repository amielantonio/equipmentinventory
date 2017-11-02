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

        <div class="step-wizard">

            <div class="step-wizard-progress">
                <ul class="step-progress">
                    <li>
                        <a href="#user-pane" id="computer-tab" role="tab">
                            <i class="fa fa-user fa-2x icon"></i>
                            <span>User</span>
                        </a>
                    </li>
                    <li>
                        <a href="#computer-pane">
                            <i class="fa fa-desktop fa-2x icon"></i>
                            <span>Computer</span>
                        </a>
                    </li>
                    <li>
                        <a href="#location-pane">
                            <i class="fa fa-map fa-2x icon"></i>
                            <span>Location</span>
                        </a>
                    </li>
                    <li>
                        <a href="#information-pane">
                            <i class="fa fa-info fa-2x icon"></i>
                            <span>Information</span>
                        </a>
                    </li>
                </ul>
            </div>

            <fieldset class="step-wizard-pane" id="user-pane">
                <div class="fg-form-group">
                    <select name="employee_id" id="employee_id" required="required" class="fg-form-control">
                        @foreach( $employees as $employee )
                            <option value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
                        @endforeach
                    </select>

                    <label for="user_id">Employee <span class="required">*</span></label>
                </div>

                <div class="button-group center">
                    <button type="button" class="btn btn-properties" data-step-button="next">
                        <span>Next</span> <i class="fa fa-chevron-right"></i>
                    </button>
                </div>
                {{-- end button group--}}

            </fieldset>
            {{-- end first fieldset--}}

            <fieldset class="step-wizard-pane" id="computer-pane">
                <div class="fg-form-group">
                    <select name="computer_id" id="computer_id" required="required" class="fg-form-control">
                        @foreach( $computers as $computer )
                            <option value="{{ $computer->id }}">{{ $computer->computer_name}}</option>
                        @endforeach
                    </select>

                    <label for="computer_id">Computer <span class="required">*</span></label>
                </div>


                <div class="button-group center">
                    <button type="button" class="btn btn-properties" data-step-button="previous">
                        <i class="fa fa-chevron-left"></i> <span>Previous</span>
                    </button>
                    <button type="button" class="btn btn-properties" data-step-button="next">
                        <span>Next</span> <i class="fa fa-chevron-right"></i>
                    </button>
                </div>
                {{-- end button group--}}

            </fieldset>
            {{-- end second fieldset--}}

            <fieldset class="step-wizard-pane" id="location-pane">
                <div class="fg-form-group">
                    <input type="text" name="location" id="location" class="fg-form-control" required="required">
                    <label for="location">Location <span class="required">*</span></label>
                </div>

                <div class="button-group center">
                    <button type="button" class="btn btn-properties" data-step-button="previous">
                        <i class="fa fa-chevron-left"></i> <span>Previous</span>
                    </button>
                    <button type="button" class="btn btn-properties" data-step-button="next">
                        <span>Next</span> <i class="fa fa-chevron-right"></i>
                    </button>
                </div>
                {{-- end button group --}}

            </fieldset>

            <fieldset class="step-wizard-pane" id="information-pane">

                <div class="fg-form-group">
                    <select name="network_type" id="network_type" class="fg-form-control">
                        <option>Main Network</option>
                        <option>Backup Network</option>
                    </select>
                    <label for="network_type">Network Type</label>
                </div>


                <div class="fg-form-group">
                    <input type="text" name="ip_address" id="ip_address" class="fg-form-control">
                    <label for="ip_address">IP Address</label>
                </div>

                <div class="fg-form-group">

                    <input type="text" name="mac_address" id="mac_address" class="fg-form-control">
                    <label for="mac_address">Mac Address</label>
                </div>


                <div class="button-group center">
                    <button type="button" class="btn btn-properties" data-step-button="previous">
                        <i class="fa fa-chevron-left"></i> <span>Previous</span>
                    </button>
                    <button type="button" class="btn btn-properties submit">
                        <span>Submit</span>
                    </button>
                </div>
                {{-- end button group--}}

            </fieldset>

        </div>

    </form>

@endsection


@section('ajax-script')

    <script src="{{ asset('js/ajax/workstation.js') }}"></script>

@endsection