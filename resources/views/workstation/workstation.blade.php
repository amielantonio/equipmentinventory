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

                                <div id="seat-plan-main" xmlns="http://www.w3.org/2000/svg">
                                    <svg id="borders" width="100%" height="100%">
                                        {{--border line--}}
                                        <line x1="0" y1="50%" x2="70%" y2="50%" class="border-line"></line>
                                        <line x1="70%" y1="0" x2="70%" y2="50%" class="border-line"></line>

                                         {{--inner border line--}}
                                        <line x1="30%" y1="50%" x2="30%" y2="100%" class="border-line"></line>
                                        <line x1="45%" y1="50%" x2="45%" y2="100%" class="border-line"></line>

                                         {{--board room border--}}
                                        <line x1="0" y1="80%" x2="30%" y2="80%" class="border-line"></line>
                                        <line x1="30%" y1="75%" x2="45%" y2="75%" class="border-line"></line>

                                    </svg>

                                    <div id="workstation-legends">
                                        <div class="legends-title"><span><i class="fa fa-compass"></i></span> Legends</div>
                                        <ul class="legends">
                                            <li><span class="badge badge-light">   </span> - Working</li>
                                            <li><span class="badge badge-warning">   </span> - Vacant</li>
                                            <li><span class="badge badge-danger">   </span>  - Broken</li>
                                            <li><i class="fa fa-desktop"></i> - Desktop</li>
                                            <li><i class="fa fa-laptop"></i> - Laptop</li>
                                        </ul>
                                    </div>

                                    @foreach( $response as $workstation )

                                        <div class="workstation" style="{{ $workstation->coordinates }}" data-workstation-id="{{ $workstation->id }}" data-target="#modal-{{ $workstation->id }}" data-employee="{{$workstation->employee}}" data-computer="{{ $workstation->computer }}">
                                            <i class="fa fa-desktop fa-2x"></i>
                                        </div>

                                        <div class="modal fade" id="modal-{{ $workstation->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-{{ $workstation->id }}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Workstation Information</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">

                                                        {{--<p><b>Employee name: {{ $employee->first_name }}</b></p>--}}

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    @endforeach

                                </div>



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

    <script src="{{ asset('js/seatplanners.js') }}"></script>
    <script src="{{ asset('js/ajax/workstation.js') }}"></script>

@endsection