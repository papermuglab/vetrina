<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Inquiry List</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Inquiries</h6>
        </div>
        <div class="card-body">
            <span class="message"></span>
            <?php echo $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($inquiries AS $inquiry): ?>
                        <tr id="row_<?php echo $inquiry['id']; ?>">
                            <td><?php echo $inquiry['name']; ?></td>
                            <td><?php echo $inquiry['email']; ?></td>
                            <td>
                                <a href="<?php echo base_url('admin/inquiries/edit/'.$inquiry['id']); ?>" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="#" onclick="deleteRecord('inquiry', <?php echo $inquiry['id']; ?>)" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
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