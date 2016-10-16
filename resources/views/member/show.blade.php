@extends('member.layout')

@section('sub-navigation')
    > <a href="{{ url('member', $data->id) }}">{{ $data->name }}'s Profile</a>
@stop

@section('left')
    <div class="main-container">
        <h2 class="heading">{{ $data->name }}'s Profile</h2>
        <div class="main-content">
            <hr>
            <div class="row" style="line-height: 2.5em">
                <div class="col-md-3 ">Member ID:</div>
                <div class="col-md-9">{{ $data->member_id }}</div>
                <div class="col-md-3 ">Name:</div>
                <div class="col-md-9">{{ $data->name }}</div>
                <div class="col-md-3">Member Since:</div>
                <div class="col-md-9">{{ $data->member_since }}</div>
                <div class="col-md-3">Address:</div>
                <div class="col-md-9">{{ $data->address }}</div>
                <div class="col-md-3">Attached To:</div>
                <div class="col-md-9">{{ $data->attached_to }}</div>
                <div class="col-md-3">Contact No:</div>
                <div class="col-md-9">{{ $data->contact_no }}</div>
                <div class="col-md-3">Designation</div>
                <div class="col-md-9">{{ $data->designation }}</div>
            </div>
            <hr>
            @can('create', 'member')
            <a href="{{ url('member', [$data->id, 'edit']) }}" class="btn btn-primary">Update Details</a>
            @endcan
        </div>
    </div>
@stop