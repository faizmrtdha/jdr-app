@extends('dashboard.layout.main')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5>Role Create</h5>
            </div>
            <div class="card-body add-post">
              <form action="/dashboard/role" method="post" class="row needs-validation" >
                @csrf

                  {{-- @dd($data) --}}
                <div class="col-sm-12">
                  <div class="mb-3">
                    <label for="role-name">Role Name:</label>
                    <input class="form-control @error('role-name') is-invalid @enderror" id="role-name" name="role-name" type="text" placeholder="Role Name" value="{{ old('role-name') }}" >
                      @error('role-name')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="status">Status Role</label>
                    <select class="form-select digits" id="status" name="is_active">
                      <option value="1">Active</option>
                      <option value="0">Diactive</option>
                    </select>
                  </div>

                  <table class="table mb-4">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Page Access</th>
                        <th scope="col">User Access</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>User Management</td>
                        <td>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="um-view" name="um-view"
                            >
                            <label class="form-check-label" for="um-view">
                              View User Management
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="um-create" name="um-create"
                            >
                            <label class="form-check-label" for="um-create">
                              Create User Management
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="um-update" name="um-update"
                            >
                            <label class="form-check-label" for="um-update">
                              Edit User Management
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="um-delete" name="um-delete"
                            >
                            <label class="form-check-label" for="um-delete">
                              Delete User Management
                            </label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Content Management</td>
                        <td>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="cm-view" name="cm-view"
                            >
                            <label class="form-check-label" for="cm-view">
                              View Content Management
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="cm-create" name="cm-create"
                            >
                            <label class="form-check-label" for="cm-create">
                              Create Content Management
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="cm-update" name="cm-update"
                            >
                            <label class="form-check-label" for="cm-update">
                              Edit Content Management
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="cm-delete" name="cm-delete"
                            >
                            <label class="form-check-label" for="cm-delete">
                              Delete Content Management
                            </label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Role Management</td>
                        <td>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="rm-view" name="rm-view"
                            >
                            <label class="form-check-label" for="rm-view">
                              View Role Management
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="rm-create" name="rm-create"
                            >
                            <label class="form-check-label" for="rm-create">
                              Create Role Management
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="rm-update" name="rm-update"
                            >
                            <label class="form-check-label" for="rm-update">
                              Edit Role Management
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="rm-delete" name="rm-delete"
                            >
                            <label class="form-check-label" for="rm-delete">
                              Delete Role Management
                            </label>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="btn-showcase text-end">
                  <button class="btn btn-primary" type="submit">Update</button>
                  <a href="dashboard/role" class="btn btn-outline-secondary">Discard</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
  </div>
@endsection
