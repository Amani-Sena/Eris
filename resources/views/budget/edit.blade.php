@extends('layouts.app')

@section('content')
    <edit-component csrf_token="{{ @csrf_token() }}" budget_id="{{ $budget->id }}" :budget="{{ $budget }}"></edit-component>
@endsection