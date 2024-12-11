<?php 
// Edit User - Admin Page 
include('../middleware/adminMiddleware.php'); 
include('includes/header.php');

?>

<div class="container-fluid w-85 ms-11">
    <div class="row">
        <div class="col-md-12">
            <?php
                // Check if ID is in the url or not 
                if(isset($_GET['id']))
                {
                    // Call getByID function
                    $id = $_GET['id'];

                    $user = getByID("users", $id);

                    if(mysqli_num_rows($user) > 0)
                    {
                        $data = mysqli_fetch_array($user);
                        ?>
                            <div class="card">
                                <div class="card-header text-bg-warning">
                                    <h4 class="text-white">Edit User
                                    <a href="users.php" class="btn btn-primary float-end"><i class="fa fa-reply"></i> Back</a>
                                    </h4>
                                    <hr>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">Name</label>
                                                <div class="border p-1">
                                                    <?= $data['name']; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">Phone Number</label>
                                                <div class="border p-1">
                                                    +60<?= $data['phone']; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">Email</label>
                                                <div class="border p-1">
                                                    <?= $data['email']; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">Password</label>
                                                <div class="border p-1">
                                                    <?= $data['password']; ?>
                                                </div>
                                            </div>
                                            <!-- Application form to change role -->
                                            <label class="fw-bold">Role</label>
                                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="user_id" value="<?= $data['id']; ?>">
                                                <select name="role_status" class="form-select">
                                                    <option value="0" <?= ($data['role_as'] == 0)?"selected":"" ?> >User</option>
                                                    <option value="1" <?= ($data['role_as'] == 1)?"selected":"" ?> >Admin</option>
                                                </select>
                                                <br><br>
                                                <!-- When "update" button is clicked, the form submits the data to a file named code.php. -->
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary" name="update_admin_client_btn">Update User Info</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                    else
                    {
                        echo "User Not Found for Given ID";
                    }
                }
                else
                {
                    echo "ID is missing from url";
                }
            ?>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>