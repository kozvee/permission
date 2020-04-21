@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row mb-4">
    <div class="col-md-4 mx-auto text-center">
      <a href="{{ route('backend.role.create') }}" class="btn btn-secondary">Create</a>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      @foreach($roles as $role)
        <div class="card mb-2">
          <div class="card-header">
            {{ $role->name }} <span class="float-right"><a href="{{ route('backend.role.add-permission', $role) }}" class="btn btn-info text-white">Permissions</a></span>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
