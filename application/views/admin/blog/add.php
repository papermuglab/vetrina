<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo isset($row) ? 'Edit' : 'Add'; ?> Blog</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Blog information</h6>
        </div>
        <div class="card-body">
            <?php echo $this->session->flashdata('message'); ?>
            <form id="add_blog" enctype="multipart/form-data" action="<?php echo base_url('admin/blog/save'); ?>" method="POST" autocomplete="off">
                <input type="hidden" name="blog_id" value="<?php echo isset($row) ? $row['id'] : 0; ?>">
                <div class="form-group">
                    <label for="email">Title:</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="title" id="title" value="<?php if(isset($row)){ echo $row['title']; } ?>">
                </div>
                <div class="form-group">
                    <label for="pwd">Description:</label>
                    <textarea id="editor1" name="editor1"><?php if(isset($row)){ echo $row['description']; } ?></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Select image:</label>
                    <input type="file" class="form-control" placeholder="Enter image" name="image" multiple="true" accept="image/jpeg,image/jpg,image/png">
                </div>
                <div class="form-group">
                    <label for="pwd">Comment should be visible?</label>
                    <input type="radio" class="" name="is_comment_available" value="1" <?php if(isset($row)){ if($row['is_comment_available'] == 1){ echo 'checked'; } } ?>> Yes
                    <input type="radio" class="" name="is_comment_available" value="0" <?php if(isset($row)){ if($row['is_comment_available'] == 0){ echo 'checked'; } }else{ echo 'checked'; } ?>> No
                </div>
                <?php if (isset($row['image_name']) && !empty($row['image_name'])): ?>
                    <div class="form-group">
                        <img src="<?php echo base_url('uploads/blog/' . $row['image_name']); ?>" class="image-size" alt="Responsive image" style="height: 150px; width: 200px;">
                    </div>
                <?php endif; ?>
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