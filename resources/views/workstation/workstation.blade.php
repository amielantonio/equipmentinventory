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
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#table-view" role="tab" aria-controls="pills-home" aria-selected="true">Table View</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#seat-view" role="tab" aria-controls="pills-profile" aria-selected="false">Seat Plan View</a>
                            </li>
                        </ul>
                        {{-- end navigation--}}

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="table-view" role="tabpanel" aria-labelledby="pills-home-tab">

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
                            <div class="tab-pane fade" id="seat-view" role="tabpanel" aria-labelledby="pills-profile-tab">

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