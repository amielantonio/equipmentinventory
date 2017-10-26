@extends('template.template')


@section('page-content')

    <div class="container">
        <div class="row">

            <div class="col-sm-12">

                <div class="card">

                    <div class="card-header with-search-form">
                        {{--<h5 class="card-title">@yield('card-title')</h5>--}}
                        {{--@include('layouts.search')--}}

                        <div class="fg-grid">
                            <div class="grid-8">
                                <h5 class="card-title">@yield('card-title')</h5>
                            </div>
                            <div class="grid-4">
                                @include('layouts.search')
                            </div>
                        </div>

                    </div>

                    <div class="card-body">

                        @yield('collection-content')

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