@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @foreach($customers as $customer)
            <div class="card mb-2">
              <div class="card-header">{{ $customer->name }}</div>
            </div>
          @endforeach
        </div>
    </div>
</div>
@endsection
