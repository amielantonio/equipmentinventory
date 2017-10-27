@extends('layouts.collection')


@section('page-title')
    Categories
@endsection

@section('page-content')


    <div class="container">
        <div class="row">

            <div class="col-sm-12">



                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title"> Categories </h5>

                    </div>
                    {{-- end card header--}}

                    <div class="card-body">

                        <div class="notification">
                            <div class="alert alert-primary alert-dismissable" role="alert">
                                <span id="message"></span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>

                        <div class="fg-grid">

                            <div class="grid-8 plr-20 br-1-w">

                                <h5 class="mb-30">Category List</h5>

                                <table class="table" id="category-table">

                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @foreach( $categories as $category )
                                        <tr>
                                            <td>{{ $category->category_name }}</td>
                                            <td>{{ $category->category_description }}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>

                                </table>

                            </div>
                            {{-- end grid --}}

                            <div class="grid-4 plr-20">

                                <h5 class="mb-30">Add New Category</h5>

                                <form method="post" class="fg-form" id="category-form">
                                    {{ csrf_field() }}

                                    <div class="fg-form-group">
                                        <input type="text" id="category_name" name="category_name" class="fg-form-control" required="required">
                                        <label for="category_name">Category Name <span class="required">*</span></label>
                                    </div>

                                    <div class="fg-form-group">
                                        <input type="text" id="category_description" name="category_description" class="fg-form-control">
                                        <label for="category_description">Description</label>
                                    </div>

                                    <button type="button" class="btn btn-primary submit"><span>Add New</span></button>
                                    <button type="reset" class="btn btn-warning"><span>Clear</span></button>

                                </form>

                            </div>
                            {{-- end grid --}}

                        </div>
                        {{-- end fg-grid --}}

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

    <script src="{{ asset('js/ajax/category.js') }}"></script>

@endsection