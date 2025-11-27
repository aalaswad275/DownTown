
@extends('layout.backapp')

@section('content')
<div class="container-fluid">
    <div class="row"> <a href="{{route('landmarks.index')}}"> {{_('Go back')}}</a></div>
    <div class="row justify-content-center">
        <div class="col-12">
              <h2 class="h3 mb-4 page-title"> {{_(' Landmark')}}</h2>
              <div class="row mt-5 align-items-center">
                <div class="col-md-3 text-center mb-5">
                  <div class="avatar avatar-xl">
                    <img src="{{asset('frontend/img/landmarks/'.$landmarks->image)}}" alt="..." class="avatar-img round-square">
                  </div>
                </div>
                <div class="col">
                  <div class="row align-items-center">
                    <div class="col-md-7">
                      <h4 class="mb-1">{{$landmarks->name}}</h4>
                      <p class="small mb-3"><span class="badge badge-dark">@if(is_array($landmarks->tags))
    {{ implode(', ', $landmarks->tags) }}
@endif</span></p>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-md-7">
                      <p class=" ">{{$landmarks->description}} </p>
                    </div>
                    <div class="col">
                      <p class="small mb-0 "> {{_('image status')}} : <span class="badge @if($landmarks->active==1 ) badge-seccuss  @else badge-danager @endif"> {{_('status')}} </span></p>
                      <p class="small mb-0 text-muted">P.O. Box 464, 5975 Eget Avenue</p>
                      <p class="small mb-0 text-muted">(537) 315-1481</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row my-4">


                   @foreach($landmarks->gallery ?? [] as $img)
                   <div class="col-md-4">
                  <div class="card mb-4 shadow">
                    <div class="card-body my-n3">
                      <div class="row align-items-center">
                        <div class="col-12 text-center py-4 px-4">
                             <img src="{!! asset($img) !!}" width="100%" height="120px" class="mb-1">

                        </div> <!-- .col -->

                      </div> <!-- .row -->
                    </div> <!-- .card-body -->

                  </div> <!-- .card -->
                </div> <!-- .col-md-->

                @endforeach




              </div> <!-- .row-->
              <h3>Subscription</h3>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus.</p>
              <div class="card-deck my-4">
                <div class="card mb-4 shadow">
                  <div class="card-body text-center my-4">
                    <a href="#">
                      <h3 class="h5 mt-4 mb-0">Basic</h3>
                    </a>
                    <p class="text-muted">package</p>
                    <span class="h1 mb-0">$9.9</span>
                    <p class="text-muted">year</p>
                    <ul class="list-unstyled">
                      <li>Lorem ipsum dolor sit amet</li>
                      <li>Consectetur adipiscing elit</li>
                      <li>Integer molestie lorem at massa</li>
                      <li>Eget porttitor lorem</li>
                    </ul>
                    <span class="dot dot-lg bg-success"></span>
                    <span class="text-muted ml-3">Active</span>
                  </div> <!-- .card-body -->
                </div> <!-- .card -->
                <div class="card mb-4">
                  <div class="card-body text-center my-4">
                    <a href="#">
                      <h3 class="h5 mt-4 mb-0">Professional</h3>
                    </a>
                    <p class="text-muted">package</p>
                    <span class="h1 mb-0">$16.9</span>
                    <p class="text-muted">year</p>
                    <ul class="list-unstyled">
                      <li>Lorem ipsum dolor sit amet</li>
                      <li>Consectetur adipiscing elit</li>
                      <li>Integer molestie lorem at massa</li>
                      <li>Eget porttitor lorem</li>
                    </ul>
                    <button type="button" class="btn mb-2 btn-primary btn-lg">Ugrade</button>
                  </div> <!-- .card-body -->
                </div> <!-- .card -->
              </div> <!-- .card-group -->
              <h6 class="mb-3">Last payment</h6>
              <table class="table table-borderless table-striped">
                <thead>
                  <tr role="row">
                    <th>ID</th>
                    <th>Purchase Date</th>
                    <th>Total</th>
                    <th>Payment</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="col">1331</th>
                    <td>2020-12-26 01:32:21</td>
                    <td>$16.9</td>
                    <td>Paypal</td>
                    <td><span class="dot dot-lg bg-warning mr-2"></span>Due</td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="text-muted sr-only">Action</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Remove</a>
                          <a class="dropdown-item" href="#">Assign</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="col">1156</th>
                    <td>2020-04-21 00:38:38</td>
                    <td>$9.9</td>
                    <td>Paypal</td>
                    <td><span class="dot dot-lg bg-danger mr-2"></span>False</td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="text-muted sr-only">Action</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Remove</a>
                          <a class="dropdown-item" href="#">Assign</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="col">1038</th>
                    <td>2019-06-25 19:13:36</td>
                    <td>$9.9</td>
                    <td>Credit Card </td>
                    <td><span class="dot dot-lg bg-success mr-2"></span>Paid</td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="text-muted sr-only">Action</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Remove</a>
                          <a class="dropdown-item" href="#">Assign</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="col">1227</th>
                    <td>2021-01-22 13:28:00</td>
                    <td>$9.9</td>
                    <td>Paypal</td>
                    <td><span class="dot dot-lg bg-success mr-2"></span>Paid</td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="text-muted sr-only">Action</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Remove</a>
                          <a class="dropdown-item" href="#">Assign</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div> <!-- /.col-12 -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->

@endsection
