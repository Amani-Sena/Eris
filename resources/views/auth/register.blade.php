@extends('layouts.app')

@section('content')
    <register-component csrf_token="{{ @csrf_token() }}"></register-component>
@endsection
