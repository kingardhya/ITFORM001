@extends('layout.main')
@section('content')
    <div class="col-md-12">
        <h3 class="font-weight-bold">Development / Modification Request Form</h3>
        <hr>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body ">
                <div class="table-wrap">
                    <table id="datable_1" class="table table-hover w-100 display pb-30">
                        <thead>
                        <tr>
                            <th>BN</th>
                            <th>Name</th>
                            <th>Division</th>
                            <th>Department</th>
                            <th>Application Title</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($application as $app)
                            <tr id="view_request" data-value="{{$app->id}}">
                                <td>{{$app->batch_number}}</td>
                                <td>{{$app->user->name}}</td>
                                <td>{{$app->user->division}}</td>
                                <td>{{$app->user->department}}</td>
                                <td>{{$app->applicationtitle}}</td>
                                <td>{{$app->status}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>BN</th>
                            <th>Name</th>
                            <th>Division</th>
                            <th>Department</th>
                            <th>Application Title</th>
                            <th>Status</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-between">
                            <small>Request By</small>
                            <p class="font-weight-bold" id="requestby">Aulia</p>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between">
                            <small>Badge ID</small>
                            <p class="font-weight-bold" id="badgeid">1</p>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between">
                            <small>Date of Request</small>
                            <p class="font-weight-bold" id="dateofrequest">07/09/2019</p>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between">
                            <small>Application Title</small>
                            <p class="font-weight-bold" id="title">Title</p>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <small>Details</small>
                        </div>
                        <div class="col-md-12">
                            <p class="font-weight-bold" id="details"></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Approve</button>
                </div>
            </div>
        </div>
    </div>
@endsection