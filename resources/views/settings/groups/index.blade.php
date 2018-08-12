@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-6">
    <div class="card">
    <h5 class="card-header">EWM Groups</h5>
    <div class="card-body">
      <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Groups Name</th>
        <th scope="col">Code</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><h5>1</h5></th>
        <td> <h5>Administrator</h5></td>
        <td> <h5>EWM43</h5></td>
        <td>
          <i class="fa fa-edit fa-2x text-warning"></i>
          <i class="fa fa-trash fa-2x text-danger"></i>
        </td>
      </tr>
      <tr>
        <th scope="row"><h5>2</h5></th>
        <td> <h5>Development Marchantdiser</h5></td>
        <td> <h5>EWM567</h5></td>
        <td>
          <i class="fa fa-edit fa-2x text-warning"></i>
          <i class="fa fa-trash fa-2x text-danger"></i>
        </td>
      </tr>
    </tbody>
  </table>
    </div>
  </div>
  </div>
  <div class="col-6">
    <div class="card">
  <div class="card-header">
    Add New Group
  </div>
  <div class="card-body">
    <form>
      <div class="form-group">
        <label for="">Group Name</label>
        <input type="text" class="form-control" id=""  placeholder="Enter group name">
      </div>
      <div class="form-group">
        <label for="">Code</label>
        <input type="text" class="form-control" id="" placeholder="EX: EWM123">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
  </div>
</div>
@endsection
