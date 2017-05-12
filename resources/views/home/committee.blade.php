@inject('viewInjector', 'App\Repository\SidebarInjector')
@extends('layout')

@section('navigation')
    <div class="container-fluid navigation-container">
        <div class="container navigation">
            <a href="{{ url('/') }}">Home</a> > <a href="{{ url('/committee') }}">Executive Committee</a>
        </div>
    </div>
@stop


@section('content')
    <div class="container">
        <div class="row">
            <div class="main-container">
                <h2 class="heading">Committee</h2>
                <div class="main-content">
                    <hr>
                    <h4>President</h4>
                    @foreach($viewInjector->getCommitteeMember('President') as $data)
                        {{ $data->name }}
                    @endforeach
                    <hr>
                    <h4>Vice President</h4>
                    @foreach($viewInjector->getCommitteeMember('Vice President') as $data)
                        {{ $data->name }}
                    @endforeach
                    <hr>
                    <h4>General Secretary</h4>
                    @foreach($viewInjector->getCommitteeMember('General Secretary') as $data)
                        {{ $data->name }}
                    @endforeach
                    <hr>
                    <h4>Assistant Secretary</h4>
                    @foreach($viewInjector->getCommitteeMember('Assistant Secretary') as $data)
                        {{ $data->name }}
                    @endforeach
                    <hr>
                    <h4>Treasurer</h4>
                    @foreach($viewInjector->getCommitteeMember('Treasurer') as $data)
                        {{ $data->name }}
                    @endforeach
                    <hr>
                </div>
            </div>
        </div>
    </div>
@stop