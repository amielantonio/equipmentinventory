@extends('layouts.collection')


@section('page-title')
    Workstations
@endsection

@section('card-title')
    Workstations
@endsection

@section('page-content')


    <div class="container">
        <div class="row">

            <div class="col-sm-12">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title">@yield('card-title')</h5>

                    </div>
                    {{-- end card header--}}

                    <div class="card-body">

                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#table-view" role="tab" aria-controls="pills-home" aria-selected="true">Table View</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#seat-view" role="tab" aria-controls="pills-profile" aria-selected="false">Seat Plan View</a>
                            </li>
                        </ul>
                        {{-- end navigation--}}

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade " id="table-view" role="tabpanel" aria-labelledby="pills-home-tab">

                                <table id="workstation-table">

                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User</th>
                                            <th>Computer</th>
                                            <th>Location</th>
                                            <th>Network Type</th>
                                            <th>Ip Address</th>
                                            <th>Mac Address</th>
                                            <th>Diagnostics History</th>
                                        </tr>
                                    </thead>

                                </table>

                            </div>
                            {{-- end table view--}}
                            <div class="tab-pane fade show active" id="seat-view" role="tabpanel" aria-labelledby="pills-profile-tab">


                                {{-- WORKSTATION SEAT PLAN--}}
                                <svg id="seat-plan-main" xmlns="http://www.w3.org/2000/svg">
                                    <g id="outsource-workers">
                                        <title>Outsourced Workers Seat Plan</title>
                                        <rect id="svg_4" y="200" x="277.22217" stroke-width="1.5" fill="#18ffff" class="station"/>
                                        <rect id="svg_6" y="200" x="319.444408" stroke-width="1.5" fill="#18ffff" class="station"/>
                                        <rect id="svg_7" y="200" x="363.888869" stroke-width="1.5" fill="#18ffff" class="station"/>
                                        <rect id="svg_8" y="200" x="410.555553" stroke-width="1.5" fill="#18ffff" class="station"/>
                                        <rect id="svg_9" y="245" x="277.22217" stroke-width="1.5" fill="#18ffff" class="station"/>
                                        <rect id="svg_10" y="245" x="318.333296" stroke-width="1.5" fill="#18ffff" class="station"/>
                                        <rect id="svg_11" y="245" x="362.777757" stroke-width="1.5" fill="#18ffff" class="station"/>
                                        <rect id="svg_12" y="245" x="411.72485" stroke-width="1.5" fill="#18ffff" class="station"/>
                                        <rect id="svg_13" y="290" x="277.22217" stroke-width="1.5" fill="#18ffff" class="station"/>
                                        <rect id="svg_14" y="290" x="318.800884" stroke-width="1.5" fill="#18ffff" class="station"/>
                                        <rect id="svg_15" y="290" x="362.484848" stroke-width="1.5" fill="#18ffff" class="station"/>
                                        <rect id="svg_16" y="290" x="410.905629" stroke-width="1.5" fill="#18ffff" class="station"/>
                                    </g>

                                    <g id="outsource-workers" x="25" y="200">
                                        <title>Outsourced Workers Seat Plan</title>
                                        <rect id="svg_4" stroke-width="1.5" fill="#18ffff" class="station"/>
                                    </g>
                                </svg>

                            </div>
                            {{-- end other view--}}
                        </div>
                        {{-- end tab content --}}

                    </div>
                    {{-- end card body--}}


                </div>
                {{-- end card--}}
            </div>
            {{-- end column--}}
        </div>
        {{-- end row--}}
    </div>
    {{-- end container --}}


@endsection

@section('ajax-script')

    <script src="{{ asset('js/ajax/workstation.js') }}"></script>

@endsection