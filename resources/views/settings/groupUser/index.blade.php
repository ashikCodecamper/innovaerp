@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-8">
    <div class="card">
    <h5 class="card-header">EWM User Based on Group</h5>
    <div class="card-body">
      <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">SL</th>
        <th scope="col">User Name</th>
        <th scope="col">Groups Name</th>
        <th scope="col">Code</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Ashikur rahaman</th>
        <td>Administrator</td>
        <td>EWM43</td>
        <td>
          <i class="fa fa-edit fa-2x text-warning"></i>
          <i class="fa fa-trash fa-2x text-danger"></i>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Majedur rahaman</th>
        <td>Development Marchantdiser</td>
        <td>EWM567</td>
        <td>
          <i class="fa fa-edit fa-2x text-warning"></i>
          <i class="fa fa-trash fa-2x text-danger"></i>
        </td>
      </tr>

  </table>
    </div>
  </div>
  </div>
  <div class="col-4">
    <div class="card">
  <div class="card-header">
    Assign User to a Group
  </div>
  <div class="card-body">
    <form>
      <div class="form-group">
        <label for="">Select User</label>
        <select class="form-control sel2">
          <option>Please select</option>
          <option value="1">Ashikur Rahaman</option>
          <option value="2">Majedur Rahman</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">Groups</label>
        <select class="form-control sel2multiple" multiple="multiple">
          <option>Administrator</option>
          <option>Accountant</option>
          <option>Development Marchantdiser</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
  </div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
$('.sel2multiple').select2({
createTag: function (params) {
  var term = $.trim(params.term);

  if (term === '') {
    return null;
  }

  return {
    id: term,
    text: term,
    newTag: true // add additional parameters
  }
}
});
$(".sel2").select2({
  tags: true
});
</script>

@endsection
