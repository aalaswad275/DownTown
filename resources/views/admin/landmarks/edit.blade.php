@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Landmark</h2>
    <form action="{{ route('landmark.update', $landmark->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')


        {{-- Name --}}
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $landmark->name }}" class="form-control" required>
        </div>

        {{-- Description --}}
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $landmark->description }}</textarea>
        </div>


        {{-- Main Image --}}
        <div class="mb-3">
            <label>Main Image</label><br>

            @if($landmark->image)
                <img src="{{ asset($landmark->image) }}" width="120" class="mb-2">
            @endif

            <input type="file" name="image" class="form-control">
        </div>


        {{-- Gallery --}}
        <div class="mb-3">
            <label>Gallery Images</label>
            <input type="file" name="gallery[]" class="form-control" multiple>

            <div class="mt-2 d-flex flex-wrap">
                @foreach($landmark->gallery ?? [] as $img)
                    <div class="me-2 text-center">
                        <img src="{{ asset($img) }}" width="120" class="mb-1">
                        <label>
                            <input type="checkbox" name="delete_gallery[]" value="{{ $img }}">
                            Delete
                        </label>
                    </div>
                @endforeach
            </div>
        </div>


        {{-- Address --}}
        <div class="mb-3">
            <label>Address</label>
            <input type="text" name="address" value="{{ $landmark->address }}" class="form-control">
        </div>


        {{-- Map Picker --}}
        <label>Pick Location</label>
        <div id="map" style="height: 400px;"></div>

        <input type="hidden" name="latitude" id="lat" value="{{ $landmark->latitude }}">
        <input type="hidden" name="longitude" id="lng" value="{{ $landmark->longitude }}">


        {{-- Tags --}}
        <div class="mb-3 mt-3">
            <label>Tags (comma separated)</label>
            <input type="text" name="tags"
                   value="{{ $landmark->tags ? implode(',', $landmark->tags) : '' }}"
                   class="form-control">
        </div>


        {{-- Active --}}
        <div class="mb-3">
            <label>
                <input type="checkbox" name="active" {{ $landmark->is_active ? 'checked' : '' }}>
                Active
            </label>
        </div>


        <button class="btn btn-primary">Update</button>

    </form>
</div>



<script>
    document.addEventListener("DOMContentLoaded", function () {

        let lat = {{ $landmark->latitude ?? 32.8872 }};
        let lng = {{ $landmark->longitude ?? 13.1913 }};

        let map = L.map('map').setView([lat, lng], 7);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: "© OpenStreetMap contributors"
        }).addTo(map);

        let marker = L.marker([lat, lng], { draggable: true }).addTo(map);

        marker.on("dragend", function (e) {
            document.getElementById("lat").value = e.target.getLatLng().lat;
            document.getElementById("lng").value = e.target.getLatLng().lng;
        });

        map.on("click", function (e) {
            marker.setLatLng(e.latlng);
            document.getElementById("lat").value = e.latlng.lat;
            document.getElementById("lng").value = e.latlng.lng;
        });
    });
</script>

@endsection
