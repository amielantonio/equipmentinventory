@extends('layouts.collection')


@section('page-title')
    Equipment
@endsection

@section('card-title')
    Equipment Inventory
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
                            <table id="equipment-table">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Equipment Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Durability</th>
                                        <th>On Hand</th>
                                        <th>Additional Information</th>
                                    </tr>
                                </thead>

                                {{--<tbody>--}}

                                {{--</tbody>--}}

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

    <script src="{{ asset('js/ajax/equipment.js') }}"></script>

@endsection