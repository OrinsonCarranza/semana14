<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->

@extends('layout')

@section('title', 'Home')

@section('content')
<tr>
    <td colspan="4">Home</td>
</tr>
<tr>
    <td colspan="4">
    @auth
        {{ auth ()->user()->name}}
    @endauth
    </td>
</tr>
@endsection