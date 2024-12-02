@extends('layouts.app')

@section('content')
    <budgetadmin-component csrf_token="{{ @csrf_token() }}" :budgets='@json($budgets)' message="{{ session('message') }}"></budgetadmin-component>
@endsection