@extends('layouts.app')

@section('content')
    <register-component csrf_token="{{ @csrf_token() }}" message="{{ session('message') }}"></register-component>
@endsection
