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

                        <a href="{{route('equipment.create')}}" class="btn btn-primary">
                            <span>Add New</span>
                        </a>

                    </div>
                    {{-- end card header--}}

                    <div class="card-body">

                        <div class="row">
                            {{--<table class="table">--}}

                                {{--<thead>--}}
                                {{--<tr>--}}
                                    {{--<th>Employee Name</th>--}}
                                    {{--<th>Email</th>--}}
                                    {{--<th>Contact Information</th>--}}
                                    {{--<th>Position</th>--}}
                                {{--</tr>--}}
                                {{--</thead>--}}

                                {{--<tbody>--}}

                                {{--@foreach( $employees as $employee )--}}
                                    {{--<tr>--}}
                                        {{--<td>{{ $employee->first_name." ".$employee->last_name }}</td>--}}
                                        {{--<td>{{ $employee->email }}</td>--}}
                                        {{--<td>{{ $employee->contact }}</td>--}}
                                        {{--<td>{{ $employee->position }}</td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}

                                {{--</tbody>--}}


                                {{--<tfoot>--}}
                                {{--<tr>--}}
                                    {{--<td></td>--}}
                                {{--</tr>--}}
                                {{--</tfoot>--}}

                            {{--</table>--}}
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