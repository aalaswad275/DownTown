@extends('layout.backapp')

@section('content')
<form action="{{ route('stores.update',$store->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>{{ __('Name') }}</label>
        <input type="text" name="store_name" value="{{ $store->name }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>{{ __('Description') }}</label>
        <input type="text" name="store_disc" value="{{ $store->description }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>{{ __('Address') }}</label>
        <input type="text" name="store_address" value="{{ $store->address }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>{{ __('Phone') }}</label>
        <input type="text" name="store_phone" value="{{ $store->phone }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>{{ __('Email') }}</label>
        <input type="email" name="store_email" value="{{ $store->email }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>{{ __('Current Image') }}</label><br>
        <img src="{{ asset('frontend/img/'.$store->image) }}" width="80">
    </div>

    <div class="mb-3">
        <label>{{ __('Change Image') }}</label>
        <input type="file" name="store_image" class="form-control">
    </div>

    <button class="btn btn-primary">
        {{ __('Update') }}
    </button>
</form>
@endsection
