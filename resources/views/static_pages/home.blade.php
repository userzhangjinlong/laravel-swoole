@extends('layouts.default')
@section('title', '首页')
@section('content')
    <h1>主页</h1>
    <h2><a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">注册</a></h2>
@stop