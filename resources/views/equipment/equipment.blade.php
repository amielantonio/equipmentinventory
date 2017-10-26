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

                        <a href="{{route('equipment.create')}}" class="btn btn-primary">
                            <span>Add New</span>
                        </a>

                    </div>
                    {{-- end card header--}}

                    <div class="card-body">

                        <div class="row">
                            <table class="table">

                                <thead>
                                <tr>
                                    <th>Equipment Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Durability</th>
                                    <th>On Hand</th>
                                    <th>Additional Information</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach( $items as $item )
                                    <tr>
                                        <td>{{ $item->equipment_name }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->durability }}</td>
                                        <td>{{ $item->on_hand }}</td>
                                        <td>{{ $item->info }}</td>
                                    </tr>
                                @endforeach

                                </tbody>


                                <tfoot>
                                <tr>
                                    <td></td>
                                </tr>
                                </tfoot>

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