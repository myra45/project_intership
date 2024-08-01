@extends('admin.layout.app')

@section('heading', 'Table')

@section('main_content')
<div class="section-body">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="example1">
                          <thead>
                              <tr>
                                  <th>SL</th>
                                  <th>Name</th>
                                  <th>Other</th>
                                  <th>Action</th>
                              </tr>
                          </thead>

                          <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>Shine</td>
                                      <td>Sick</td>
                                      <td class="pt_10 pb_10">
                                          <a href="" class="btn btn-primary">Edit</a>
                                          <a href="" class="btn btn-danger"
                                              onClick="return confirm('Are you sure?');">Delete</a>
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
