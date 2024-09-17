

<div class="row">
    <div class="col-md-12">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">
                    Upload Content
                </h3>
            </div>
            <!-- /.card-header -->
             <?php if(session('message') !== null) : ?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> Alert!</h5>
                    <?php echo session('message'); ?>
                </div>
            <?php endif ; ?>
            <div class="card-body">
                <form id="form_email" action="<?php echo base_url('Dashboard/UploadFile'); ?>" method="post" enctype="multipart/form-data">
                    <!-- <div class="form-group">
                        <label for="file_name">Nama Fail : </label>
                        <input type="text" id="file_name" name="file_name" value="" />
                    </div> -->
                    <!-- <div class="form-group">
                        <label for="file_content">Fail : </label>
                        <input type="file" id="file_content" name="file_content"/>
                    </div> -->
                    <div class="form-group">
                        <label for="file_content">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file_content" name="file_content[]" accept=".doc,.docx,.pdf" multiple>
                                <label class="custom-file-label" for="file_content">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Upload</button>
                    </div>
                </form>
            </div>
        </div>

        <br>

        <div class="card card-gray-dark">
                <div class="card-header">
                    <h4>Uploaded Data</h4>
                </div>
                <div class="card-body text-center">
                    <table id="list_data1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($list_files as $item): ?>
                                <tr>
                                    <td><?php echo $item??"-";?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
    <!-- /.col-->
</div>

<script>
</script>