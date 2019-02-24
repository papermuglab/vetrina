<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo isset($row) ? 'Edit' : 'Add'; ?> Product</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Product information</h6>
        </div>
        <div class="card-body">
            <?php echo $this->session->flashdata('message'); ?>
            <form enctype="multipart/form-data" action="<?php echo base_url('admin/products/save'); ?>" method="POST" autocomplete="off">
                <input type="hidden" name="product_id" value="<?php echo isset($row) ? $row['id'] : 0; ?>">
                <div class="form-group">
                    <label for="email">Select menu:</label>
                    <select class="form-control" name="menu_id">
                        <option value="">Select menu</option>
                        <?php foreach($menus AS $menu): ?>
                        <option value="<?php echo $menu['id']; ?>" <?php if(isset($row)){ if($row['menu_id'] == $menu['id']){ echo 'selected'; } } ?>><?php echo $menu['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Title:</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="title" id="title" value="<?php if(isset($row)){ echo $row['title']; } ?>">
                </div>
                <div class="form-group">
                    <label for="pwd">Ingredients:</label>
                    <input type="text" class="form-control" placeholder="Enter ingredients" name="ingredients" id="ingredients" value="<?php if(isset($row)){ echo $row['ingredients']; } ?>">
                </div>
                <div class="form-group">
                    <label for="pwd">Description:</label>
                    <textarea id="editor1" name="editor1"><?php if(isset($row)){ echo $row['description']; } ?></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Select images:</label>
                    <input type="file" class="form-control" placeholder="Enter images" name="images[]" multiple="true" accept="image/jpeg,image/jpg,image/png">
                    <span class="small">You can upload multiple images by pressing Ctrl key.</span>
                </div>
                <?php if (isset($images)) { $i = 0; foreach ($images AS $image) { ?>
                        <div class="form-group" id="image_<?php echo ++$i; ?>">
                            <label>
                                <a href="#" onclick="deleteImage(<?php echo $i; ?>, '<?php echo $image['image_name']; ?>')" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                            </label>
                            <img src="<?php echo base_url('uploads/product/' . $image['image_name']); ?>" class="image-size" alt="Responsive image" style="height: 150px; width: 200px;">
                        </div>
                <?php } } ?>
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