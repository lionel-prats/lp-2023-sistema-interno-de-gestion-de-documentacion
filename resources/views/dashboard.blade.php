@extends('layouts.app')

@section('title')
    Tu cuenta
@endsection

@section('content')

<h1>{{ auth()->user()->name }}</h1>
{{-- <div class="flex justify-center">
    <div class="w-full md:w-8/12 lg:w-6/12 md:flex">



</div>


    </div> --}}
@endsection