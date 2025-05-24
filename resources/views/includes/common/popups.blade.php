<?php
$date = \Carbon\Carbon::now();
$departments = \App\Models\Department::all();
$employees = \App\Models\Employee::all();
$projects = \App\Models\Project::all();
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
<div class="modal fade" id="createemp" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content" style="max-height: 70vh; overflow-y: scroll;">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="createprojectlLabel">Add Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('admin.our-employee.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    {{-- BASIC INFO --}}
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

                    {{-- EXPERIENCE SECTION --}}
                    <hr>
                    <h6 class="fw-bold text-primary">Experience (Optional)</h6>
                    <div id="experience-wrapper">
                        <div class="row g-3 mb-3 experience-entry">
                            <div class="col-md-4">
                                <label class="form-label">Company</label>
                                <input type="text" name="experience_name[]" class="form-control" placeholder="Company or Position Name">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">From</label>
                                <input type="date" name="experience_from[]" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">To</label>
                                <input type="date" name="experience_to[]" class="form-control">
                            </div>
                            <div class="col-md-2 d-flex align-items-end">
                                <button type="button" class="btn btn-danger remove-experience w-100">Remove</button>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <button type="button" class="btn btn-outline-primary" id="add-experience">Add More Experience</button>
                    </div>

                    {{-- PERSONAL INFO SECTION --}}
                    <hr>
                    <h6 class="fw-bold text-primary">Personal Info (Optional)</h6>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Passport Number</label>
                            <input type="text" name="passport_number" class="form-control" placeholder="Passport Number">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control">
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Marital Status</label>
                            <input type="text" name="marital_status" class="form-control" placeholder="Single / Married / etc.">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Religion</label>
                            <input type="text" name="religion" class="form-control" placeholder="Religion">
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Nationality</label>
                            <input type="text" name="nationality" class="form-control" placeholder="Nationality">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Emergency Contact</label>
                            <input type="text" name="emergency_contact" class="form-control" placeholder="Emergency Phone Number">
                        </div>
                    </div>

                    {{-- BANK INFO SECTION --}}
                    <hr>
                    <h6 class="fw-bold text-primary">Bank Info (Optional)</h6>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Bank Name</label>
                            <input type="text" name="bank_name" class="form-control" placeholder="Bank Name">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Account Number</label>
                            <input type="text" name="account_number" class="form-control" placeholder="Account Number">
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">IFSC Code</label>
                            <input type="text" name="ifsc_code" class="form-control" placeholder="IFSC Code">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">PAN Number</label>
                            <input type="text" name="pan_number" class="form-control" placeholder="PAN Number">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">UPI ID</label>
                        <input type="text" name="upi_id" class="form-control" placeholder="example@bank">
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

<!-- Create Project-->
<div class="modal fade" id="createproject" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content" style="max-height: 70vh; overflow-y: scroll;">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Create Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{route('admin.project.store')}}" enctype="multipart/form-data">
                @csrf
              <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput77" class="form-label">Project Name</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput77" placeholder="Explain what the Project Name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Project Category</label>
                        <select name="category" class="form-select" required>
                            <option disabled selected>Select Category</option>
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
                <div class="mb-3">
                    <label for="formFileMultipleone" class="form-label">Project Images & Document</label>
                    <input class="form-control" name="files" type="file" id="formFileMultipleone" multiple>
                </div>
                <div class="deadline-form">
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label  class="form-label">Project Start Date</label>
                                <input type="date" name="start_date" class="form-control">
                            </div>
                            <div class="col">
                                <label  class="form-label">Project End Date</label>
                                <input type="date" name="end_date" class="form-control" >
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-12">
                                <label for="formFileMultipleone" class="form-label">Task Assign Person</label>
                                <select class="form-select" name="lead_employee_id" multiple aria-label="Default select Priority">
                                    @foreach($employees as $employee)
                                      <option value="{{$employee->id}}">{{$employee->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-sm">
                        <label for="formFileMultipleone" class="form-label">Budget</label>
                        <input type="number" name="budget" class="form-control">
                    </div>
                    <div class="col-sm">
                        <label for="formFileMultipleone" class="form-label">Priority</label>
                        <select class="form-select" name="priority" aria-label="Default select Priority">
                            <option selected value="Highest">Highest</option>
                            <option value="Medium">Medium</option>
                            <option value="Low">Low</option>
                            <option value="Lowest">Lowest</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea78" class="form-label">Description (optional)</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea78" rows="3" placeholder="Add any extra details about the request"></textarea>
                </div>
            </div>
              <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                 <button type="submit" class="btn btn-primary">Create</button>
              </div>
            </form>
        </div>
    </div>
</div>

<!-- Create task-->
<div class="modal fade" id="createtask" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content" style="max-height: 70vh; overflow-y: scroll;">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Create Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{route('admin.project.task.store')}}" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Project Name</label>
                    <select class="form-select"  name="project_id" aria-label="Default select Project Category">
                        @foreach($projects as $project)
                         <option value="{{$project->id}}">{{$project->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Task Category</label>
                    <select class="form-select" name="category" aria-label="Default select Project Category">
                        <option disabled selected>Select Category</option>
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
                <div class="mb-3">
                    <label for="formFileMultipleone" class="form-label">Task Images & Document</label>
                    <input class="form-control" name="files" type="file" id="formFileMultipleone" multiple>
                </div>
                <div class="deadline-form mb-3">
                        <div class="row">
                            <div class="col">
                                <label class="form-label">Task Start Date</label>
                                <input type="date" name="start_date" class="form-control">
                            </div>
                            <div class="col">
                                <label  class="form-label">Task End Date</label>
                                <input type="date" name="end_date" class="form-control" >
                            </div>
                        </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-sm">
                        <label class="form-label">Task Assign Person</label>
                        <select class="form-select" name="employee_id" aria-label="Default select Priority">
                            @foreach($employees as $employee)
                                <option value="{{$employee->id}}">{{$employee->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-sm">
                        <label class="form-label">Task Priority</label>
                        <select class="form-select" name="priority" aria-label="Default select Priority">
                            <option value="Highest" selected>Highest</option>
                            <option value="Medium">Medium</option>
                            <option value="Low">Low</option>
                            <option value="Lowest">Lowest</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea786" class="form-label">Description (optional)</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea786" rows="3" placeholder="Add any extra details about the request"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Add Holiday-->
<div class="modal fade" id="addholiday" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="addholidayLabel"> Add Holidays</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{route('admin.our-employee.holidays.store')}}">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label  class="form-label">Holiday Name</label>
                        <input type="text" name="name" class="form-control"  placeholder="Republic Day">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2778" class="form-label">Holiday Date</label>
                        <input type="date" name="date" class="form-control" id="exampleFormControlInput2778">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
