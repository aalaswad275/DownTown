@extends('layout.backapp')
@section('content')
<div class="container py-4">
    <h3>{{_('Add New Landmark')}}</h3>
    <form action="{{route('landmarks.update', $landmark->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="landmarkname"> {{_('enter lanadmark')}}</label>
            <input type="text" name="name" id="landmarkname" class="form-control" value="$landmark->name" required>

        </div>
        <div class="mb-3">
            <label for="Descrpition"> {{_('enter Descrpition')}}</label>
            <textarea name="description" id="Descrpition" class="form-control"> {{old('description')}}</textarea>
        </div>
        <div class="mb-3">
            <label for="address"> {{_('enter address')}}</label>
            <input type="text" name="address" id="address" class="form-control" value="{{old('address')}}" >
        </div>
        <div class="mb-3">
            <label for="city"> {{_('choose city')}}</label>
            <select name="city_id" id="city">
                <option value=""> {{_('Select City')}}</option>
                @foreach ($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="Category"> {{_('choose category')}}</label>
            <select name="category" id="Category">
                <option value=""> {{_('Select Category')}}</option>
                @foreach ($category as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="Tags"> {{_('enter tags')}}</label>
            <input type="text" name="tags" id="Tags" class="form-control" value="{{old('tags')}}"  placeholder="museum,tourism">
        </div>
        <div class="mb-3">
            <label for="website"> {{_('enter website')}}</label>
            <input type="url" name="website" id="website" class="form-control" value="{{old('website')}}" >
        </div>
        <div class="mb-3">
            <label for="Openhours"> {{_('enter opening Hours')}}</label>
            <input type="text" name="opening_hours" id="Openhours" class="form-control" value="{{old('opening_hours')}}" placeholder='{ "Mon":"9:6"}' >
        </div>
        <div class="mb-3">
            <label for="Ratings"> {{_('enter Rating')}}</label>
            <input type="number" name="rating" id="Ratings" class="form-control" min="0" max="5" step="0.1" value="{{old('rating')}}" >
        </div>
        <div class="mb-3">
            <label for="mainimage"> {{_('upload Image')}}</label>
            <input type="file" name="image" id="mainimage" class="form-control">
        </div>
        <div class="mb-3">
            <label for="gallery"> {{_('enter address')}}</label>
            <input type="file" name="gallery[]" id="gallery" class="form-control" multiple >
        </div>
        <div class="row">
            <div class=" col-md-6 mb-3">
            <label for="Latitude"> {{_('Latitude')}}</label>
            {{-- الانه القيمه من الخريطه --}}
            <input type="text" name="latitude" id="Latitude" class="form-control" readonly >
            </div>
            <div class=" col-md-6 mb-3">
            <label for="Longitude"> {{_('Longitude')}}</label>
            {{-- الانه القيمه من الخريطه --}}
            <input type="text" name="longitude" id="Longitude" class="form-control" readonly >
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">  {{_('select Location on map')}}</label>
            <div id="map" style="height: 400px;"></div>
        </div>
        <div class="form-check mb-3">
            <input type="checkbox" name="is_active" class="form-check-input" checked>
            <label  class="form-check-label"></label>
        </div>
        <button type="submit" class="btn btn-primary"> {{_('add landmark')}}</button>
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
