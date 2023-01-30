<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h4>Students</h4>
                            </div>
                            <div class="col-6 text-end">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                                    Add Student
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody id="tbody">
                                <!-- <tr>
                                    <td>1</td>
                                    <td>Afaq</td>
                                    <td>Male</td>
                                    <td>Date</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                            Delete
                                        </button>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php require_once('./partials/modals.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        const addFormElement = document.getElementById('add-form');
        const addErrorElement = document.getElementById('add-error');
        const addSuccessElement = document.getElementById('add-success');

        addFormElement.addEventListener('submit', function(e) {
            e.preventDefault();

            const addNameElement = document.getElementById('add-name');
            const addGenderElement = document.querySelector('input[name="add-gender"]:checked');

            let addNameValue = addNameElement.value;
            let addGenderValue;

            if (addGenderElement) {
                addGenderValue = addGenderElement.value;
            }


            addErrorElement.innerText = '';
            addNameElement.classList.remove('is-invalid');

            if (addNameValue == "" || addNameValue === undefined) {
                addErrorElement.innerText = 'Please provide your name!';
                addNameElement.classList.add('is-invalid');
            } else if (addGenderValue == "" || addGenderValue === undefined) {
                addErrorElement.innerText = 'Please provide your gender!';
            } else {
                const data = {
                    name: addNameValue,
                    gender: addGenderValue,
                    submit: 1
                };

                fetch('./add-student.php', {
                        method: 'POST',
                        body: JSON.stringify(data),
                        headers: {
                            'Content-Type': 'application.json'
                        }
                    })
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(result) {
                        if (result.nameError) {
                            addErrorElement.innerText = result.nameError;
                            addNameElement.classList.add('is-invalid');
                        } else if (result.genderError) {
                            addErrorElement.innerText = result.genderError;
                        } else if (result.success) {
                            addSuccessElement.innerText = result.success;
                            addFormElement.reset();
                            showStudents();
                        } else if (result.error) {
                            addErrorElement.innerText = result.error;
                        } else {
                            addErrorElement.innerText = 'Something went wrong';
                        }
                    })
            }


        });

        showStudents();

        function showStudents() {
            const tBodyElement = document.getElementById('tbody');

            fetch('./show-students.php', {
                    headers: {
                        'Content-Type': 'application.json'
                    }
                })
                .then(function(response) {
                    return response.json();
                })
                .then(function(result) {
                    let sr = 1;
                    let rows = "";
                    result.forEach(element => {
                        rows += `<tr><td>${sr++}</td><td>${element['name']}</td><td>${element['gender']}</td><td>${element['created_at']}</td><td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal" onclick="editStudent(${element['id']})">Edit</button> <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="deleteStudent(${element['id']})">Delete</button></td></tr>`
                    });

                    tBodyElement.innerHTML = rows;
                })
        }

        function editStudent(id) {
            console.log('I am edit function for student' + id);
        }

        function deleteStudent(id) {
            console.log('I am delete function for student' + id);
        }
    </script>
</body>

</html>