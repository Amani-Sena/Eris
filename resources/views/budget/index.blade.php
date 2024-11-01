@extends('layouts.app')

@section('content')
    <budget-component csrf_token="{{ @csrf_token() }}" :budgets='@json($budgets)'></budget-component>
@endsection