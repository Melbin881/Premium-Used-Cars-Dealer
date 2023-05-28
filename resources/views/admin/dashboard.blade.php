@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">{{ __('Menu') }}</div>

                    <div class="card-body">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <p class="welcome-text">Welcome, {{ Auth::user()->name }}!</p>
                        <p>You are logged in and can access the dashboard.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection