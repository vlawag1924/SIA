@extends('layouts.index')

@section('content')
  <div class="content-wrapper">
    <div class="row">
        <div class="col-lg-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label>Name of Order:</label>
                        <h4>{{ $restaurant->name_of_order }}</h4>
                    </div>
                    <div class="form-group">
                        <label>Owner:</label>
                        <h4>{{ $restaurant->customer }}</h4>
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <h4>{{ $restaurant->description }}</h4>
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <h4>{{ $restaurant->address }}</h4>
                    </div>
                    <div class="form-group">
                        <label>Contact Number:</label>
                        <h4>{{ $restaurant->contact_number }}</h4>
                    </div>
                     <div class="form-group">
                        <label>Status:</label>
                        <h4>{{ $restaurant->status }}</h4>
                    </div>
                    <div class="form-group">
                        <label>Image:</label>
                        <div class="image">
                            <img style="width: 100%" src="/{{ $restaurant->img }}" alt="Restaurant Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     </div>
@endsection
