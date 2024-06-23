@extends('layouts.app')

@section('title', 'Edit Task')


@section('content')
    
   @include('form',['task'=>$task])

@endsection    