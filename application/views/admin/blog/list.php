<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Blog List</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Blogs</h6>
        </div>
        <div class="card-body">
            <span class="message"></span>
            <?php echo $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Blog Title</th>
                            <th>Comments</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Blog Title</th>
                            <th>Comments</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($blogs AS $blog): ?>
                        <tr id="row_<?php echo $blog['id']; ?>">
                            <td><?php echo $blog['title']; ?></td>
                            <td><?php echo $blog['comments']; ?></td>
                            <td>
                                <a href="<?php echo base_url('admin/blog/edit/'.$blog['id']); ?>" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="<?php echo base_url('admin/blog/comments/'.$blog['id']); ?>" class="btn btn-success btn-circle btn-sm"><i class="fas fa-envelope "></i></a>
                                <a href="#" onclick="deleteRecord('blog', <?php echo $blog['id']; ?>)" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->