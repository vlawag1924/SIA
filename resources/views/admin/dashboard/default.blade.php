@extends('layouts.index')

@section('content')

<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome!!</h3>
                </div>
                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card bg-primary text-white mb-4">
                <div class="card-body text-center">Total Orders
                  <h1 class="text-center">{{$restaurants}}</h1>
                </div>
                
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
    <div class="card card-tale text-white mb-4">
        <div class="card-body text-center">Available
            <h1 class="text-center">{{$availableCount}}</h1>
        </div>
        
    </div>
</div>

<div class="col-xl-3 col-md-6">
    <div class="card card-light-danger text-white mb-4">
        <div class="card-body  text-center">Out of Stack
            <h1 class="text-center">{{$outofstackCount}}</h1>
        </div>
        
    </div>
</div>

              </div>
            </div> 
            
@endsection