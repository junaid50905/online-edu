@extends('student.layouts.master')


@section('main_content')
    <div class="row">
        <div class="col-md-10">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="icon rounded-circle bg-primary d-flex justify-content-center align-items-center"
                                    style="height: 50px; width: 50px;"><i class="mdi mdi-clipboard-text text-light"
                                        style="font-size: 25px"></i>
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="title">
                                    <h3><span>Assignment: </span> Title of assignment</h3>
                                    <p>May 09</p>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card border p-2 m-2" style="width: 13rem;">
                                    <img src="{{ asset('ui/student') }}/images/pdf.png" class="card-img-top border"
                                        alt="...">
                                    <div class="card-body">
                                        <h5>lecture-on-web-design-and-development.pdf</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border p-2 m-2" style="width: 13rem;">
                                    <img src="{{ asset('ui/student') }}/images/pdf.png" class="card-img-top border"
                                        alt="...">
                                    <div class="card-body">
                                        <h5>lecture.pdf</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border p-2 m-2" style="width: 13rem;">
                                    <img src="{{ asset('ui/student') }}/images/pdf.png" class="card-img-top border"
                                        alt="...">
                                    <div class="card-body">
                                        <h5>lecture.pdf</h5>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
