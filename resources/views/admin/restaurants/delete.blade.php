@extends('layouts.index')

@section('content')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Dashboard
        </h3>
        <nav aria-label="breadcrumb">
            <!-- Breadcrumb content goes here if needed -->
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Delete Boarding House</h4>
                    <div class="table-responsive pt-3">
                        <form action="{{ route('restaurants.delete', ['id'=> $restaurant->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name of Order</th>
                                    <th>Customer</th>
                                    <th>Description</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $restaurant->id }}</td>
                                    <td>{{ $restaurant->name_of_order }}</td>
                                    <td>{{ $restaurant->customer }}</td>
                                    <td>{{ $restaurant->description }}</td>
                                    <td>{{ $restaurant->address }}</td>
                                    <td>{{ $restaurant->contact_number }}</td>
                                    <td>
                                        <a href="{{ route('restaurants.index') }}" class="btn btn-secondary">Cancel</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
