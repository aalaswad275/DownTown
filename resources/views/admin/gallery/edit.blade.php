@extends('admin.layout')

@section('content')

<div class="container mt-4">

    <h3>تعديل الصورة</h3>

    <form action="{{ route('gallery.update', $image->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">عنوان الصورة</label>
            <input type="text" name="image_title" class="form-control" value="{{ $image->title }}">
        </div>

        <div class="mb-3">
            <label class="form-label">وصف الصورة</label>
            <textarea name="image_disc" class="form-control">{{ $image->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">اختر معلم</label>
            <select name="landmark_id" class="form-control">
                @foreach($landmarks as $landmark)
                <option value="{{ $landmark->id }}" {{ $image->landmark_id == $landmark->id ? 'selected' : '' }}>
                    {{ $landmark->title }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">اختر متجر</label>
            <select name="store_id" class="form-control">
                @foreach($stores as $store)
                <option value="{{ $store->id }}" {{ $image->store_id == $store->id ? 'selected' : '' }}>
                    {{ $store->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">الصورة الحالية:</label><br>
            <img src="{{ asset('frontend/img/'.$image->image) }}" width="150" class="rounded">
        </div>

        <div class="mb-3">
            <label class="form-label">تغيير الصورة (اختياري)</label>
            <input type="file" name="gallery_image" class="form-control">
        </div>

        <button class="btn btn-warning">تحديث</button>
        <a href="{{ route('gallery.index') }}" class="btn btn-secondary">رجوع</a>

    </form>
</div>

@endsection
