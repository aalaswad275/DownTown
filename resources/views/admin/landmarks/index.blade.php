@extends('layout.lapp')

@section('content')

<div class="container">

    <div class="row">
        <div class="align-items-center">
            <h2 class="fw-bold">
                {{_('Libyan landmarks List ')}}
            </h2>
            <a href="{{route('landmarks.create')}}"  class="btn btn-lg btn-primary">
                {{_(' New Landmark')}}
            </a>
        </div>
    </div>


    <div class="row">
        <div class="card">
            <table class="table table-hover table-striped ">
                <thead>
                    <tr>
                        <th> # </th>
                        <th> {{_('image')}}</th>
                        <th> {{_('name')}}</th>
                        <th> {{_('city')}}</th>
                        <th> {{_('category')}}</th>
                        <th> {{_('active')}}</th>
                        <th> {{_('Created at')}}</th>
                        <th> {{_('Action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($landmarks as $landmark)
                     <tr>
                        <td> {{$landmark->id}}</td>
                        @if($landmark->image)
                        <td> <img src="{{asset('frontend/img/landmarks/'.$landmark->image)}}"
                            height="60px"  width="60px"></td>
                        @else
                        <td> {{_('No  Image Upload')}}</td>
                        @endif

                        <td>
                            {{$landmark->name}}
                        </td>
                        <td>
                            @foreach($cities as  $city)
                            @if($landmark->city_id == $city->id)
                            {{$city->name}}
                            @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach($categories as  $cat)
                            @if($landmark->category == $cat->id)
                            {{$cat->name}}
                            @endif
                            @endforeach
                        </td>
                        <td>
                            @if($landmark->active)
                            <span class="badge badge-seccuss">{{_('active')}}</span>
                            @else
                            <span class="badge badge-danger">{{_('not active')}}</span>
                            @endif
                        </td>

                        <td> <a href="{{route('landmarks.edit', $landmark->id)}}" >
                             <span class="fa fa-edit"></span>
                            </a>
                            <form action="{{route('landmarks.destroy',$landmark->id)}}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    <span class="fa fa-trash"> </span>
                                </button>

                            </form>

                        </td>


                     </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
