@extends('member.layout')

@section('left')
    <div class="main-container">
        <h2 class="heading">Create Member</h2>
        <div class="main-content">
            <hr>
            {!! Form::open(['url' => url('member')]) !!}

            @if($errors->has('member_id'))
                @foreach($errors->get('member_id') as $error)
                    <span class="validation-error-text"> * {{ $error }} </span>&nbsp;&nbsp;
                @endforeach
            @endif
            <div class="form-group">
                {!! Form::label('member_id', 'Member ID') !!}
                {!! Form::text('member_id', null, ['class' => 'form-control']) !!}
            </div>
            @if($errors->has('member_since'))
                @foreach($errors->get('member_since') as $error)
                    <span class="validation-error-text"> * {{ $error }} </span>&nbsp;&nbsp;
                @endforeach
            @endif
            <div class="form-group">
                {!! Form::label('member_since', 'Member Since') !!}
                {!! Form::date('member_since', null, ['class' => 'form-control']) !!}
            </div>

            @if($errors->has('name'))
                @foreach($errors->get('name') as $error)
                    <span class="validation-error-text"> * {{ $error }} </span>&nbsp;&nbsp;
                @endforeach
            @endif
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            @if($errors->has('address'))
                @foreach($errors->get('address') as $error)
                    <span class="validation-error-text"> * {{ $error }} </span>&nbsp;&nbsp;
                @endforeach
            @endif
            <div class="form-group">
                {!! Form::label('address', 'Address') !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
            </div>
            @if($errors->has('attached_to'))
                @foreach($errors->get('attached_to') as $error)
                    <span class="validation-error-text"> * {{ $error }} </span>&nbsp;&nbsp;
                @endforeach
            @endif
            <div class="form-group">
                {!! Form::label('attached_to', 'Attached To') !!}
                {!! Form::select('attached_to', config('wbpdcleea.member.attached_to'), null, ['class' => 'form-control']) !!}
            </div>
            @if($errors->has('contact_no'))
                @foreach($errors->get('contact_no') as $error)
                    <span class="validation-error-text"> * {{ $error }} </span>&nbsp;&nbsp;
                @endforeach
            @endif
            <div class="form-group">
                {!! Form::label('contact_no', 'Contact No') !!}
                {!! Form::text('contact_no', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop