@extends('layouts.collection')


@section('page-title')
    Employees
@endsection

@section('card-title')
    Employees
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




@endsection

@section('ajax-script')

    <script src="{{ asset('js/ajax/employee.js') }}"></script>

@endsection