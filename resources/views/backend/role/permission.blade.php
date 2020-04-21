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

    $('#select-all').trigger('change');   
  </script>    
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-2">
              <div class="card-header">Add Permission(s) to {{ $role->name }} Role</div>
              <div class="card-body">
                <form action="{{ route('backend.role.store-permission', $role) }}" method="post">
                  @csrf

                  <div class="form-group">
                    <label for="resource">Choose Resource</label>
                    <select class="form-control" id="resource" name="resource">
                      <option value="role">Role</option>
                      <option value="user">User</option>
                      <option value="customer">Customer</option>
                      <option value="issue">Issue</option>
                      <option value="router">Router</option>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="select-all" name="select-all">
                      <label class="form-check-label" for="select-all">
                        Select All
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input privilege" type="checkbox" value="view" id="view" name="permissions[]">
                      <label class="form-check-label" for="view">
                        View
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input privilege" type="checkbox" value="create" id="create" name="permissions[]">
                      <label class="form-check-label" for="create">
                        Create
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input privilege" type="checkbox" value="edit" id="edit" name="permissions[]">
                      <label class="form-check-label" for="edit">
                        Edit
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input privilege" type="checkbox" value="delete" id="delete" name="permissions[]">
                      <label class="form-check-label" for="delete">
                        Delete
                      </label>
                    </div>
                  </div>

                  <button class="btn btn-block btn-secondary">Grant</button>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
