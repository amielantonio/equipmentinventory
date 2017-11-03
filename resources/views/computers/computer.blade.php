@extends('layouts.collection')


@section('page-title')
    Computers
@endsection

@section('card-title')
    Show All Computers
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

                        <div class="row">
                            <table id="computer-table">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Computer Name</th>
                                        <th>Operating System</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
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

    {{-- Operating System Modal--}}
    <div class="modal fade" id="os-modal" tabindex="-1" role="dialog" aria-labelledby="os-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Operating System</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-5">
                                <p class=font-weight-bold>Operating System: </p>
                                <p class=font-weight-bold>Product Key: </p>
                            </div>
                            <div class="col-sm-7">
                                <p id="os-value"></p>
                                <p id="os-id"></p>
                            </div>

                        </div>
                    </div>
                </div>
                {{--end modal body--}}
            </div>
            {{--end modal content--}}
        </div>
        {{-- end modal dialog--}}
    </div>
    {{-- end Operating System Modal--}}

    {{-- Specs Modal--}}
    <div class="modal fade" id="specs-modal" tabindex="-1" role="dialog" aria-labelledby="specs-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Specs</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    This here is the specs
                </div>
            </div>
        </div>
    </div>
    {{-- End Specs modal--}}

    {{-- Peripherals Moda --}}
    <div class="modal fade" id="peripherals-modal" tabindex="-1" role="dialog" aria-labelledby="peripherals-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Computer Specs</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    This here is the specs
                </div>
            </div>
        </div>
    </div>
    {{-- end Peripherals Modal--}}

@endsection

@section('ajax-script')

    <script src="{{ asset('js/ajax/computer.js') }}"></script>

@endsection