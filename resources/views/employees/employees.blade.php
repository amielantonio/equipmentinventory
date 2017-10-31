@extends('layouts.collection')


@section('page-title')
    Employees
@endsection

@section('card-title')
    Show All Employees <a href="{{ route('employees.create') }}" class="color-light"><i class="fa fa-plus-circle"></i></a>
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
                            <table id="employee-table">

                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Contact Information</th>
                                    <th>Position</th>
                                    <th>Assigned Computer</th>
                                </tr>
                                </thead>

                                <tbody>

                                </tbody>

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

    <div class="modal fade" id="specs-modal" tabindex="-1" role="dialog" aria-labelledby="specs-modal">
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



@endsection

@section('ajax-script')

    <script src="{{ asset('js/ajax/employee.js') }}"></script>

@endsection