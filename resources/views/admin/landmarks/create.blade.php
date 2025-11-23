@extends('layout.backapp')

@section('content')
<div class="container py-4">
    <h3>Create Landmark</h3>

    <form action="{{ route('landmarks.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Name --}}
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        {{-- Description --}}
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        {{-- Address --}}
        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" value="{{ old('address') }}">
        </div>

        {{-- Location --}}
        <div class="mb-3">
            <label class="form-label">Location</label>
            <input type="text" name="location" class="form-control" value="{{ old('location') }}">
        </div>

        {{-- City --}}
        <div class="mb-3">
            <label class="form-label">City</label>
            {{-- <select name="city_id" class="form-control">
                <option value="">-- Select City --</option>
                @foreach(\App\Models\City::all() as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select> --}}
        </div>

        {{-- Category --}}
        <div class="mb-3">
            <label class="form-label">Category</label>
            <input type="text" name="category" class="form-control" value="{{ old('category') }}">
        </div>

        {{-- Tags --}}
        <div class="mb-3">
            <label class="form-label">Tags (comma separated)</label>
            <input type="text" name="tags" class="form-control" value="{{ old('tags') }}" placeholder="museum, historic, tourism">
        </div>

        {{-- Website --}}
        <div class="mb-3">
            <label class="form-label">Website</label>
            <input type="url" name="website" class="form-control" value="{{ old('website') }}">
        </div>

        {{-- Phone Number --}}
        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number') }}">
        </div>

        {{-- Opening Hours (JSON) --}}
        <div class="mb-3">
            <label class="form-label">Opening Hours (JSON)</label>
            <textarea name="opening_hours" class="form-control" placeholder='{"mon":"9-6","tue":"closed"}'>{{ old('opening_hours') }}</textarea>
        </div>

        {{-- Rating --}}
        <div class="mb-3">
            <label class="form-label">Rating</label>
            <input type="number" name="rating" class="form-control" min="0" max="5" step="0.1" value="{{ old('rating') }}">
        </div>

        {{-- Main Image --}}
        <div class="mb-3">
            <label class="form-label">Main Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        {{-- Gallery Images --}}
        <div class="mb-3">
            <label class="form-label">Gallery Images</label>
            <input type="file" name="gallery[]" class="form-control" multiple>
        </div>

        {{-- Latitude & Longitude --}}
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Latitude</label>
                <input type="text" id="latitude" name="latitude" class="form-control" readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Longitude</label>
                <input type="text" id="longitude" name="longitude" class="form-control" readonly>
            </div>
        </div>

        {{-- Leaflet Map --}}
        <div class="mb-3">
            <label class="form-label">Select Location on Map</label>
            <div id="map" style="height: 400px;"></div>
        </div>

        {{-- Active --}}
        <div class="form-check mb-3">
            <input type="checkbox" name="is_active" class="form-check-input" checked>
            <label class="form-check-label">Active</label>
        </div>

        <button type="submit" class="btn btn-primary">Save Landmark</button>
    </form>
</div>

{{-- Leaflet.js --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
      integrity="sha256-o9N1jH1nYp0+vA6sQp+QGkq6nIRyHofASro9v+2Hjhk=" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-o9N1jH1nYp0+vA6sQp+QGkq6nIRyHofASro9v+2Hjhk=" crossorigin=""></script>

<script>
window.onload = function() {
    // Get references to input fields
    let latInput = document.getElementById('latitude');
    let lngInput = document.getElementById('longitude');

    // Default coordinates
    let defaultLat = 32.8872;
    let defaultLng = 13.1913;

    // Initialize map
    let map = L.map('map').setView([defaultLat, defaultLng], 7);

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Add draggable marker
    let marker = L.marker([defaultLat, defaultLng], {draggable: true}).addTo(map);

    // Set initial input values
    latInput.value = defaultLat;
    lngInput.value = defaultLng;

    // Update inputs when marker is dragged
    marker.on('dragend', function(e) {
        let pos = marker.getLatLng();
        latInput.value = pos.lat;
        lngInput.value = pos.lng;
    });

    // Update marker & inputs when clicking on map
    map.on('click', function(e) {
        marker.setLatLng(e.latlng);
        latInput.value = e.latlng.lat;
        lngInput.value = e.latlng.lng;
    });
};
</script>


@endsection
