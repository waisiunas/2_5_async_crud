<!-- Add Student Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addModalLabel">Add Student</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="add-form">

                    <div id="add-error" class="text-danger"></div>
                    <div id="add-success" class="text-success"></div>

                    <div class="mb-3">
                        <label for="add-name">Name</label>
                        <input type="text" class="form-control" name="add-name" id="add-name" placeholder="Enter your name!">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="add-gender" id="add-male" value="Male" checked>
                            <label class="form-check-label" for="add-male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="add-gender" id="add-female" value="Female">
                            <label class="form-check-label" for="add-female">Female</label>
                        </div>
                    </div>

                    <div>
                        <input type="submit" value="Submit" class="btn btn-primary" id="add-submit">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Student Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModalLabel">Edit Student</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="edit-form">

                    <div id="edit-error" class="text-danger"></div>
                    <div id="edit-success" class="text-success"></div>

                    <div class="mb-3">
                        <label for="edit-name">Name</label>
                        <input type="text" class="form-control" name="edit-name" id="edit-name" placeholder="Enter your name!">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit-gender" id="edit-male" value="Male">
                            <label class="form-check-label" for="edit-male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit-gender" id="edit-female" value="Female">
                            <label class="form-check-label" for="edit-female">Female</label>
                        </div>
                    </div>

                    <div>
                        <input type="submit" value="Submit" class="btn btn-primary" id="edit-submit">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Student Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteModalLabel">Delete</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="delete-form">

                    <div id="delete-error" class="text-danger"></div>
                    <div id="delete-success" class="text-success"></div>

                    <div class="mb-3">
                        Are you sure, you want to delete this?
                    </div>

                    <div>
                        <input type="submit" value="Delete" class="btn btn-danger" id="delete-submit">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>