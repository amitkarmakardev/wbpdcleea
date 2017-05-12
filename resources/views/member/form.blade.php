<div class="form-group row">
    <div class="col-md-12">
        {!! Form::label('role', 'User Role') !!}
    </div>
    <div class="col-md-4">
        {!! Form::radio('role', 'member', ['checked' => 'true']) !!} Member
    </div>
    <div class="col-md-4">
        {!! Form::radio('role', 'moderator') !!} Moderator
    </div>
</div>
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
<div class="form-group row">
    <div class="col-md-12">
        {!! Form::label('designation', 'Designation') !!}
    </div>
    <div class="col-md-4">
        {!! Form::radio('designation', 'General Member', ['checked' => 'true']) !!} General Member
    </div>
    <div class="col-md-4">
        {!! Form::radio('designation', 'President') !!} President
    </div>
    <div class="col-md-4">
        {!! Form::radio('designation', 'Vice President') !!} Vice President
    </div>
    <div class="col-md-4">
        {!! Form::radio('designation', 'General Secretary') !!} General Secretary
    </div>
    <div class="col-md-4">
        {!! Form::radio('designation', 'Assistant Secretary') !!} Assistant Secretary
    </div>
    <div class="col-md-4">
        {!! Form::radio('designation', 'Treasurer') !!} Treasurer
    </div>

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
