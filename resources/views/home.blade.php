@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="single-audience d-flex justify-content-between align-items-center">
                <div class="audience-content">
                    <h5>Total Applications</h5>
                    <h4>19,202 <span>+55%</span></h4>
                </div>
                <div class="icon">
                    <img src="{{ asset('admin/assets/images/icon/note-2.svg') }}" alt="white-profile-2user">
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="single-audience d-flex justify-content-between align-items-center">
                <div class="audience-content">
                    <h5>Total Interviews</h5>
                    <h4>1,302 <span>+32%</span></h4>
                </div>
                <div class="icon">
                    <img src="{{ asset('admin/assets/images/icon/user-2.svg') }}" alt="eye">
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="single-audience d-flex justify-content-between align-items-center">
                <div class="audience-content color-style-fe5957">
                    <h5>Hired Employees</h5>
                    <h4>132 <span class="red">-1.5%</span></h4>
                </div>
                <div class="icon">
                    <img src="{{ asset('admin/assets/images/icon/people.svg') }}" alt="timer">
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="single-audience d-flex justify-content-between align-items-center">
                <div class="audience-content">
                    <h5>Existing Employees</h5>
                    <h4>502</h4>
                </div>
                <div class="icon">
                    <img src="{{ asset('admin/assets/images/icon/profile-2.svg') }}" alt="mask">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
