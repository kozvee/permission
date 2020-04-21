@extends('layouts.app')
@push('scripts')
  <script>
    $('#select-all').change(function () {
      if ($(this).prop('checked')) {
        $('.privilege').prop('checked', true);
      } else {
        $('.privilege').prop('checked', false);
      }
    });
    // $('#select-all').trigger('change');   
  </script>
@endpush
@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card mb-2">
        <div class="card-header text-center">
          Manage Permissions - {{ $role->name }} Role
        </div>
        <div class="card-body">
          <form action="{{ route('backend.role.sync-permission', $role) }}" method="post">
            @csrf
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="select-all">
                <label for="select-all" class="form-check-label">Select All</label>
              </div>
              @foreach($permissions as $permission)
                <div class="form-check">
                  <input class="form-check-input privilege" type="checkbox" value="{{ $permission->id }}" id="{{ $permission->slug }}" name="permissions[]" @if($role->permissions->contains($permission)) {{ "checked" }}  @endif>
                  <label class="form-check-label" for="{{ $permission->slug }}">
                    {{ $permission->name }}
                  </label>
                </div>
              @endforeach
            </div>
            <button class="btn btn-block btn-secondary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
