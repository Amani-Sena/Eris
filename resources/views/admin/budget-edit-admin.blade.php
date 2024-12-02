@extends('layouts.app')

@section('content')
    <editadmin-component csrf_token="{{ @csrf_token() }}" budget_id="{{ $budget->id }}" :budget="{{ $budget }}"></editadmin-component>
@endsection