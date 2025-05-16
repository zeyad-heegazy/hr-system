<!-- Modal Members-->
<?php
$date = \Carbon\Carbon::now();
?>
<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="addUserLabel">Employee Invitation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="inviteby_email">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email address"  aria-describedby="exampleInputEmail1">
                        <button class="btn btn-dark" type="button" id="button-addon2">Sent</button>
                    </div>
                </div>
                <div class="members_list">
                    <h6 class="fw-bold ">Employee </h6>
                    <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                        <li class="list-group-item py-3 text-center text-md-start">
                            <div class="d-flex align-items-center flex-column flex-sm-column flex-md-row">
                                <div class="no-thumbnail mb-2 mb-md-0">
                                    <img class="avatar lg rounded-circle" src="{{ url('/').'/images/xs/avatar2.jpg' }}" alt="">
                                </div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <h6 class="mb-0  fw-bold">Rachel Carr(you)</h6>
                                    <span class="text-muted">rachel.carr@gmail.com</span>
                                </div>
                                <div class="members-action">
                                    <span class="members-role ">Admin</span>
                                    <div class="btn-group">
                                        <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="icofont-ui-settings  fs-6"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item py-3 text-center text-md-start">
                            <div class="d-flex align-items-center flex-column flex-sm-column flex-md-row">
                                <div class="no-thumbnail mb-2 mb-md-0">
                                    <img class="avatar lg rounded-circle" src="{{ url('/').'/images/xs/avatar3.jpg' }}" alt="">
                                </div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <h6 class="mb-0  fw-bold">Lucas Baker<a href="#" class="link-secondary ms-2">(Resend invitation)</a></h6>
                                    <span class="text-muted">lucas.baker@gmail.com</span>
                                </div>
                                <div class="members-action">
                                    <div class="btn-group">
                                        <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Members
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="icofont-check-circled"></i>

                                                    <span>All operations permission</span>
                                                </a>

                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fs-6 p-2 me-1"></i>
                                                    <span>Only Invite & manage team</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="icofont-ui-settings  fs-6"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Delete Member</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item py-3 text-center text-md-start">
                            <div class="d-flex align-items-center flex-column flex-sm-column flex-md-row">
                                <div class="no-thumbnail mb-2 mb-md-0">
                                    <img class="avatar lg rounded-circle" src="{{ url('/').'/images/xs/avatar8.jpg' }}" alt="">
                                </div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <h6 class="mb-0  fw-bold">Una Coleman</h6>
                                    <span class="text-muted">una.coleman@gmail.com</span>
                                </div>
                                <div class="members-action">
                                    <div class="btn-group">
                                        <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Members
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="icofont-check-circled"></i>

                                                    <span>All operations permission</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fs-6 p-2 me-1"></i>
                                                    <span>Only Invite & manage team</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icofont-ui-settings  fs-6"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Suspend member</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="icofont-not-allowed fs-6 me-2"></i>Delete Member</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Members-->
<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="addUserLabel">Employee Invitation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="inviteby_email">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email address"  aria-describedby="exampleInputEmail1">
                        <button class="btn btn-dark" type="button" id="button-addon2">Sent</button>
                    </div>
                </div>
                <div class="members_list">
                    <h6 class="fw-bold ">Employee </h6>
                    <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                        <li class="list-group-item py-3 text-center text-md-start">
                            <div class="d-flex align-items-center flex-column flex-sm-column flex-md-row">
                                <div class="no-thumbnail mb-2 mb-md-0">
                                    <img class="avatar lg rounded-circle" src="{{ url('/').'/images/xs/avatar2.jpg' }}" alt="">
                                </div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <h6 class="mb-0  fw-bold">Rachel Carr(you)</h6>
                                    <span class="text-muted">rachel.carr@gmail.com</span>
                                </div>
                                <div class="members-action">
                                    <span class="members-role ">Admin</span>
                                    <div class="btn-group">
                                        <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="icofont-ui-settings  fs-6"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item py-3 text-center text-md-start">
                            <div class="d-flex align-items-center flex-column flex-sm-column flex-md-row">
                                <div class="no-thumbnail mb-2 mb-md-0">
                                    <img class="avatar lg rounded-circle" src="{{ url('/').'/images/xs/avatar3.jpg' }}" alt="">
                                </div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <h6 class="mb-0  fw-bold">Lucas Baker<a href="#" class="link-secondary ms-2">(Resend invitation)</a></h6>
                                    <span class="text-muted">lucas.baker@gmail.com</span>
                                </div>
                                <div class="members-action">
                                    <div class="btn-group">
                                        <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Members
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="icofont-check-circled"></i>

                                                    <span>All operations permission</span>
                                                </a>

                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fs-6 p-2 me-1"></i>
                                                    <span>Only Invite & manage team</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="icofont-ui-settings  fs-6"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Delete Member</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item py-3 text-center text-md-start">
                            <div class="d-flex align-items-center flex-column flex-sm-column flex-md-row">
                                <div class="no-thumbnail mb-2 mb-md-0">
                                    <img class="avatar lg rounded-circle" src="{{ url('/').'/images/xs/avatar8.jpg' }}" alt="">
                                </div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <h6 class="mb-0  fw-bold">Una Coleman</h6>
                                    <span class="text-muted">una.coleman@gmail.com</span>
                                </div>
                                <div class="members-action">
                                    <div class="btn-group">
                                        <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Members
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="icofont-check-circled"></i>

                                                    <span>All operations permission</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fs-6 p-2 me-1"></i>
                                                    <span>Only Invite & manage team</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icofont-ui-settings  fs-6"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Suspend member</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="icofont-not-allowed fs-6 me-2"></i>Delete Member</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create Project-->
<div class="modal fade" id="createproject" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Create Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput77" class="form-label">Project Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput77" placeholder="Explain what the Project Name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Project Category</label>
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
                <div class="mb-3">
                    <label for="formFileMultipleone" class="form-label">Project Images & Document</label>
                    <input class="form-control" type="file" id="formFileMultipleone" multiple>
                </div>
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label  class="form-label">Project Start Date</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col">
                                <label  class="form-label">Project End Date</label>
                                <input type="date" class="form-control" >
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-12">
                                <label class="form-label">Notifation Sent</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>All</option>
                                    <option value="1">Team Leader Only</option>
                                    <option value="2">Team Member Only</option>
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <label for="formFileMultipleone" class="form-label">Task Assign Person</label>
                                <select class="form-select" multiple aria-label="Default select Priority">
                                    <option selected>Lucinda Massey</option>
                                    <option value="1">Ryan Nolan</option>
                                    <option value="2">Oliver Black</option>
                                    <option value="3">Adam Walker</option>
                                    <option value="4">Brian Skinner</option>
                                    <option value="5">Dan Short</option>
                                    <option value="5">Jack Glover</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-sm">
                        <label for="formFileMultipleone" class="form-label">Budget</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="col-sm">
                        <label for="formFileMultipleone" class="form-label">Priority</label>
                        <select class="form-select" aria-label="Default select Priority">
                            <option selected>Highest</option>
                            <option value="1">Medium</option>
                            <option value="2">Low</option>
                            <option value="3">Lowest</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea78" class="form-label">Description (optional)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea78" rows="3" placeholder="Add any extra details about the request"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="button" class="btn btn-primary">Create</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Project-->
<div class="modal fade" id="editproject" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="editprojectLabel"> Edit Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput78" class="form-label">Project Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput78" value="Social Geek Made">
                </div>
                <div class="mb-3">
                    <label class="form-label">Project Category</label>
                    <select class="form-select" aria-label="Default select example">
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
                <div class="mb-3">
                    <label for="formFileMultiple456" class="form-label">Project Images & Document</label>
                    <input class="form-control" type="file" id="formFileMultiple456">
                </div>
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label for="datepickerded123" class="form-label">Project Start Date</label>
                                <input type="date" class="form-control" id="datepickerded123" value="2021-01-10">
                            </div>
                            <div class="col">
                                <label for="datepickerded456" class="form-label">Project End Date</label>
                                <input type="date" class="form-control" id="datepickerded456" value="2021-04-10">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-12">
                                <label class="form-label">Notifation Sent</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>All</option>
                                    <option value="1">Team Leader Only</option>
                                    <option value="2">Team Member Only</option>
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <label for="formFileMultipleone" class="form-label">Task Assign Person</label>
                                <select class="form-select" multiple aria-label="Default select Priority">
                                    <option selected>Lucinda Massey</option>
                                    <option selected value="1">Ryan Nolan</option>
                                    <option selected value="2">Oliver Black</option>
                                    <option selected value="3">Adam Walker</option>
                                    <option selected value="4">Brian Skinner</option>
                                    <option value="5">Dan Short</option>
                                    <option value="5">Jack Glover</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-sm">
                        <label for="formFileMultipleone" class="form-label">Priority</label>
                        <select class="form-select" aria-label="Default select Priority">
                            <option selected>Medium</option>
                            <option value="1">Highest</option>
                            <option value="2">Low</option>
                            <option value="3">Lowest</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea786" class="form-label">Description (optional)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea786" rows="3">Social Geek Made,lorem urna commodo sem. Pellentesque venenatis leo quam, sed mattis sapien lobortis ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                        </textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="button" class="btn btn-primary">Create</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal  Delete Folder/ File-->
<div class="modal fade" id="deleteproject" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="deleteprojectLabel"> Delete item Permanently?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body justify-content-center flex-column d-flex">
                <i class="icofont-ui-delete text-danger display-2 text-center mt-2"></i>
                <p class="mt-4 fs-5 text-center">You can only delete this item Permanently</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger color-fff">Delete</button>
            </div>
        </div>
    </div>
</div>

<!-- Create task-->
<div class="modal fade" id="createtask" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Create Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Project Name</label>
                    <select class="form-select" aria-label="Default select Project Category">
                        <option selected>Project Name Select</option>
                        <option value="1">Fast Cad</option>
                        <option value="2">Box of Crayons</option>
                        <option value="3">Gob Geeklords</option>
                        <option value="4">Java Dalia</option>
                        <option value="5">Practice to Perfect</option>
                        <option value="6">Rhinestone</option>
                        <option value="7">Social Geek Made</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Task Category</label>
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
                <div class="mb-3">
                    <label for="formFileMultipleone" class="form-label">Task Images & Document</label>
                    <input class="form-control" type="file" id="formFileMultipleone" multiple>
                </div>
                <div class="deadline-form mb-3">
                    <form>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">Task Start Date</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col">
                                <label  class="form-label">Task End Date</label>
                                <input type="date" class="form-control" >
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-sm">
                        <label class="form-label">Task Assign Person</label>
                        <select class="form-select" multiple aria-label="Default select Priority">
                            <option selected>Lucinda Massey</option>
                            <option value="1">Ryan Nolan</option>
                            <option value="2">Oliver Black</option>
                            <option value="3">Adam Walker</option>
                            <option value="4">Brian Skinner</option>
                            <option value="5">Dan Short</option>
                            <option value="5">Jack Glover</option>
                        </select>
                    </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-sm">
                        <label class="form-label">Task Priority</label>
                        <select class="form-select" aria-label="Default select Priority">
                            <option selected>Highest</option>
                            <option value="1">Medium</option>
                            <option value="2">Low</option>
                            <option value="3">Lowest</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea786" class="form-label">Description (optional)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea786" rows="3" placeholder="Add any extra details about the request"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="button" class="btn btn-primary">Create</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal  Remove Task-->
<div class="modal fade" id="dremovetask" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="dremovetaskLabel"> Remove From Task?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body justify-content-center flex-column d-flex">
                <i class="icofont-ui-rate-remove text-danger display-2 text-center mt-2"></i>
                <p class="mt-4 fs-5 text-center">You can Remove only From Task</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger color-fff">Remove</button>
            </div>
        </div>
    </div>
</div>

<!-- Send sheet-->
<div class="modal fade" id="sendsheet" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="sendsheetLabel"> Sheets Sent</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label  class="form-label">Email address</label>
                    <input type="email" class="form-control"  placeholder="name@example.com">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="submit" class="btn btn-primary">sent</button>
            </div>
        </div>
    </div>
</div>

<!-- Add Tickit-->
<div class="modal fade" id="tickadd" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="leaveaddLabel"> Tickit Add</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="sub" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="sub">
                </div>
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label  class="form-label">Assign Name</label>
                                <input type="text" class="form-control" >
                            </div>
                            <div class="col">
                                <label  class="form-label">Creted Date</label>
                                <input type="date" class="form-control" >
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mb-3">
                    <label  class="form-label">Status</label>
                    <select class="form-select">
                        <option selected>In Progress</option>
                        <option value="1">Completed</option>
                        <option value="2">Wating</option>
                        <option value="3">Decline</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="submit" class="btn btn-primary">sent</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Tickit-->
<div class="modal fade" id="edittickit" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="edittickitLabel"> Tickit Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="sub1" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="sub1" value="punching time not proper">
                </div>
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label for="depone11" class="form-label">Assign Name</label>
                                <input type="text" class="form-control" id="depone11" value="Victor Rampling">
                            </div>
                            <div class="col">
                                <label for="deptwo56" class="form-label">Creted Date</label>
                                <input type="date" class="form-control" id="deptwo56" value="2021-02-25">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mb-3">
                    <label  class="form-label">Status</label>
                    <select class="form-select">
                        <option selected>Completed</option>
                        <option value="1">In Progress</option>
                        <option value="2">Wating</option>
                        <option value="3">Decline</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="submit" class="btn btn-primary">sent</button>
            </div>
        </div>
    </div>
</div>

<!-- Create Client-->
<div class="modal fade" id="createclient" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Add Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label  class="form-label">Client Name</label>
                    <input type="text" class="form-control"  placeholder="Explain what the Project Name">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Company Name</label>
                    <input type="text" class="form-control"  placeholder="Explain what the Project Name">
                </div>
                <div class="mb-3">
                    <label for="formFileMultipleoneone" class="form-label">Profile Image</label>
                    <input class="form-control" type="file" id="formFileMultipleoneone" >
                </div>
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label class="form-label">User Name</label>
                                <input type="text" class="form-control"  placeholder="User Name">
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
                    </form>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea78" class="form-label">Description (optional)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea78" rows="3" placeholder="Add any extra details about the request"></textarea>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <thead>
                        <tr>
                            <th>Project Permission</th>
                            <th class="text-center">Read</th>
                            <th class="text-center">Write</th>
                            <th class="text-center">Create</th>
                            <th class="text-center">Delete</th>
                            <th class="text-center">Import</th>
                            <th class="text-center">Export</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="fw-bold">Projects</td>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked>
                            </td>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" checked>
                            </td>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" checked>
                            </td>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4" checked>
                            </td>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5" checked>
                            </td>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6" checked>
                            </td>
                        </tr>
                        <tr>
                            <td  class="fw-bold">Tasks</td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault10" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12" checked>

                            </td>
                        </tr>
                        <tr>
                            <td  class="fw-bold">Chat</td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault13" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault14" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault15" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault16" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault17" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault18" checked>

                            </td>
                        </tr>
                        <tr>
                            <td  class="fw-bold">Estimates</td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault19" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault20" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault21" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault22" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault23" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault24" checked>

                            </td>
                        </tr>
                        <tr>
                            <td  class="fw-bold">Invoices</td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault25" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault26">

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault27" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault28">

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault29" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault30" checked>

                            </td>
                        </tr>
                        <tr>
                            <td  class="fw-bold">Timing Sheets</td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault31" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault32" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault33" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault34" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault35" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault36" checked>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="button" class="btn btn-primary">Create</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Client-->
<div class="modal fade" id="editclient" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="createprojectlLabelone"> Edit Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput8777" class="form-label">Client Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput8777" value="Ryan Ogden">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Company Name</label>
                    <input type="text" class="form-control"  value="AgilSoft Tech">
                </div>
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label for="exampleFormControlInput1777" class="form-label">User Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1777" value="User123">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput2777" class="form-label">Password</label>
                                <input type="Password" class="form-control" id="exampleFormControlInput2777" value="********">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label  class="form-label">Email ID</label>
                                <input type="email" class="form-control"  placeholder="ryanogden@gmail.com">
                            </div>
                            <div class="col">
                                <label  class="form-label">Phone</label>
                                <input type="text" class="form-control"  value="202-555-0174">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea787" class="form-label">Description (optional)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea787" rows="3" >Vestibulum ante ipsum primis in faucibus orci luctus et ultrices</textarea>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <thead>
                        <tr>
                            <th>Project Permission</th>
                            <th class="text-center">Read</th>
                            <th class="text-center">Write</th>
                            <th class="text-center">Create</th>
                            <th class="text-center">Delete</th>
                            <th class="text-center">Import</th>
                            <th class="text-center">Export</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="fw-bold">Projects</td>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault117" checked>
                            </td>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault127" checked>
                            </td>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault37" checked>
                            </td>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault47" checked>
                            </td>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault57" checked>
                            </td>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault67" checked>
                            </td>
                        </tr>
                        <tr>
                            <td  class="fw-bold">Tasks</td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault77" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault87" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault97" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault107" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1179" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1279" checked>

                            </td>
                        </tr>
                        <tr>
                            <td  class="fw-bold">Chat</td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault137" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault147" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault157" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault167" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault177" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault187" checked>

                            </td>
                        </tr>
                        <tr>
                            <td  class="fw-bold">Estimates</td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault197" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault207" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault217" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault227" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault237" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault247" checked>

                            </td>
                        </tr>
                        <tr>
                            <td  class="fw-bold">Invoices</td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault257" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault267">

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault277" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault287">

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault297" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault307" checked>

                            </td>
                        </tr>
                        <tr>
                            <td  class="fw-bold">Timing Sheets</td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault317" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault327" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault337" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault347" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault357" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault367" checked>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="button" class="btn btn-primary">Create</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal  Delete Folder/ File-->
<div class="modal fade" id="deleteclient" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="deleteprojectLabel"> Delete item Permanently?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body justify-content-center flex-column d-flex">
                <i class="icofont-ui-delete text-danger display-2 text-center mt-2"></i>
                <p class="mt-4 fs-5 text-center">You can only delete this item Permanently</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger color-fff">Delete</button>
            </div>
        </div>
    </div>
</div>

<!-- Create Employee-->
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
                    <label  class="form-label">Employee Company</label>
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
                <div class="mb-3">
                    <label for="exampleFormControlTextarea78" class="form-label">Description (optional)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea78" rows="3" placeholder="Add any extra details about the request"></textarea>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <thead>
                        <tr>
                            <th>Project Permission</th>
                            <th class="text-center">Read</th>
                            <th class="text-center">Write</th>
                            <th class="text-center">Create</th>
                            <th class="text-center">Delete</th>
                            <th class="text-center">Import</th>
                            <th class="text-center">Export</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="fw-bold">Projects</td>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked>
                            </td>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" checked>
                            </td>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" checked>
                            </td>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4" checked>
                            </td>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5" checked>
                            </td>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6" checked>
                            </td>
                        </tr>
                        <tr>
                            <td  class="fw-bold">Tasks</td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault10" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12" checked>

                            </td>
                        </tr>
                        <tr>
                            <td  class="fw-bold">Chat</td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault13" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault14" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault15" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault16" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault17" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault18" checked>

                            </td>
                        </tr>
                        <tr>
                            <td  class="fw-bold">Estimates</td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault19" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault20" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault21" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault22" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault23" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault24" checked>

                            </td>
                        </tr>
                        <tr>
                            <td  class="fw-bold">Invoices</td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault25" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault26">

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault27" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault28">

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault29" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault30" checked>

                            </td>
                        </tr>
                        <tr>
                            <td  class="fw-bold">Timing Sheets</td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault31" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault32" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault33" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault34" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault35" checked>

                            </td>
                            <td class="text-center">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault36" checked>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="button" class="btn btn-primary">Create</button>
            </div>
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
            <div class="modal-body">
                <div class="mb-3">
                    <label  class="form-label">Holiday Name</label>
                    <input type="email" class="form-control"  placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2778" class="form-label">Holiday Date</label>
                    <input type="date" class="form-control" id="exampleFormControlInput2778">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Holiday-->
<div class="modal fade" id="editholiday" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="editholidayLabel">Edit Holidays</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInputname" class="form-label">Holiday Name</label>
                    <input type="email" class="form-control" id="exampleFormControlInputname" value="Republic Day">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput0243" class="form-label">Holiday Date</label>
                    <input type="date" class="form-control" id="exampleFormControlInput0243" value="2021-01-26">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Attendance-->
<div class="modal fade" id="editattendance" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="editattendanceLabel"> Edit Attendance</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Select Person</label>
                    <select class="form-select" id="person">
                        <option selected value="0" >Joan Dyer</option>
                        <option value="1">Ryan Randall</option>
                        <option value="2">Phil Glover</option>
                        <option value="3">Victor Rampling</option>
                        <option value="4">Sally Graham</option>
                        <option value="5">Robert Anderson</option>
                        <option value="6">Ryan Stewart</option>
                    </select>
                </div>
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-12">
                                <label for="datepickerdedass" class="form-label">Select Date</label>
                                <input type="input" value="{{'31-'.$date->subMonth()->format('m').'-'.date('Y')}}" class="form-control" id="datepickerdedass">
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label">Attendance Type</label>
                                <select class="form-select" id="present">
                                    <option value="0" selected>Full Day Present</option>
                                    <option value="1">Half Day Present</option>
                                    <option value="2">Full Day Absence</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea78d" class="form-label">Edit Reason</label>
                    <textarea class="form-control" id="exampleFormControlTextarea78d" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="submit" onclick="addAttendance($('#person').find(':selected').val(), $('#present').find(':selected').val())" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Leave Add-->
<div class="modal fade" id="leaveadd" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="leaveaddLabel"> Leave Add</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Select Leave type</label>
                    <select class="form-select">
                        <option selected>Medical Leave</option>
                        <option value="1">Casual Leave</option>
                        <option value="2">Maternity Leave</option>
                    </select>
                </div>
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label class="form-label">Leave From Date</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label for="datepickerdedoneddsd" class="form-label">Leave to Date</label>
                                <input type="date" class="form-control" id="datepickerdedoneddsd">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea78d" class="form-label">Leave Reason</label>
                    <textarea class="form-control" id="exampleFormControlTextarea78d" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="submit" class="btn btn-primary">sent</button>
            </div>
        </div>
    </div>
</div>

<!-- Leave Approve-->
<div class="modal fade" id="leaveapprove" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="dremovetaskLabel"> Leave Approve</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body justify-content-center flex-column d-flex">
                <i class="icofont-simple-smile text-success display-2 text-center mt-2"></i>
                <p class="mt-4 fs-5 text-center">Leave Approve Successfully</p>
            </div>
        </div>
    </div>
</div>

<!-- Leave Reject-->
<div class="modal fade" id="leavereject" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="leaverejectLabel"> Leave Reject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body justify-content-center flex-column d-flex">
                <i class="icofont-sad text-danger display-2 text-center mt-2"></i>
                <p class="mt-4 fs-5 text-center">Leave Reject</p>
            </div>
        </div>
    </div>
</div>

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
                    <label for="exampleFormControlInput1111" class="form-label">Department Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1111">
                </div>
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label  class="form-label">Department Head</label>
                                <input type="text" class="form-control" >
                            </div>
                            <div class="col-sm-6">
                                <label  class="form-label">Employee UnderWork</label>
                                <input type="text" class="form-control" >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Department-->
<div class="modal fade" id="depedit" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="depeditLabel"> Department Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput11111" class="form-label">Department Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput11111" value="Web Development">
                </div>
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label class="form-label">Department Head</label>
                                <select class="form-select">
                                    <option selected>Joan Dyer</option>
                                    <option value="1">Ryan Randall</option>
                                    <option value="2">Phil Glover</option>
                                    <option value="3">Victor Rampling</option>
                                    <option value="4">Sally Graham</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label for="deptwo48" class="form-label">Employee UnderWork</label>
                                <input type="text" class="form-control" id="deptwo48" value="40">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Add Expence-->
<div class="modal fade" id="expadd" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="expaddLabel"> Add Expenses</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="item" class="form-label">Item</label>
                    <input type="text" class="form-control" id="item">
                </div>
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label  class="form-label">Order By</label>
                                <input type="text" class="form-control" >
                            </div>
                            <div class="col-sm-6">
                                <label for="abc" class="form-label">Date</label>
                                <input type="date" class="form-control" id="abc">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label  class="form-label">From</label>
                                <input type="text" class="form-control" >
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Status</label>
                                <select class="form-select">
                                    <option selected>In Progress</option>
                                    <option value="1">Completed</option>
                                    <option value="2">Wating</option>
                                    <option value="3">Decline</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Add</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Expence-->
<div class="modal fade" id="expedit" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="expeditLabel"> Edit Expenses</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="item1" class="form-label">Item</label>
                    <input type="text" class="form-control" id="item1" value="Internet Payment">
                </div>
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label  class="form-label">Order By</label>
                                <select class="form-select">
                                    <option selected>Joan Dyer</option>
                                    <option value="1">Ryan Randall</option>
                                    <option value="2">Phil Glover</option>
                                    <option value="3">Victor Rampling</option>
                                    <option value="4">Sally Graham</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label for="abc1" class="form-label">Date</label>
                                <input type="date" class="form-control" id="abc1" value="2021-03-12">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label for="deptwo1" class="form-label">From</label>
                                <input type="text" class="form-control" id="deptwo1" value="Airtel Portal">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Status</label>
                                <select class="form-select">
                                    <option selected>In Progress</option>
                                    <option value="1">Completed</option>
                                    <option value="2">Wating</option>
                                    <option value="3">Decline</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Add Event-->
<div class="modal fade" id="addevent" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="eventaddLabel">Add Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput99" class="form-label">Event Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput99">
                </div>
                <div class="mb-3">
                    <label for="formFileMultipleone" class="form-label">Event Images</label>
                    <input class="form-control" type="file" id="formFileMultipleone">
                </div>
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label  class="form-label">Event Start Date</label>
                                <input type="date" class="form-control" >
                            </div>
                            <div class="col">
                                <label  class="form-label">Event End Date</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea78" class="form-label">Event Description (optional)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea78" rows="3" placeholder="Add any extra details about the request"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="button" class="btn btn-primary">Create</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Employee Personal Info-->
<div class="modal fade" id="edit1" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="edit1Label"> Personal Informations</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label  class="form-label">Nationality</label>
                                <input type="text" class="form-control"  value="Indian">
                            </div>
                            <div class="col">
                                <label  class="form-label">Religion</label>
                                <input type="text" class="form-control"  value="Hindu">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label  class="form-label">Marital Status</label>
                                <input type="text" class="form-control"  value="Married">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput2770" class="form-label">Passport No</label>
                                <input type="text" class="form-control" id="exampleFormControlInput2770" value="5468953210">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <label  class="form-label">Emergency Contact</label>
                                <input type="text" class="form-control"  value="7468953210">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="button" class="btn btn-primary">Create</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Bank Personal Info-->
<div class="modal fade" id="edit2" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="edit2Label"> Bank information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label for="exampleFormControlInput8775" class="form-label">Bank Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput8775" value="Kotak">
                            </div>
                            <div class="col">
                                <label  class="form-label">Account No.</label>
                                <input type="text" class="form-control" id="exampleFormControlInput9775" value="5436874596325486">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label for="exampleFormControlInput97775" class="form-label">IFSC Code</label>
                                <input type="text" class="form-control" id="exampleFormControlInput97775" value="Kotak000021">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput27705" class="form-label">Pan No</label>
                                <input type="text" class="form-control" id="exampleFormControlInput27705" value="ACQPF6584L">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <label for="exampleFormControlInput47775" class="form-label">UPI Id</label>
                                <input type="text" class="form-control" id="exampleFormControlInput47775" value="454812kotak@upi">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="button" class="btn btn-primary">Create</button>
            </div>
        </div>
    </div>
</div>
