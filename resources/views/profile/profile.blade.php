
@extends('layouts.collection')

@section('page-title')
    Workstations
@endsection

@section('card-title')
    Profile
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

                        @foreach( $response as $key => $value)

                            <div class="mb-20" id="employee-information">
                                <h6 class="mb-20">Employee Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p> <b class="color-info">Employee Name: </b> {{ $value['employee']['first_name']." ".$value['employee']['last_name'] }}</p>
                                        <p> <b class="color-info">Email: </b> {{ $value['employee']['email'] }}</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p> <b class="color-info">Contact Number: </b> {{ $value['employee']['contact'] }}</p>
                                        <p> <b class="color-info">Position: </b> {{ $value['employee']['position'] }}</p>
                                    </div>
                                </div>
                            </div>
                            {{--END EMPLOYEE INFORMATION--}}


                            <div class="mb-20" id="computer-information">
                                <h6 class="mb-20">System Unit Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p data-computer="{{ $value['computer']['id'] }}"> <b class="color-info">Computer Name: </b> <a href="#" class="color-light text-hover-underline">{{ $value['computer']['computer_name'] }} <i class="fa fa-external-link"></i></a></p>
                                        <p> <b class="color-info">Computer Type: </b>{{ $value['computer']['computer_type'] }}</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p> <b class="color-info">Operating System: </b><span class="badge badge-primary">{{ $value['computer']['system_type'] }}</span> {{ $value['computer']['operating_system'] }}</p>
                                        <p> <b class="color-info">Product ID: </b>{{ $value['computer']['product_id'] }}</p>
                                    </div>
                                </div>
                            </div>
                            {{--END COMPUTER INFORMATION--}}

                            <div class="mb-20" id="workstation-information">
                                <h6 class="mb-20">Workstation Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p> <b class="color-info">Team: </b>{{ $value['workstation']['team'] }} <i class="fa fa-external-link"></i></p>
                                        <p> <b class="color-info">Network Type: </b>{{ $value['workstation']['network_type'] }}</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>
                                            <b class="color-info">IP Address: </b>
                                            @if( $value['workstation']['ip_address'] <> null )
                                                {{ $value['workstation']['ip_address'] }}
                                            @else
                                                <a href="#" class="color-success">
                                                    <i class="fa fa-plus-circle"></i>
                                                </a>
                                            @endif
                                        </p>

                                        <p>
                                            <b class="color-info">Mac Address: </b>
                                            @if( $value['workstation']['mac_address'] <> null )
                                                {{ $value['workstation']['mac_address'] }}
                                            @else
                                                <a href="#" class="color-success">
                                                    <i class="fa fa-plus-circle"></i>
                                                </a>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{--END WORKSTATION INFORMATION--}}

                        @endforeach

                            <div class="mb-20" id="diagnostics-information">

                                <h6 class="mb-20">
                                    Diagnostic History
                                    <a href="#" class="color-success" data-toggle="modal" data-target="#diagnostics-add">
                                        <i class="fa fa-plus-circle"></i>
                                    </a>
                                    {{--Toggle Modal Button--}}
                                </h6>

                                <div class="well {{ empty($diagnostics)?"empty":"" }}">

                                    @if( !empty($diagnostics) )
                                        <ul class="no-list bordered diagnostics-list">
                                            @foreach($diagnostics as $key => $value)

                                                <li class="diagnostics">
                                                    <div class="row">
                                                        {{--TITLE--}}
                                                        <div class="col-sm-2">
                                                            <p>
                                                                <span class="color-info">Title: </span>
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <p>{{ $value['diagnostics_title'] }}</p>
                                                        </div>
                                                        {{--END TITLE--}}

                                                        {{--DESCRIPTION--}}
                                                        <div class="col-sm-2">

                                                            <p>
                                                                <span class="color-info">Description:</span>

                                                            </p>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <p>{{ $value['diagnostics_text'] }}</p>
                                                        </div>
                                                        {{--END DESCRIPTION--}}
                                                        {{--DATE--}}
                                                        <div class="col-sm-2">
                                                            <p>
                                                                <span class="color-info">Date:</span>
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <p>{{ \Carbon\Carbon::parse($value['diagnostics_date'])->diffForHumans() }}</p>
                                                        </div>
                                                        {{--END DATE--}}

                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>

                                    @else {{--if there are no history--}}

                                        <p>No Records of Diagnostics Yet</p>

                                    @endif


                                </div>


                            </div>

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

    <div class="modal fade" tabindex="-1" role="dialog" id="diagnostics-add" aria-labelledby="diagnostics-add">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Quick Add: Diagnostics</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{--END MODAL HEADER--}}

                <div class="modal-body">

                    <form class="fg-form dark" method="POST" id="diagnostics-form">

                        <input type="hidden" name="computer_id" value="">

                        <div class="fg-form-group">
                            <input type="text" class="fg-form-control" id="diagnostics-title" name="diagnostics_title">
                            <label for="diagnostics_title">Title</label>
                        </div>

                        <div class="fg-form-group">
                            <input type="text" class="fg-form-control" id="diagnostics_text" name="diagnostics_text">
                            <label for="diagnostics_text">Diagnostics Text/Description</label>
                        </div>

                        <div class="fg-form-group">
                            <input type="text" class="fg-form-control" id="diagnostics_date" name="diagnostics_date">
                            <label for="diagnostics_date">Date</label>
                        </div>


                        <button type="button" class="btn btn-primary submit"><span>Add New</span></button>
                        <button type="reset" class="btn btn-warning"><span>Clear</span></button>

                    </form>
                    {{--END FORM--}}

                </div>
                {{--END MODAL BODY--}}
            </div>
            {{--END MODAL CONTENT--}}
        </div>
        {{--END MODAL DIALOG--}}
    </div>
    {{--END MODAL--}}


@endsection

@section('ajax-script')

    <script src="{{ asset('js/ajax/diagnostics.js') }}"></script>

@endsection