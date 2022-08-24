@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @can('Admin')
        <p>Welcome to this admin panel.</p>
    @else
        <p>Coba</p>
    @endcan
@stop
