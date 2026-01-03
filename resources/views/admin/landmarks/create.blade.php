@extends('layout.backapp')
@section('content')
<div class="container py-4">
    <h3>{{__('Add New Landmark')}}</h3>
    <form action="{{route('landmarks.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="landmarkname"> {{__('enter lanadmark')}}</label>
            <input type="text" name="name" id="landmarkname" class="form-control" value="{{old('name')}}" required>

        </div>
        <div class="mb-3">
            <label for="Descrpition"> {{__('enter Descrpition')}}</label>
            <textarea name="description" id="Descrpition" class="form-control"> {{old('description')}}</textarea>




<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script>
ClassicEditor
    .create(document.querySelector('#Descrpition'))
    .catch(error => {
        console.error(error);
    });
</script>
        </div>
        <div class="mb-3">
            <label for="address"> {{__('enter address')}}</label>
            <input type="text" name="address" id="address" class="form-control" value="{{old('address')}}" >
        </div>
        <div class="mb-3">
            <label for="city"> {{__('choose city')}}</label>
            <select name="city_id" id="city">
                <option value=""> {{__('Select City')}}</option>
                @foreach ($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="Category"> {{__('choose category')}}</label>
            <select name="category" id="Category">
                <option value=""> {{__('Select Category')}}</option>
                @foreach ($catgories as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="Tags"> {{__('enter tags')}}</label>
            <input type="text" name="tags" id="Tags" class="form-control" value="{{old('tags')}}"  placeholder="museum,tourism">
        </div>
        <div class="mb-3">
            <label for="website"> {{__('enter website')}}</label>
            <input type="url" name="website" id="website" class="form-control" value="{{old('website')}}" >
        </div>
        <div class="mb-3">
    <label class="form-label">{{ __('opening hours') }}</label>

    <div class="border p-3 rounded bg-light">

        @php
            $days = ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'];
        @endphp

        @foreach($days as $day)
        <div class="row mb-2 align-items-center">

            <div class="col-md-2">
                <strong>{{ __($day) }}</strong>
            </div>

            <div class="col-md-3">
                <input type="time" class="form-control opening-time" data-day="{{ $day }}">
            </div>

            <div class="col-md-3">
                <input type="time" class="form-control closing-time" data-day="{{ $day }}">
            </div>

            <div class="col-md-2 text-center">
                <input type="checkbox" class="form-check-input closed-checkbox" data-day="{{ $day }}">
                {{ __('Closed') }}
            </div>

        </div>
        @endforeach

        <input type="hidden" name="opening_hours" id="openingHoursJSON">

    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
    function updateJSON() {
        let data = {};

        document.querySelectorAll(".opening-time").forEach(input => {
            let day = input.dataset.day;
            let open = input.value;
            let close = document.querySelector('.closing-time[data-day="'+day+'"]').value;
            let closed = document.querySelector('.closed-checkbox[data-day="'+day+'"]').checked;

            if (closed) {
                data[day] = "Closed";
            } else if (open && close) {
                data[day] = open + "-" + close;
            }
        });

        document.getElementById("openingHoursJSON").value = JSON.stringify(data);
    }

    document.querySelectorAll(".opening-time, .closing-time, .closed-checkbox")
        .forEach(el => el.addEventListener("change", updateJSON));
});
</script>

        <div class="mb-3">
            <label for="Ratings"> {{__('enter Rating')}}</label>
            <input type="number" name="rating" id="Ratings" class="form-control" min="0" max="5" step="0.1" value="{{old('rating')}}" >
        </div>
        <div class="mb-3">
            <label for="mainimage"> {{__('upload Image')}}</label>
            <input type="file" name="image" id="mainimage" class="form-control">
        </div>
        <div class="mb-3">
            <label for="gallery"> {{__('enter address')}}</label>
            <input type="file" name="gallery[]" id="gallery" class="form-control" multiple >
        </div>
        <div class="row">
            <div class=" col-md-6 mb-3">
            <label for="Latitude"> {{__('Latitude')}}</label>
            {{-- الانه القيمه من الخريطه --}}
            <input type="text" name="latitude" id="Latitude" class="form-control" readonly >
            </div>
            <div class=" col-md-6 mb-3">
            <label for="Longitude"> {{__('Longitude')}}</label>
            {{-- الانه القيمه من الخريطه --}}
            <input type="text" name="longitude" id="Longitude" class="form-control" readonly >
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">  {{__('select Location on map')}}</label>
            <div id="map" style="height: 400px;"></div>
        </div>
        <div class="form-check mb-3">
            <input type="checkbox" name="is_active" class="form-check-input" checked>
            <label  class="form-check-label"></label>
        </div>
        <button type="submit" class="btn btn-primary"> {{__('add landmark')}}</button>
    </form>
</div>
<script>
// id الخاص بطول والعرض
let latInput=document.getElementById('Latitude');
let lngInput=document.getElementById('Longitude');


// موقع ليبيا -طرابلس
let defaultLat= 32.8872;
let defaultLng=13.1913;

//

let map= L.map('map').setView([defaultLat,defaultLng],7);

//  اضافة بيانات الخريطة
 L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
 {attibution: ' OpenStreetMap Contributors'}).addTo(map);

 // اضافة الموشر الخريطة
let marker=L.marker([defaultLat,defaultLng], {draggable:true}).addTo(map);

latInput.value=defaultLat;
lngInput.value=defaultLng;

marker.on('dargend', function(e){
let pos= marker.getLatLng();
latInput.value= pos.lat;
lngInput.value= pos.lng;
});

map.on('click',function(e){
marker.setLatLng(e.latlng);
latInput.value= e.latlng.lat;
lngInput.value= e.latlng.lng;
});

</script>
@endsection
