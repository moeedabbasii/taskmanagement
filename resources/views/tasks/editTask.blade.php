@extends('layouts/layoutMaster')

{{-- @section('title', ' Vertical Layouts - Forms') --}}

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/form-layouts.js')}}"></script>
@endsection

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container mt-5">
  <h2 class="intro-y text-lg font-medium mt-10">
      Update Task
  </h2>

  <br>

  <form class="add-form" method="POST" id="taskForm" action="{{ url('updateTask/'.$task->id) }}" enctype="multipart/form-data">
      @csrf

      <div class="row">
        <div class="col-md-4">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title" aria-label="Title" value="{{ old('title',$task->title) }}">
        </div>
        <div class="col-md-4">
            <label class="form-label">Priority</label>

            <input type="text" class="form-control" name="priority"  placeholder="Priority" aria-label="Priority" value="{{ old('priority',$task->priority) }}">
        </div>
        <div class="col-md-4">
          <label class="form-label">Due Date</label>
          <input type="date" class="form-control" name="dueDate" id="dueDate"  placeholder="Due Date" aria-label="dueDate" value="{{ old('dueDate',$task->dueDate) }}">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <label class="form-label">Description</label>
            <textarea id="remarks" name="description" class="form-control" rows="2" cols="167" placeholder="Description">{{ old('description',$task->description) }}</textarea>
        </div>
    </div>


      <div class="col-md-12 d-flex justify-content-center m-4 mb-6">
        <a href="{{url('/')}}" class="btn btn-primary mt-3 d-inline-block mr-2" >Cancel</a>
        <button type="reset" class="btn btn-secondary mt-3 d-inline-block mx-2">Reset</button>
        <button type="submit" id="addTenantBtn" class="btn btn-success mt-3 d-inline-block ml-2 ">Save </button>
      </div>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.getElementById('taskForm').addEventListener('submit', function (event) {
      var dueDateInput = document.getElementById('dueDate');
      var currentDate = new Date();
      var selectedDate = new Date(dueDateInput.value);

      // Check if the selected date is in the future
      if (selectedDate <= currentDate) {
          alert('Please select a future date for the due date.');
          event.preventDefault(); // Prevent form submission
      }
  });
</script>

<style>
    .add-form{
  background-color: white;
  padding: 2rem;
  box-shadow: 5px solid black;
  border-radius: 10px;
}
.form-label{
    font-weight: 900;
}
</style>

@endsection
