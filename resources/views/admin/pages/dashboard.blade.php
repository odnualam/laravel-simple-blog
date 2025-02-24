@extends('admin.layouts.master')
@section('title', 'Dashboard')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))<div class="alert alert-success" role="alert">{{ session('status') }}</div>
                        @endif
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
