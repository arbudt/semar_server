<div class="row">
    <div class="col-md-1"></div>
    <div class="col-sm-10">
        <div class="box box-success">
            <form id="formRegistration" class="form-horizontal" method="POST" action="#">
                <div class="box-header with-border">
                    <h3 class="box-title">Pendaftaran</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-6">
                            <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputUsername" class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-6">
                            <input type="text" name="inputUsername" id="inputUsername" class="form-control" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputLabelName" class="col-sm-3 control-label">Nama Organisasi / Kepanitian</label>
                        <div class="col-sm-6">
                            <input type="text" name="inputLabelName" id="inputLabelName" class="form-control" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-6">
                            <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputRePassword" class="col-sm-3 control-label">Ulangi Password</label>
                        <div class="col-sm-6">
                            <input type="password" name="inputRePassword" id="inputRePassword" class="form-control" placeholder="Ulangi Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputDesction" class="col-sm-3 control-label">Deskripsi Kepanitiaan</label>
                        <div class="col-sm-6">
                            <textarea name="inputDesction" id="inputDesction" class="form-control" placeholder="Deskripsi kepanitiaan"></textarea>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>


<script type="text/javascript">
    //    $(document).ready(function(){
    //        $(document).on("keydown", "input,select,textarea", function(event) {
    //            if (event.keyCode === 13) {
    //                var formInput = $('#formRegistration').find('input, select, textarea, button, checkbox');
    //                var idx = formInput.index(this);
    //                if (idx > -1 && (idx + 1 < formInput.length)) {
    //                    var nextInput = formInput[idx + 1];
    //                    while ((nextInput.disabled || nextInput.type === "hidden") && (idx + 1 < formInput.length)) {
    //                        idx++;
    //                        nextInput = formInput[idx + 1];
    //                    }
    //                    nextInput.focus();
    //                }
    //                return false;
    //            }
    //        });
    //        //alert('sukses');
    //    });
    //alert('sukses');

    $(document).ready(function(){
        alert('sukses');
    });
    /*
     * btn simpan
     */
    //    $(document).ready(function() {
    //        $('#formBosk1').validate({
    //            submitHandler: function(form) {
    //                $.ajax({
    //                    type: "POST",
    //                    url: "<?php echo site_url('bosk1/bosk1/prosesSimpan') ?>",
    //                    data: $('#formBosk1').serialize(),
    //                    dataType: 'json',
    //                    beforeSend: function(xhr) {
    //                        showProgressBar('proses simpan');
    //                    },
    //                    error: function(xhr, status) {
    //                        hideProgressBar();
    //                        alert(status);
    //                    },
    //                    success: function(response) {
    //                        hideProgressBar();
    //                        if (response['status'] === true) {
    //                            if(response['idTrans'] !== null){
    //                                getDataByidTrans(response['idTrans']);
    //                            }
    //                            getAllDataTrans();
    //                            alert(response['message']);
    //                        } else {
    //                            alert(response['message']);
    //                        }
    //                    }
    //                });
    //                return false;
    //            }
    //        });
    //    });
</script>