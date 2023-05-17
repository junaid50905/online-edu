@extends('student.layouts.master')


@section('main_content')
<div class="row">
    <div class="col-md-12">
        <x-student-activities/>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        graph
    </div>
    <div class="col-md-5">
        <x-student-todo/>
    </div>
</div>


@endsection
