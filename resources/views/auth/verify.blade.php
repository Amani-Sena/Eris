@extends('layouts.app')

@section('content')
    <verify-component csrf_token="{{ @csrf_token() }}"></verify-component>
@endsection
