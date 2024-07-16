<div class="row">
        <div class="col-md-12">
            <div class="card card-gray-dark">
                <div class="card-header">
                    <h4>Data Presentation</h4>
                </div>
                <div class="card-body text-center">
                    <table id="list_data1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($query1 as $user): ?>
                                <tr>
                                    <td><?php echo $user->name??"-";?></td>
                                    <td><?php echo $user->email??"-";?></td>
                                    <td><?php echo $user->role??"-";?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <table id="list_data2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>IC</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($query2 as $user): ?>
                                <tr>
                                    <td><?php echo $user->name??"-";?></td>
                                    <td><?php echo $user->email??"-";?></td>
                                    <td><?php echo $user->role??"-";?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
<script>
    $(function () {
        $('#list_data1').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });

        $('#list_data2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>