@extends('layouts.app')

@section('content')
    <email-component csrf_token="{{ @csrf_token() }}"></email-component>
@endsection
