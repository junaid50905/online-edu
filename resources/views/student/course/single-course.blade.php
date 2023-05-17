@extends('student.layouts.master')


@section('main_content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <!--stream button-->
                        <button class="nav-link active" id="nav-stream-tab" data-bs-toggle="tab" data-bs-target="#nav-stream"
                            type="button" role="tab" aria-controls="nav-stream" aria-selected="true">Stream</button>
                        <!--documents button-->
                        <button class="nav-link" id="nav-documents-tab" data-bs-toggle="tab" data-bs-target="#nav-documents"
                            type="button" role="tab" aria-controls="nav-documents"
                            aria-selected="false">Documents</button>
                        <!--assignments button-->
                        <button class="nav-link" id="nav-assignments-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-assignments" type="button" role="tab" aria-controls="nav-assignments"
                            aria-selected="false">Assignments</button>
                        <!--people button-->
                        <button class="nav-link" id="nav-people-tab" data-bs-toggle="tab" data-bs-target="#nav-people"
                            type="button" role="tab" aria-controls="nav-people" aria-selected="false">People</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <!--stream-->
                    <div class="tab-pane fade show active" id="nav-stream" role="tabpanel" aria-labelledby="nav-stream-tab"
                        tabindex="0">
                        <a href="{{ route('student.course.detailed') }}" class="text-decoration-none">
                            <div class="p-2 d-flex rounded my-2" style="background-color: rgb(230, 230, 230);">
                                <div class="icon rounded-circle bg-primary d-flex justify-content-center align-items-center"
                                    style="height: 50px; width: 50px;"><i class="mdi mdi-clipboard-text text-light"
                                        style="font-size: 25px"></i></div>
                                <div class="title mx-2 mt-1">
                                    <h4> <span>Assignment: </span> Final lab test will be held on 17/05/23, everybody should
                                        come and attend the exam</h4>
                                    <p>May 9</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('student.course.detailed') }}" class="text-decoration-none">
                            <div class="p-2 d-flex rounded my-2" style="background-color: rgb(230, 230, 230);">
                                <div class="icon rounded-circle bg-primary d-flex justify-content-center align-items-center"
                                    style="height: 50px; width: 50px;"><i class="mdi mdi-presentation text-light"
                                        style="font-size: 25px"></i></div>
                                <div class="title mx-2 mt-1">
                                    <h4> <span>Lecture: </span> Lecture 06</h4>
                                    <p>May 05</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('student.course.detailed') }}" class="text-decoration-none">
                            <div class="p-2 d-flex rounded my-2" style="background-color: rgb(230, 230, 230);">
                                <div class="icon rounded-circle bg-primary d-flex justify-content-center align-items-center"
                                    style="height: 50px; width: 50px;"><i class="mdi mdi-clipboard-text text-light"
                                        style="font-size: 25px"></i></div>
                                <div class="title mx-2 mt-1">
                                    <h4> <span>Exam: </span>Artificial Intelligence Mid Exam</h4>
                                    <p>May 2</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--documents-->
                    <div class="tab-pane fade" id="nav-documents" role="tabpanel" aria-labelledby="nav-documents-tab"
                        tabindex="0">
                        <a href="{{ route('student.course.detailed') }}" class="text-decoration-none">
                            <div class="p-2 d-flex rounded my-2" style="background-color: rgb(230, 230, 230);">
                                <div class="icon rounded-circle bg-primary d-flex justify-content-center align-items-center"
                                    style="height: 50px; width: 50px;"><i class="mdi mdi-presentation text-light"
                                        style="font-size: 25px"></i></div>
                                <div class="title mx-2 mt-1">
                                    <h4> <span>Lecture: </span> Lecture 03</h4>
                                    <p>May 08</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('student.course.detailed') }}" class="text-decoration-none">
                            <div class="p-2 d-flex rounded my-2" style="background-color: rgb(230, 230, 230);">
                                <div class="icon rounded-circle bg-primary d-flex justify-content-center align-items-center"
                                    style="height: 50px; width: 50px;"><i class="mdi mdi-presentation text-light"
                                        style="font-size: 25px"></i></div>
                                <div class="title mx-2 mt-1">
                                    <h4> <span>Lecture: </span> Lecture 02</h4>
                                    <p>May 07</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('student.course.detailed') }}" class="text-decoration-none">
                            <div class="p-2 d-flex rounded my-2" style="background-color: rgb(230, 230, 230);">
                                <div class="icon rounded-circle bg-primary d-flex justify-content-center align-items-center"
                                    style="height: 50px; width: 50px;"><i class="mdi mdi-presentation text-light"
                                        style="font-size: 25px"></i></div>
                                <div class="title mx-2 mt-1">
                                    <h4> <span>Lecture: </span> Lecture 01</h4>
                                    <p>May 05</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--assignments-->
                    <div class="tab-pane fade" id="nav-assignments" role="tabpanel"
                        aria-labelledby="nav-assignments-tab" tabindex="0">
                        <a href="{{ route('student.course.detailed') }}" class="text-decoration-none">
                            <div class="p-2 d-flex rounded my-2" style="background-color: rgb(230, 230, 230);">
                                <div class="icon rounded-circle bg-primary d-flex justify-content-center align-items-center"
                                    style="height: 50px; width: 50px;"><i class="mdi mdi-clipboard-text text-light"
                                        style="font-size: 25px"></i></div>
                                <div class="title mx-2 mt-1">
                                    <h4> <span>Assignment: </span> Final lab test will be held on 17/05/23, everybody should
                                        come and attend the exam</h4>
                                    <p>May 1</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('student.course.detailed') }}" class="text-decoration-none">
                            <div class="p-2 d-flex rounded my-2" style="background-color: rgb(230, 230, 230);">
                                <div class="icon rounded-circle bg-primary d-flex justify-content-center align-items-center"
                                    style="height: 50px; width: 50px;"><i class="mdi mdi-clipboard-text text-light"
                                        style="font-size: 25px"></i></div>
                                <div class="title mx-2 mt-1">
                                    <h4> <span>Assignment: </span> Final lab test will be held on 17/05/23, everybody should
                                        come and attend the exam</h4>
                                    <p>April 28</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('student.course.detailed') }}" class="text-decoration-none">
                            <div class="p-2 d-flex rounded my-2" style="background-color: rgb(230, 230, 230);">
                                <div class="icon rounded-circle bg-primary d-flex justify-content-center align-items-center"
                                    style="height: 50px; width: 50px;"><i class="mdi mdi-clipboard-text text-light"
                                        style="font-size: 25px"></i></div>
                                <div class="title mx-2 mt-1">
                                    <h4> <span>Assignment: </span> Final lab test will be held on 17/05/23, everybody should
                                        come and attend the exam</h4>
                                    <p>April 29</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--people-->
                    <div class="tab-pane fade" id="nav-people" role="tabpanel" aria-labelledby="nav-people-tab"
                        tabindex="0">4</div>
                </div>
            </div>
        </div>
    </div>
@endsection
