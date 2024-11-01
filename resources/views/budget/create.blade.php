@extends('layouts.app')

@section('content')
    <header-component header_title="Agendar Visita" auth={{ Auth::check() }}></header-component>
    <book-component csrf_token="{{ @csrf_token() }}"></book-component>
@endsection
