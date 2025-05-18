<?php
$date = \Carbon\Carbon::now();
$departments = \App\Models\Department::all();
?>
<!-- Add Department-->
<div class="modal fade" id="depadd" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="depaddLabel"> Department Add</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <form method="POST" action="{{route('admin.our-employee.department.store')}}">
                        @csrf
                            <label for="exampleFormControlInput1111" class="form-label">Department Name</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1111">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Employee-->
<div class="modal fade" id="createemp" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Add Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('admin.our-employee.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Employee Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Employee Profile</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-sm-6">
                            <label class="form-label">Employee ID</label>
                            <input type="text" name="employeeId" class="form-control" placeholder="Employee ID" required>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Joining Date</label>
                            <input type="date" name="joining_date" class="form-control">
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col">
                            <label class="form-label">User Name</label>
                            <input type="text" name="user_name" class="form-control" placeholder="User Name" required>
                        </div>
                        <div class="col">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col">
                            <label class="form-label">Email ID</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col">
                            <label class="form-label">Department</label>
                            <select name="department_id" class="form-select" required>
                                <option disabled selected>Select Department</option>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label">Designation</label>
                            <select name="designation" class="form-select" required>
                                <option disabled selected>Select Designation</option>
                                <option value="UI/UX Design">UI/UX Design</option>
                                <option value="Website Design">Website Design</option>
                                <option value="App Development">App Development</option>
                                <option value="Quality Assurance">Quality Assurance</option>
                                <option value="Development">Development</option>
                                <option value="Backend Development">Backend Development</option>
                                <option value="Software Testing">Software Testing</option>
                                <option value="Marketing">Marketing</option>
                                <option value="SEO">SEO</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description (optional)</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Additional notes..."></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
