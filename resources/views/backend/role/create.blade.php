@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-2">
              <div class="card-header">Create Role</div>
              <div class="card-body">
                <form action="{{ route('backend.role.store') }}" method="post">
                  @csrf
                  <input type="text" name="name" placeholder="Name" />
                  <input type="text" name="slug" placeholder="Slug" />
                  <button class="btn btn-secondary">Save</button>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
