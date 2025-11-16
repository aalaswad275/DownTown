@extends('layout.backapp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{route('sliders.store')}}" method="post"  enctype="multipart/form-data">
                // اضافة صور متحركه
                @csrf // عملية تشفير البيانات
                @method('POST')
                // خاص بتحميل الصور
                // البيانات الخاص بالصوره
                <div class="mb-3"> // عنوان الصورة
                    <label for="title ">{{_('Please Enter title')}}</label>
                    <input type="text" id="title" name='slider_title' value="{{old('title')}}" required >

                </div>

                <div class="mb-3">// عنوان فراعي
                    <label for="subtitle">{{_('Please enter subtitle')}}</label>
                    <input type="text" id="subtitle" name='image_subtitle' value="{{old('subtitle')}}">
                </div>
                <div class="mb-3">
                    <label for="Description">{{_('Pleasse enter description')}}</label>
                    <textarea name="image_disc" id="Description" cols="30" rows="10" required> {{old('Description')}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="link">{{_('please enter link ')}}</label>
                    <input type="text" name="image_link" id="link" value="{{old('link')}}">
                </div>
                <div class="mb-3">
                    <label for="active">{{_('Is it to display')}}</label>
                    <input type="checkbox" id='active' name="is_active">
                </div>
                <div class="mb-3">
                    <label for="image">{{_('upload image')}}</label>
                    <input type="file" name="slider_image" id="image" required>
                </div>
                <button type="submit" class="btn btn-success">{{_('submit')}}</button>

            </form>
        </div>
    </div>

</div>

@endsection
