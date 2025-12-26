@extends('layout.backapp')



@section('content')
<a href="{{ route('stores.create') }}" class="btn btn-primary mb-3">
    {{ __('Add Store') }}
</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>{{ __('Name') }}</th>
            <th>{{ __('Phone') }}</th>
            <th>{{ __('Image') }}</th>
            <th>{{ __('Actions') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($stores as $store)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $store->name }}</td>
            <td>{{ $store->phone }}</td>
            <td>
                <img src="{{ asset('frontend/img/'.$store->image) }}" width="60">
            </td>
            <td>
                <a href="{{ route('stores.show',$store->id) }}" class="btn btn-info btn-sm">
                    {{ __('Show') }}
                </a>
                <a href="{{ route('stores.edit',$store->id) }}" class="btn btn-warning btn-sm">
                    {{ __('Edit') }}
                </a>

                <form action="{{ route('store.destroy',$store->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('{{ __('Are you sure?') }}')" class="btn btn-danger btn-sm">
                        {{ __('Delete') }}
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $stores->links() }}
@endsection
