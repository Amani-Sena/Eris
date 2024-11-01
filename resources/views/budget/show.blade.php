@extends('layouts.app')

@section('content')
    <show-component id="{{ $budget->id }}" phone="{{ $budget->phone }}" address="{{ $budget->address }}" date="{{ date('d/m/Y', strtotime($budget->date)) }}" time="{{ $budget->time }}" cep="{{ $budget->cep }}"></show-component>
@endsection
