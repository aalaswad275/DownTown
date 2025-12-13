@extends('admin.layout')

@section('content')

<div class="container mt-4">

    <h3>إضافة صورة جديدة</h3>

    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf

        <div class="mb-3">
            <label class="form-label">عنوان الصورة</label>
            <input type="text" name="image_title" class="form-control" value="{{ old('image_title') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">وصف الصورة</label>
            <textarea name="image_disc" class="form-control">{{ old('image_disc') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">اختر معلم</label>
            <select name="landmark_id" class="form-control">
                <option value="">-- اختر --</option>
                @foreach($landmarks as $landmark)
                <option value="{{ $landmark->id }}">{{ $landmark->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">اختر متجر</label>
            <select name="store_id" class="form-control">
                <option value="">-- اختر --</option>
                @foreach($stores as $store)
                <option value="{{ $store->id }}">{{ $store->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">الصورة</label>
            <input type="file" name="gallery_image" class="form-control">
        </div>

        <button class="btn btn-success">حفظ</button>
        <a href="{{ route('gallery.index') }}" class="btn btn-secondary">رجوع</a>

    </form>
</div>

@endsection

