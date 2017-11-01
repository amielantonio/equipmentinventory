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



        <div class="step-wizard">

            <div class="step-wizard-progress">
                <ul class="step-progress">
                    <li>
                        <a href="#computer-pane" id="computer-tab" role="tab">
                            <i class="fa fa-desktop fa-2x icon"></i>
                            <span>Computer Information</span>
                        </a>
                    </li>
                    <li>
                        <a href="#specs-pane">
                            <i class="fa fa-microchip fa-2x icon"></i>
                            <span>Specs</span>
                        </a>
                    </li>
                    <li>
                        <a href="#peripheral-pane">
                            <i class="fa fa-headphones fa-2x icon"></i>
                            <span>Peripherals</span>
                        </a>
                    </li>
                    <li>
                        <a href="#user-pane">
                            <i class="fa fa-user fa-2x icon"></i>
                            <span>User</span>
                        </a>
                    </li>
                </ul>
            </div>

            <fieldset class="step-wizard-pane" id="computer-pane">
                <div class="fg-form-group">
                    <input type="text" name="computer_name" id="computer_name" required="required" class="fg-form-control">
                    <label for="computer_name">Computer name <span class="required">*</span></label>
                </div>

                <div class="fg-form-group">
                    <input type="text" name="operating_system" id="operating_system" required="required" class="fg-form-control">
                    <label for="operating_system">Operating System <span class="required">*</span></label>
                </div>

                <div class="fg-form-group">
                    <input type="text" name="product_id" id="product_id" required="required" class="fg-form-control">
                    <label for="product_id">Product ID <span class="required">*</span></label>
                </div>

                <div class="fg-form-group">
                    <select class="fg-form-control" id="system_type" name="system_type">
                        <option value="x64">x64 Bit</option>
                        <option value="x32">x32 Bit</option>
                    </select>
                    <label for="system_type">System Type <span class="required">*</span></label>
                </div>

                <div class="button-group center">
                    <button type="button" class="btn btn-properties" data-step-button="next">
                        <span>Next</span> <i class="fa fa-chevron-right"></i>
                    </button>
                </div>
                {{-- end button group--}}

            </fieldset>
            {{-- end first fieldset--}}

            <fieldset class="step-wizard-pane" id="specs-pane">
                <div class="fg-form-group">
                    <input type="text" name="processor" id="processor" class="fg-form-control" required="required">
                    <label for="processor">Processor <span class="required">*</span></label>
                </div>

                <div class="fg-form-group">
                    <input type="text" name="ram" id="ram" class="fg-form-control" required="required">
                    <label for="ram">RAM <span class="required">*</span></label>
                </div>

                <div class="fg-form-group">
                    <input type="text" name="graphics_card" id="graphics_card" class="fg-form-control">
                    <label for="graphics_card">Graphics Card</label>
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

            <fieldset class="step-wizard-pane" id="peripheral-pane">
                <div class="fg-form-group">
                    <input type="text" name="mouse" id="mouse" class="fg-form-control" required="required">
                    <label for="mouse">Mouse <span class="required">*</span></label>
                </div>

                <div class="fg-form-group">
                    <input type="text" name="keyboard" id="keyboard" class="fg-form-control" required="required">
                    <label for="keyboard">Keyboard <span class="required">*</span></label>
                </div>

                <div class="fg-form-group">
                    <input type="text" name="monitor" id="monitor" class="fg-form-control">
                    <label for="monitor">Monitor/s <span class="required">*</span></label>
                </div>

                <div class="fg-form-group">
                    <input type="text" name="webcam" id="webcam" class="fg-form-control">
                    <label for="webcam">Webcam <span class="required">*</span></label>
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

            <fieldset class="step-wizard-pane" id="user-pane">

                <div class="fg-form-group">

                    <input type="text" name="user_id" id="user_id" class="fg-form-control">
                    <label for="user_id">User</label>
                </div>

                <div class="fg-form-group">

                    <select name="status" class="fg-form-control" id="status">
                        <option>Working</option>
                        <option>Broken</option>
                    </select>
                    <label for="status">User</label>
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
        {{-- end step wizard --}}

    </form>

@endsection


@section('ajax-script')

    <script src="{{ asset('js/ajax/computer.js') }}"></script>

@endsection