@extends('admin.master')
@section('content')
 {{$content}}   
@endsection

@section('alert-row')
    @include('admin.alert-row')
@endsection

@section('rows')
    @include('admin.row')
@endsection