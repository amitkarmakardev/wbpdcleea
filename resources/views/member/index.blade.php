@extends('member.layout')

@section('sub-navigation')

@stop

@section('left')
    <div class="main-container">
        <h2 class="heading">Members</h2>
        <div class="main-content">
            <hr>
            <table class="table table-striped" style="border-bottom: 1px solid #dedede">
                <tr>
                    <th>Member ID</th>
                    <th>Name</th>
                    <th>Member Since</th>
                    <th>Attached To</th>
                </tr>
                @foreach($data_list as $member)
                    <tr>
                        <td>{{ $member->member_id }}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->member_since }}</td>
                        <td>{{ $member->attached_to }}</td>
                    </tr>
                @endforeach
            </table>
            <div style="text-align: center">
                {!! $data_list->render() !!}
            </div>
        </div>
    </div>
@stop