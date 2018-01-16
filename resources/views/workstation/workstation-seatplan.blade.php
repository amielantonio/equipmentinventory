{{-- WORKSTATION SEAT PLAN--}}

<div id="seat-plan-main" xmlns="http://www.w3.org/2000/svg">
    <svg id="borders" width="100%" height="100%">
        {{--border line--}}
        <line x1="0" y1="50%" x2="70%" y2="50%" class="border-line"></line>
        <line x1="70%" y1="0" x2="70%" y2="50%" class="border-line"></line>

        {{--inner border line--}}
        <line x1="30%" y1="50%" x2="30%" y2="100%" class="border-line"></line>
        <line x1="45%" y1="50%" x2="45%" y2="100%" class="border-line"></line>

        {{--board room border--}}
        <line x1="0" y1="80%" x2="30%" y2="80%" class="border-line"></line>
        <line x1="30%" y1="75%" x2="45%" y2="75%" class="border-line"></line>

    </svg>

    <div id="workstation-legends">
        <div class="legends-title"><span><i class="fa fa-compass"></i></span> Legends</div>
        <ul class="legends">
            <li><span class="badge badge-light">   </span> - Working</li>
            <li><span class="badge badge-dark">   </span> - Vacant</li>
            <li><span class="badge badge-danger">   </span>  - Broken</li>
            <li><i class="fa fa-desktop"></i> - Desktop</li>
            <li><i class="fa fa-laptop"></i> - Laptop</li>
        </ul>
    </div>

    @foreach( $response as $key => $value )


        <div class="workstation {{ $value['employee_resource']['id'] == "" ? "vacant":"" }} {{ strtolower($value['computer_resource']['status']) }}" style="{{ $value['workstation']['coordinates'] }}" data-workstation-id="{{ $value['workstation']['id'] }}" data-target="#modal-{{ $value['workstation']['id'] }}" data-user="{{ $value['employee_resource']['id'] }}">
            <i class="fa fa-desktop fa-2x"></i>
        </div>

        <div class="modal fade" id="modal-{{ $value['workstation']['id'] }}" tabindex="-1" role="dialog" aria-labelledby="modal-{{ $value['workstation']['id'] }}">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Workstation Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                        <div class="container">

                            {{--Employee Information--}}

                            <h6 class="">Employee Information</h6>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p>
                                        <b>Employee Name: </b>
                                        <a href="#">{{ $value['employee_resource']['first_name']." ".$value['employee_resource']['last_name'] }}</a>
                                    </p>
                                    <p><b>Position: </b>{{ $value['employee_resource']['position'] }}</p>
                                    <p><b>Email: </b>{{ $value['employee_resource']['email'] }}</p>
                                </div>

                                <div class="col-sm-6">
                                    <p>
                                        <b>Computer Name: </b>
                                        <a href="#">{{ $value['computer_resource']['computer_name'] }}</a>
                                    </p>
                                    <p><b>Type: </b>{{ $value['computer_resource']['computer_type'] }}</p>
                                </div>
                            </div>
                            {{--end row--}}

                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <a href="{{ route( 'profiles.show', ['id' => $value['workstation']['id']] ) }}">
                                        <button type="button" class="btn btn-primary btn-block">
                                            View Profile and Diagnostics
                                        </button>
                                    </a>
                                </div>
                                {{--End column--}}
                            </div>
                            {{--End row--}}

                        </div>
                        {{--end container--}}



                    </div>


                </div>
            </div>
        </div>

    @endforeach


    <div class="modal fade" id="add-workstation-modal" tabindex="-1" role="dialog" aria-labelledby="add-workstation-modal">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">
                    <h5>Assign Workstation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{--END MODAL HEADER--}}

                <div class="modal-body">

                    <div class="container">



                    </div>
                    {{--END CONTAINER--}}

                </div>
                {{--END MODAL BODY--}}



            </div>
            {{--END MODAL CONTENT--}}
        </div>
        {{--END MODAL DIALOG--}}
    </div>
    {{--END MODAL--}}

</div>
{{--END SEAT PLAN--}}