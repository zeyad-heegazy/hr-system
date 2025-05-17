@extends('layouts.app')

@section('content')
    <!-- Body: Body -->
    <div class="body d-flex py-lg-3 py-md-2">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Departments</h3>
                        <div class="col-auto d-flex w-sm-100">
                            <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#depadd"><i class="icofont-plus-circle me-2 fs-6"></i>Add Departments</button>
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
                                    <th>Department Name</th>
{{--                                    <th>Employee UnderWork</th>--}}
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($departments as $department)
                                    <tr>
                                        <td>
                                            <span class="fw-bold">{{$department->id}}</span>
                                        </td>
                                        <td>
                                            {{$department->name}}
                                        </td>
{{--                                        <td>--}}
{{--                                            40--}}
{{--                                        </td>--}}
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                <button type="button"
                                                        class="btn btn-outline-secondary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editDepartmentModal"
                                                        onclick="setEditDepartment('{{ $department->id }}', '{{ $department->name }}')">
                                                    <i class="icofont-edit text-success"></i>
                                                </button>
                                                <form method="POST" action="{{route('admin.our-employee.department.destroy', $department->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-secondary"><i class="icofont-ui-delete text-danger"></i></button>
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

    <!-- Edit Department Modal -->
    <div class="modal fade" id="editDepartmentModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.our-employee.department.update') }}">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="id" id="editDepartmentId">

                    <div class="modal-header">
                        <h5 class="modal-title">Edit Department</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="editDepartmentName" class="form-label">Department Name</label>
                            <input type="text" class="form-control" name="name" id="editDepartmentName" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/dataTables.bundle.js') }}"></script>

    <script>
        function setEditDepartment(id, name) {
            document.getElementById('editDepartmentId').value = id;
            document.getElementById('editDepartmentName').value = name;
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tableElement = document.getElementById('myProjectTable');
            const dataTable = new DataTable(tableElement, {
                responsive: true,
                columnDefs: [
                    { targets: [-1, -3], className: 'dt-body-right' }
                ]
            });
        });
    </script>


@endsection
