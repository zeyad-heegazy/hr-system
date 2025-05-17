<?php
$date = \Carbon\Carbon::now();
?>
<!-- Edit Department-->
<div class="modal fade" id="depedit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title  fw-bold" id="depeditLabel">Department Edit</h5>
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

<!-- Add Department-->
<div class="modal fade" id="depadd" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="depaddLabel"> Department Add</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1111" class="form-label">Department Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1111">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>
