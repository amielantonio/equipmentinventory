@extends('template.template')


@section('page-content')

    <div class="container">
        <div class="row">

            <div class="col-sm-12">

                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title">@yield('card-title')</h5>
                        @include('layouts.search')


                    </div>

                    <div class="card-body">

                        @yield('form-content')

                    </div>


                </div>
                {{-- end card--}}
            </div>
            {{-- end column--}}
        </div>
        {{-- end row--}}
    </div>
    {{-- end container --}}

    @yield('add-ons')
@endsection