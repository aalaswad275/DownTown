@extends('layout.backapp')
@section('content')
<div class="container">
    <h1>  صور المتحركة خاصة بالصفحة الاوله</h1>
<a href="{{route('sliders.create')}}" class="btn btn-primary"> {{_('add slider')}}</a>
    <table>
        <thead>
            <tr>
                <td> {{_('ID')}}</td>
                <td>{{_('image')}}</td>
                <td>{{_('title')}}</td>
                <td>{{_('date')}}</td>
                <td>{{_('status')}}</td>
                <td>{{_('action')}}</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($slider as $s)
            <tr>
                <td> {{ $s->id}}</td>
                <td><a href="#"><img src="{{asset('frontend/img/'.$s->image)}}"  height="120px" width="120px" srcset="" ></a></td>
                <td>{{$s->title}}</td>
                <td>{{$s->created_at}}</td>
                <td> @if($s->active==1) {{_('active')}} @else {{_('unactive')}}@endif</td>
                <td> <a href=""> {{_('edit')}}</a></td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

@endsection
