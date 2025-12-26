@extends('layout.backapp')


@section('content')
<div class="card">
    <div class="card-body">
        <h4>{{ $store->name }}</h4>
        <p>{{ __('Description') }}: {{ $store->description }}</p>
        <p>{{ __('Address') }}: {{ $store->address }}</p>
        <p>{{ __('Phone') }}: {{ $store->phone }}</p>
        <p>{{ __('Email') }}: {{ $store->email }}</p>

        <img src="{{ asset('frontend/img/'.$store->image) }}" width="200">
    </div>
</div>
@endsection
