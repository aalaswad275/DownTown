@extends('admin.layout')

@section('content')

<div class="container mt-4">

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="d-flex justify-content-between mb-3">
        <h3>{{ __('gallery') }}</h3>
        <a href="{{ route('gallery.create') }}" class="btn btn-primary">
            {{ __('add new image') }}
        </a>
    </div>

    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>{{ __('image') }}</th>
                <th>{{ __('title') }}</th>
                <th>{{ __('landmark') }}</th>
                <th>{{ __('store') }}</th>
                <th>{{ __('actions') }}</th>
            </tr>
        </thead>

        <tbody>
            @foreach($gallery as $row)
            <tr>
                <td>{{ $row->id }}</td>

                <td>
                    <img src="{{ asset('frontend/img/'.$row->image) }}" width="120" class="rounded">
                </td>

                <td>{{ $row->title }}</td>
                <td>{{ $row->landmark->title ?? '-' }}</td>
                <td>{{ $row->store->name ?? '-' }}</td>

                <td>
                    <a href="{{ route('gallery.edit', $row->id) }}" class="btn btn-sm btn-warning">
                        {{ __('edit') }}
                    </a>

                    <form action="{{ route('gallery.destroy', $row->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('{{ __('are you sure?') }}')" class="btn btn-sm btn-danger">
                            {{ __('delete') }}
                        </button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $gallery->links() }}

</div>

@endsection
