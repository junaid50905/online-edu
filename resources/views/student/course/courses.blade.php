@extends('student.layouts.master')

@section('main_content')
    <div class="container">
        <h2>Courses</h2>
        <div class="row flex-grow">
            <div class="col-12 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                        <div class="table-responsive  mt-1">
                            <table class="table select-table">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Teacher</th>
                                        <th>Course Name</th>
                                        <th>Total enrolled</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="d-flex ">
                                                <img src="{{ asset('ui/student') }}/images/faces/face1.jpg" alt="">
                                                <div>
                                                    <h6>Brandon Washington</h6>
                                                    <p>Lecturer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6><a href="{{ route('student.course') }}">Artificial Intelligence & Sessional</a></h6>
                                            <p>CSEC_343 & CSEC_344</p>
                                        </td>
                                        <td>23</td>
                                        <td>
                                            <div class="badge badge-opacity-warning">In progress</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="d-flex ">
                                                <img src="{{ asset('ui/student') }}/images/faces/face2.jpg" alt="">
                                                <div>
                                                    <h6>Brandon Washington</h6>
                                                    <p>Lecturer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6><a href="{{ route('student.course') }}">Management and Organizational Behavior</a></h6>
                                            <p>CSEC_354</p>
                                        </td>
                                        <td>24</td>
                                        <td>
                                            <div class="badge badge-opacity-warning">In progress</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="d-flex ">
                                                <img src="{{ asset('ui/student') }}/images/faces/face3.jpg" alt="">
                                                <div>
                                                    <h6>Uttam Kumar</h6>
                                                    <p>Lecturer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6><a href="{{ route('student.course') }}">Internet Programming & sessional </a></h6>
                                            <p>CSEC_367 & CSEC_368</p>
                                        </td>
                                        <td>24</td>
                                        <td>
                                            <div class="badge badge-opacity-warning">In progress</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="d-flex ">
                                                <img src="{{ asset('ui/student') }}/images/faces/face4.jpg" alt="">
                                                <div>
                                                    <h6>Brandon Washington</h6>
                                                    <p>Lecturer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6><a href="{{ route('student.course') }}">Microprocessor</a></h6>
                                            <p>CSEC_323</p>
                                        </td>
                                        <td>20</td>
                                        <td>
                                            <div class="badge badge-opacity-success">Completed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <div class="d-flex ">
                                                <img src="{{ asset('ui/student') }}/images/faces/face5.jpg" alt="">
                                                <div>
                                                    <h6>Sanju Sultana</h6>
                                                    <p>Lecturer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6><a href="{{ route('student.course') }}">Peripheral & Interfacing</a></h6>
                                            <p>CSEC_321</p>
                                        </td>
                                        <td>21</td>
                                        <td>
                                            <div class="badge badge-opacity-success">Completed</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
