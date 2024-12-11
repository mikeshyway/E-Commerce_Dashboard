<?php 
// All Users - Admin Page 
include('../middleware/adminMiddleware.php'); 
include('includes/header.php');

?>

<div class="container-fluid w-85 ms-11">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-bg-warning">
                    <h4 class="text-white">All Users</h4>
                </div>
                <div class="card-body" id="admin_client_table">
                    <table class="table table-bordered table-striped">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Email Address</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th>Created</th> 
                                <th>Edit</th> 
                                <th>Delete</th> 
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <!-- Query to fetch database records -->
                            <?php
                                $user = getAll("users");

                                if(mysqli_num_rows($user) > 0)
                                {
                                    foreach($user as $item)
                                    {
                                        ?> 
                                            <tr>
                                                <td> <?= $item['id']; ?> </td>
                                                <td> <?= $item['name']; ?> </td>
                                                
                                                <td> +60<?= $item['phone']; ?> </td>
                                                <td> <?= $item['email']; ?> </td>
                                                <td> <?= $item['password']; ?> </td>
                                                
                                                <td> <?= $item['role_as']; ?> </td>
                                                <td> <?= $item['created_at']; ?> </td>

                                                <!-- To make changes in product, either edit or delete -->
                                                <td>
                                                    <a href="edit-user.php?id=<?= $item['id']; ?>" class="btn btn-primary">
                                                    <i class="material-icons opacity-10">edit</i> Edit</a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger delete_admin_client_btn" value="<?= $item['id']; ?>"> 
                                                    <i class="material-icons opacity-10">delete</i> Delete</button>
                                                </td>
                                                
                                            </tr>
                                        <?php 
                                    }
                                }
                                else 
                                {
                                    echo "No records found";
                                }
                            ?>
                        </tbody>
                    </table>
                    <p class="float-end">** Users = 0 | Admin = 1</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>