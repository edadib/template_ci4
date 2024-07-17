

<div class="row">
    <div class="col-md-12">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">
                    Email Content
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
                <form id="form_email" action="<?php echo base_url('Dashboard/SendEmail'); ?>" method="post">
                    <div class="form-group">
                        <label for="email_receiver">Nama Receiver : </label>
                        <input type="text" id="email_receiver" name="email_receiver" placeholder="ahmad@usm.my" value="" />
                    </div>
                    <!-- <div class="form-group">
                        <label for="email_sender">Nama Sender : </label>
                        <input type="text" id="email_sender" name="email_sender" placeholder="ahmad@usm.my" value="" />
                    </div> -->
                    <textarea id="content_email" name="content_email">
                        <font style='font-family:Century Gothic' size='2'>Assalamualaikum dan Selamat Sejahtera,<br>
                            Y. Bhg. Datuk/ Dato'/ Datin/ Prof./ Dr./ Tuan/ Puan,<br><br>
                            
                            
                            <br><b>Keputusan Permohonan AWT Anda Bagi Tahun 2023</b>
                            
                            <br><br>Dengan segala hormatnya, perkara di atas adalah dirujuk.
                            
                            <br><br>2.&nbsp;&nbsp;&nbsp;&nbsp;Dimaklumkan bahawa permohonan AWT anda telah diluluskan dan boleh disemak di sistem ECUTI. 
                            
                            <br><br>3.&nbsp;&nbsp;&nbsp;&nbsp;Jumlah yang diberikan adalah muktamad. Sebarang rayuan tidak akan dilayan. 
                                    
                            
                            <br><br>Sekian. Terima kasih.
                            
                            <br><br>
                            <br><br><b><i>"MALAYSIA MADANI"</i></b>
                            <br><b><i>"BERKHIDMAT UNTUK NEGARA</i></b>
                            <br>b.p PENDAFTAR
                            <br>

                            
                            
                            
                            <br><br><br>Nota : Emel ini dijana secara automatik dan tidak perlu maklumbalas</b></font>
                            
                    </textarea>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary btn-lg">Send Email</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>

<script>
    $(function() {
        $('#content_email').summernote()
    })

    // function SendEmail()
    // {
    //     // $('#form_email').submit();
    // }
</script>