@extends('layouts.app')

@section('content')
    <budgetlist-component csrf_token="{{ @csrf_token() }}" :budgets='@json($budgets)' message="{{ session('message') }}"></budgetlist-component>
@endsection