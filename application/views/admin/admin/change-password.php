<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Change Password</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Password information</h6>
        </div>
        <div class="card-body">
            <?php echo $this->session->flashdata('message'); ?>
            <form id="change_password" action="<?php echo base_url('admin/user/changePassword'); ?>" method="POST" autocomplete="off">
                <div class="form-group">
                    <label for="email">Old Password:</label>
                    <input type="password" class="form-control" placeholder="Enter old password" name="old_password" id="old_password">
                </div>
                <div class="form-group">
                    <label for="email">New Password:</label>
                    <input type="password" class="form-control" placeholder="Enter new password" name="new_password" id="new_password">
                </div>
                <div class="form-group">
                    <label for="email">Re-type New Password:</label>
                    <input type="password" class="form-control" placeholder="Enter Re-type new password" name="re_type_password" id="re_type_password">
                </div>
                <a href="#" class="btn btn-primary btn-icon-split" onclick="history.back();">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Cancel</span>
                </a>
                <button class="btn btn-success btn-icon-split" type="submit">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Save</span>
                </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->