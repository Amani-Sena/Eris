@extends('layouts.app')

@section('content')
    <book-component csrf_token="{{ @csrf_token() }}"></book-component>
@endsection
