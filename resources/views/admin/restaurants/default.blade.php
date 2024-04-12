@extends('layouts.index')

@section('content')

<div class="content-wrapper">
    <div class="page-header">
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <a href="{{ route('restaurants.create') }}" class="btn btn-primary btn-icon-text">
                <i class="mdi mdi-plus btn-icon-prepend"></i> Add New
            </a>
             <ul class="navbar-nav mr-lg-4 ">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">

            </div>
          </li>
        </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Orders</h4>
                    <p class="card-description">
                        <!-- <code>6604</code> -->
                    </p>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <!-- <th>ID</th> -->
                                    <th>Order Name</th>
                                    
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Status</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($restaurants as $restaurant)
                                <tr>
                                    <!-- <td>{{ $restaurant->id }}</td> -->
                                    <td>{{ $restaurant->name_of_order}}</td>
                                    
                                    <td>{{ $restaurant->address }}</td>
                                    <td>{{ $restaurant->contact_number }}</td>
                          <td><label class="badge badge-info">{{ $restaurant->status }}</label></td>

                                    <td>
                                        <a href="{{ route('restaurants.view', ['id'=> $restaurant->id]) }}">View</a>
                                        <a href="{{ route('restaurants.delete', ['id'=> $restaurant->id]) }}">Delete</a>
                                        <a href="{{ route('restaurants.edit', ['id'=> $restaurant->id]) }}">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {!! $restaurants->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
