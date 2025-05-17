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
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Add Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label  class="form-label">Employee Name</label>
                    <input type="text" class="form-control"  placeholder="Explain what the Project Name">
                </div>
                <div class="mb-3">
                    <label for="formFileMultipleoneone" class="form-label">Employee Profile</label>
                    <input class="form-control" type="file" id="formFileMultipleoneone" >
                </div>
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label for="exampleFormControlInput1778" class="form-label">Employee ID</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1778" placeholder="User Name">
                            </div>
                            <div class="col-sm-6">
                                <label for="exampleFormControlInput2778" class="form-label">Joining Date</label>
                                <input type="date" class="form-control" id="exampleFormControlInput2778">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label for="exampleFormControlInput177" class="form-label">User Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput177" placeholder="User Name">
                            </div>
                            <div class="col">
                                <label  class="form-label">Password</label>
                                <input type="Password" class="form-control"  placeholder="Password">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label  class="form-label">Email ID</label>
                                <input type="email" class="form-control"  placeholder="User Name">
                            </div>
                            <div class="col">
                                <label  class="form-label">Phone</label>
                                <input type="text" class="form-control"  placeholder="User Name">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label  class="form-label">Department</label>
                                <select class="form-select" aria-label="Default select Project Category">
                                    <option selected>Web Development</option>
                                    <option value="1">It Management</option>
                                    <option value="2">Marketing</option>
                                </select>
                            </div>
                            <div class="col">
                                <label  class="form-label">Designation</label>
                                <select class="form-select" aria-label="Default select Project Category">
                                    <option selected>UI/UX Design</option>
                                    <option value="1">Website Design</option>
                                    <option value="2">App Development</option>
                                    <option value="3">Quality Assurance</option>
                                    <option value="4">Development</option>
                                    <option value="5">Backend Development</option>
                                    <option value="6">Software Testing</option>
                                    <option value="7">Website Design</option>
                                    <option value="8">Marketing</option>
                                    <option value="9">SEO</option>
                                    <option value="10">Other</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
{{--                <div class="mb-3">--}}
{{--                    <label for="exampleFormControlTextarea78" class="form-label">Description (optional)</label>--}}
{{--                    <textarea class="form-control" id="exampleFormControlTextarea78" rows="3" placeholder="Add any extra details about the request"></textarea>--}}
{{--                </div>--}}
{{--                <div class="table-responsive">--}}
{{--                    <table class="table table-striped custom-table">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>Project Permission</th>--}}
{{--                            <th class="text-center">Read</th>--}}
{{--                            <th class="text-center">Write</th>--}}
{{--                            <th class="text-center">Create</th>--}}
{{--                            <th class="text-center">Delete</th>--}}
{{--                            <th class="text-center">Import</th>--}}
{{--                            <th class="text-center">Export</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td class="fw-bold">Projects</td>--}}
{{--                            <td class="text-center">--}}
{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked>--}}
{{--                            </td>--}}
{{--                            <td class="text-center">--}}
{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" checked>--}}
{{--                            </td>--}}
{{--                            <td class="text-center">--}}
{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" checked>--}}
{{--                            </td>--}}
{{--                            <td class="text-center">--}}
{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4" checked>--}}
{{--                            </td>--}}
{{--                            <td class="text-center">--}}
{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5" checked>--}}
{{--                            </td>--}}
{{--                            <td class="text-center">--}}
{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6" checked>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td  class="fw-bold">Tasks</td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault10" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12" checked>--}}

{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td  class="fw-bold">Chat</td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault13" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault14" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault15" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault16" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault17" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault18" checked>--}}

{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td  class="fw-bold">Estimates</td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault19" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault20" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault21" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault22" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault23" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault24" checked>--}}

{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td  class="fw-bold">Invoices</td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault25" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault26">--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault27" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault28">--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault29" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault30" checked>--}}

{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td  class="fw-bold">Timing Sheets</td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault31" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault32" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault33" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault34" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault35" checked>--}}

{{--                            </td>--}}
{{--                            <td class="text-center">--}}

{{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault36" checked>--}}

{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="button" class="btn btn-primary">Create</button>
            </div>
        </div>
    </div>
</div>
