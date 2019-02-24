<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Import Products</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Import Product information</h6>
        </div>
        <div class="card-body">
            <?php echo $this->session->flashdata('message'); ?>
            <form enctype="multipart/form-data" action="<?php echo base_url('admin/import/products'); ?>" method="POST" autocomplete="off">
                <div class="form-group">
                    <label for="email">Select menu:</label>
                    <select class="form-control" name="menu_id">
                        <option value="">Select menu</option>
                        <?php foreach($menus AS $menu): ?>
                        <option value="<?php echo $menu['id']; ?>"><?php echo $menu['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pwd">Select CSV:</label>
                    <input type="file" class="form-control" placeholder="Enter CSV" name="csv_file" accept=".csv">
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
                    <span class="text">Upload</span>
                </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->