@extends('layouts.app')
@section('content')
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Holidays</h3>
                    <div class="col-auto d-flex w-sm-100">
                        <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#addholiday"><i class="icofont-plus-circle me-2 fs-6"></i>Add Holidays</button>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row clearfix g-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Holiday Day</th>
                                <th>Holiday Date</th>
                                <th>Holiday Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($holidays as $holiday)
                                @php
                                    $date = \Carbon\Carbon::parse($holiday->date);
                                @endphp
                                <tr>
                                    <td class="text-danger">{{$holiday->id}}</td>
                                    <td class="text-danger">{{ $date->format('l') }}</td>
                                    <td class="text-danger">{{ $date->format('F d, Y') }}</td>
                                    <td class="text-danger">{{ $holiday->name }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <button type="button"
                                                    class="btn btn-outline-secondary edit-holiday-btn"
                                                    data-id="{{ $holiday->id }}"
                                                    data-name="{{ $holiday->name }}"
                                                    data-date="{{ $holiday->date }}"
                                                    data-action="{{ route('admin.our-employee.holidays.update', $holiday->id) }}"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editholiday">
                                                <i class="icofont-edit text-success"></i>
                                            </button>
                                            <form method="POST" action="{{route('admin.our-employee.holidays.destroy', $holiday->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- Row End -->
    </div>
</div>

<!-- Edit Holiday-->
<div class="modal fade" id="editholiday" tabindex="-1"  aria-hidden="true">
        <form method="POST" id="editholidayForm">
            @csrf
            @method('PATCH')
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Edit Holiday</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Holiday Name</label>
                        <input type="text" class="form-control" name="name" id="editHolidayName">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Holiday Date</label>
                        <input type="date" class="form-control" name="date" id="editHolidayDate">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
            </div>
        </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('editholiday');
        const nameInput = document.getElementById('editHolidayName');
        const dateInput = document.getElementById('editHolidayDate');
        const form = document.getElementById('editholidayForm');

        document.querySelectorAll('.edit-holiday-btn').forEach(button => {
            button.addEventListener('click', () => {
                nameInput.value = button.dataset.name;
                dateInput.value = button.dataset.date;
                form.action = button.dataset.action;
            });
        });
    });
</script>
@endsection
