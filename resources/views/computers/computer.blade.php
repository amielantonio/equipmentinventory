@extends('layouts.collection')


@section('page-title')
    Computers
@endsection

@section('card-title')
    Computers
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
                                        <th>Specs</th>
                                        <th>Operating System</th>
                                        <th>Product ID</th>
                                        <th>Status</th>
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

@endsection

@section('ajax-script')

    <script src="{{ asset('js/ajax/computer.js') }}"></script>

@endsection