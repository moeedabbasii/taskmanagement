@extends('layouts/layoutMaster')

{{-- @section('title', 'Invoice List - Pages') --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">


@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}" class="m-5"></script>
@endsection

@section('page-script')
    {{-- <script src="{{asset('assets/js/app-invoice-list.js')}}"></script> --}}
@endsection
<style>
    /* Style the previous and next buttons */
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 5px 12px;
        margin-right: 5px;
        border: 2px solid #5A8DEE !important;
        border-radius: 4px;
        background-color: white;
        color: #5A8DEE !important;
        cursor: pointer;
    }

    /*Style the active page button */
    .dataTables_wrapper .dataTables_paginate .paginate_button:current {
        background-color: #5A8DEE !imortant;
        color: black !important;
    }

    /* Style the hover state of the buttons */
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background-color: #5A8DEE !important;

        color: white !important;
    }

    /* Change border color of "Show entries" dropdown when active */
    .dataTables_wrapper .dataTables_length select {
        border: 2px solid #5A8DEE !important;
        outline: none !important;
        box-shadow: none !important;
    }

    .dataTables_wrapper .dataTables_length select:hover {
        border: 2px solid #5A8DEE !important;
        outline: none !important;
        box-shadow: none !important;
    }

    /* Add blue border on hover for search bar */
    .dataTables_wrapper .dataTables_filter input[type="search"] {
        border: 2px solid #5A8DEE;
    }

    .dataTables_wrapper .dataTables_filter input[type="search"]:active {
        border: 2px solid #5A8DEE;
    }

    .dataTables_wrapper .dataTables_filter input[type="search"]:hover {
        border: 2px solid #5A8DEE;
    }

    .text-section {
        padding-right: 28px !important;
    }

    .field-select {
        width: auto !important;
        margin-top: -22px !important;


    }

    @media screen and (max-width: 768px) {
        .field-select {

            width: 100% !important;
            margin-top: 0 !important;
        }

        .btn {
            width: 100% !important;
            margin-top: 0 !important;
        }
    }
</style>
@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Tasks</span>
    </h4>
    <div class="container-fluide mt-4">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <div class="mb-3">
                    <form action="{{ url('addTask') }}" method="GET">
                        <button type="submit" class="btn  btn-lg" style=" background-color: #5A8DEE; color:#FFFFFF;">Add
                            New Tasks</button>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <!-- Invoice List Table -->
    <div class="card p-3">
        <div class="card-datatable table-responsive">


            <table id="hostelTable" class="invoice-list-table table border-top p-5">
                <thead>
                  <tr class="p-3">
                    <th>Title</th>
                    <!--<th><i class='bx bx-trending-up'></i></th>-->
                    <th class="">Description</th>
                    <th class="">Priority</th>
                    <th class="">Due Date</th>
                    <th class="">Completed</th>
                    <th class=" ">Actions</th>
                </tr>
                </thead>

                @foreach ($tasks as $task)
                    <tr>
                      <td>{{ $task->title }}</td>
                      <td>{{ $task->description }}</td>
                      <td>{{ $task->priority }}</td>
                      <td>{{ $task->dueDate }}</td>
                      <td>
                          <!-- Form for updating task completion status -->
                          <form action="{{ url('updateCompletion', $task->id) }}" method="post">
                              @csrf
                              {{-- @method('PATCH') --}}

                              <input type="checkbox" name="completed" {{ $task->completed ? 'checked' : '' }} onchange="this.form.submit()">
                          </form>
                      </td>
                      <td>
                            <div class="d-flex align-items-center">
                                <a href="{{ url('editTask/' . $task->id) }}" data-bs-toggle="tooltip"
                                    class="text-body text-primary" data-bs-placement="top" title="Edit"><i
                                        class="bx bx-edit mx-1"></i></a>

                                <a href="{{ url('deleteTask/' . $task->id) }}"
                                    class="dropdown-item delete-record text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Delete">
                                    <i class="bx bx-trash me-1"></i></a>



                            </div>
                        </td>

                    </tr>
                @endforeach

            </table>
        </div>


        <h6>Most Repeated Priority: {{ $mostRepeatedPriority }}</h6>



    <script>
        let table = new DataTable('#hostelTable');
    </script>
    <script>
        $(document).ready(function() {
            $('#hostelTable').DataTable({
                "pagingType": "full_numbers",
                "language": {
                    "paginate": {
                        "previous": "&lt;",
                        "next": "&gt;"
                    }
                },
                "pageLength": 50, // Set the default number of records to be displayed
            });
        });
    </script>





@endsection
