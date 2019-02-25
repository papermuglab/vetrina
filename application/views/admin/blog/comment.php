<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Comments List <?php if (isset($blog)) { ?>from "<?php echo $blog['title'] . '"'; ?><?php } ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">Comments</h6>
                </div>
                <div class="col-md-2 pull-right">
                    <a href="#" onclick="addComment(<?php echo isset($blog) ? $blog['id'] : 0; ?>)" class="btn btn-primary">Add Comment</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <span class="message"></span>
            <?php echo $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Comment</th>
                            <th>User</th>
                            <th>Commented On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Comment</th>
                            <th>User</th>
                            <th>Commented On</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($comments AS $comment): ?>
                            <tr id="row_<?php echo $comment['id']; ?>">
                                <td><?php echo $comment['comment']; ?></td>
                                <td><?php echo $comment['is_admin'] == 0 ? $comment['name'] . '(' . $comment['email'] . ')' : 'Administrator'; ?></td>
                                <td><?php echo $comment['added_on']; ?></td>
                                <td>
                                    <?php if($comment['is_valid'] == 0): ?>
                                    <a href="#" id="comment_<?php echo $comment['id']; ?>" title="Click here to Approve Comment" onclick="approveComment(<?php echo $comment['id']; ?>)" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-check"></i></a>
                                    <?php endif; ?>
                                    <a href="#" title="Click here to Delete Comment" onclick="deleteRecord('comment', <?php echo $comment['id']; ?>)" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<?php $this->view('admin/blog/add-comment'); ?>
<!-- /.container-fluid -->