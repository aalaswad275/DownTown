@extends('layout.backapp')


@section('content')
<form action="{{ route('stores.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label>{{ __('Name') }}</label>
        <input type="text" name="store_name" class="form-control">
    </div>

    <div class="mb-3">
        <label>{{ __('Description') }}</label>
        <input type="text" name="store_disc" class="form-control">
    </div>

    <div class="mb-3">
        <label>{{ __('Address') }}</label>
        <input type="text" name="store_address" class="form-control">
    </div>

    <div class="mb-3">
        <label>{{ __('Phone') }}</label>
        <input type="text" name="store_phone" class="form-control">
    </div>

    <div class="mb-3">
        <label>{{ __('Email') }}</label>
        <input type="email" name="store_email" class="form-control">
    </div>

    <div class="mb-3">
        <label>{{ __('Image') }}</label>
        <input type="file" name="store_image" class="form-control">
    </div>

    <button class="btn btn-success">
        {{ __('Save') }}
    </button>
</form>
@endsection
