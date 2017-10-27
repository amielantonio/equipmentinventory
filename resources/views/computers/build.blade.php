@extends('layouts.form')

@section('page-title')
    Build Computer
@endsection


@section('page-content')

    <div class="card">

        <div class="card-header">
            {{--<h5 class="card-title">Build New Computer</h5>--}}
        </div>

        <div class="card-body">
            <form method="post">

                <div class="form-wizard">

                    <aside class="form-wizard-navigation">
                        <div class="title mb-20">
                            <span><i class="fa fa-bars"></i></span>
                            <span>Menu</span>
                        </div>
                        <ul class="sidebar">
                            <li class="has-child">
                                <a href="#">
                                    <span>Components</span>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">
                                                <span>Motherboard</span>
                                            </a>

                                        </li>
                                        <li>
                                            <a href="">
                                                <span>CPU</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span>Hard Disk</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span>Memory</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Graphics Card</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Case</span>
                                            </a>
                                        </li>
                                    </ul>
                                </a>
                            </li>
                            {{-- end components --}}
                            <li>
                                <a href="#">
                                    <span>Monitor</span>
                                </a>
                            </li>
                            {{-- end monitor--}}
                            <li>
                                <a href="#">
                                    <span>Keyboard</span>
                                </a>
                            </li>
                            {{-- end keyboard--}}
                            <li>
                                <a href="#">
                                    <span>Mouse</span>
                                </a>
                            </li>
                            {{-- end mouse--}}
                            <li>
                                <a href="#">
                                    <span>Peripherals</span>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">
                                                <span>Headphones</span>
                                            </a>

                                        </li>
                                        <li>
                                            <a href="">
                                                <span>Webcam</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span>Hard Disk</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span>Power supply</span>
                                            </a>
                                        </li>
                                    </ul>
                                </a>
                            </li>
                            {{-- end peripherals --}}

                        </ul>

                    </aside>
                    {{-- end form wizard navigation--}}

                    <div class="form-wizard-window">

                        <fieldset>

                        </fieldset>


                        <fieldset>

                        </fieldset>

                    </div>
                    {{-- end form end wizard window --}}

                </div>
                {{-- end form wizard--}}

                {{--<button type="button" class="btn btn-primary"><span>Build</span></button>--}}

            </form>
            {{-- end form --}}
        </div>
        {{-- end card body --}}
    </div>
    {{-- end card --}}

@endsection


@section('ajax-script')

    <script src="{{ asset('js/ajax/workstation.js') }}"></script>

@endsection