@extends('layout.backapp')

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
        <div class="card col-md-12">
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
                        <td> <a href="{{route('landmarks.show',$landmark->id)}}"><img src="{{asset('frontend/img/landmarks/'.$landmark->image)}}"
                            height="60px"  width="60px"></a></td>
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
                            @foreach($catgories as  $cat)
                            @if($landmark->category == $cat->id)
                            {{$cat->name}}
                            @endif
                            @endforeach
                        </td>
                        <td>
                            @if($landmark->active==1)
                            <span class="badge badge-pill badge-success">{{_('active')}}</span>
                            @else
                            <span class="badge badge-danger">{{_('not active')}}</span>
                            @endif
                        </td>
                        <td> {{$landmark->created_at->format('Y-m-d')}}</td>

                        <td> <a href="{{route('landmarks.edit', $landmark->id)}}" >
                             <span class="fe fe-edit"></span>
                            </a>
                            <form action="{{route('landmarks.destroy',$landmark->id)}}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    <span class="fe fe-trash"> </span>
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
