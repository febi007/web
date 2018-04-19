@extends('layouts.app')
 
@section('title', $title)
 
@section('sidebar')
    @parent
    <li>PHP</li>
@endsection
 
@section('content')
    <center>
        <h1>{{ $content }}</h1>
        <div class="text">
        	<p>Terimakasih Sudah Berkunjung</p>
        </div>
    </center>
@endsection