<?php
$date = \Carbon\Carbon::now();
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
