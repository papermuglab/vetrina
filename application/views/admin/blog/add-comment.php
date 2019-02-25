<div id="addCommentModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Comment</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="add_comment" action="<?php echo base_url('admin/blog/saveComment'); ?>" method="POST" autocomplete="off">
                    <input type="hidden" name="active_blog" id="active_blog">
                    <div class="form-group">
                        <label for="email">Select Blog:</label>
                        <select class="form-control" name="blog_id" id="blog_id">
                            <?php foreach ($blogs AS $blog): ?>
                                <option value="<?php echo $blog['id']; ?>"><?php echo $blog['title']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Comment:</label>
                        <textarea class="form-control" placeholder="Enter comment" name="comment" id="comment"></textarea>
                    </div>
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
</div>