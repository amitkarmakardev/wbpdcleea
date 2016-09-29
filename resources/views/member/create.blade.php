@extends('member.layout')

@section('left')
    <div class="main-container">
        <h2 class="heading">Create Member</h2>
        <div class="main-content">
            <hr>
            {!! Form::open(['url' => url('member')]) !!}

            <div class="form-group">
                {!! Form::label('member_id', 'Member ID') !!}
                @if($errors->has('member_id'))
                    @foreach($errors->get('member_id') as $error)
                        <span class="validation-error-text"> - {{ $error }} </span>
                    @endforeach
                @endif
                {!! Form::text('member_id', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('member_since', 'Member Since') !!}
                @if($errors->has('member_since'))
                    @foreach($errors->get('member_since') as $error)
                        <span class="validation-error-text"> - {{ $error }} </span>
                    @endforeach
                @endif
                {!! Form::text('member_since', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                @if($errors->has('name'))
                    @foreach($errors->get('name') as $error)
                        <span class="validation-error-text"> - {{ $error }} </span>
                    @endforeach
                @endif
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                @if($errors->has('email'))
                    @foreach($errors->get('email') as $error)
                        <span class="validation-error-text"> - {{ $error }} </span>
                    @endforeach
                @endif
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('address', 'Address') !!}
                @if($errors->has('address'))
                    @foreach($errors->get('address') as $error)
                        <span class="validation-error-text"> - {{ $error }} </span>
                    @endforeach
                @endif
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('attached_to', 'Attached To') !!}
                @if($errors->has('attached_to'))
                    @foreach($errors->get('attached_to') as $error)
                        <span class="validation-error-text"> &nbsp;&nbsp;&nbsp;&nbsp; - {{ $error }} </span>&nbsp;&nbsp;
                    @endforeach
                @endif
                {!! Form::select('attached_to', config('wbpdcleea.member.attached_to'), null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('contact_no', 'Contact No') !!}
                @if($errors->has('contact_no'))
                    @foreach($errors->get('contact_no') as $error)
                        <span class="validation-error-text"> - {{ $error }} </span>
                    @endforeach
                @endif
                {!! Form::text('contact_no', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop