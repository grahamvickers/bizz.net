@extends('layouts.app')

@section('content')
    <div id="app">
        <app :user="{{ json_encode($user)}}"></app>
    </div>
@endsection