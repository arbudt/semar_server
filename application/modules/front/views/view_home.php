<style>
    .labelField{
        width: 160px;
    }
    .plainteks{
        width: 700px;
        height: 120px;
        resize: none       
    }
    .hasilEnkripsi{
        width: 700px;
        height: 230px;
        resize: none
    }
</style>

<div class="row-fluid">
    <form class="form well" method="POST" id="formEnkripsi">
        <div class="row-fluid">
            <div class="span12">
                <table>
                    <tr>
                        <td class="labelField">Plainteks</td>
                        <td><textarea name="plainteks" id="plainteks" class="plainteks" required></textarea></td>
                    </tr>
                    <tr>
                        <td class="labelField">Kunci </td>
                        <td><input type="text" name="kunci" id="kunci" class="kunci input-large" value="" required/></td>
                    </tr>
                    <tr>
                        <td class="labelField"></td>
                        <td>
                            <button type="submit" id="btnProses" class="btn btn-info"><i class="icon icon-white icon-play"></i> Proses Enkripsi</button>
                            <button type="button" id="btnReset" class="btn btn-success"><i class="icon icon-white icon-refresh"></i> Reset</button>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="labelField">Hasil Enkripsi</td>
                        <td><textarea name="hasilEnkripsi" id="hasilEnkripsi" class="hasilEnkripsi" readonly></textarea></td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</div>

<div class="row-fluid">
    <form class="form well" method="POST" id="formEnkripsi">
        <div class="row-fluid">
            <div class="span12">
                <table>
                    <tr>
                        <td class="labelField">Plainteks</td>
                        <td><textarea name="plainteks" id="plainteks" class="plainteks" required></textarea></td>
                    </tr>
                    <tr>
                        <td class="labelField">Kunci </td>
                        <td><input type="text" name="kunci" id="kunci" class="kunci input-large" value="" required/></td>
                    </tr>
                    <tr>
                        <td class="labelField"></td>
                        <td>
                            <button type="submit" id="btnProses" class="btn btn-info"><i class="icon icon-white icon-play"></i> Proses Enkripsi</button>
                            <button type="button" id="btnReset" class="btn btn-success"><i class="icon icon-white icon-refresh"></i> Reset</button>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="labelField">Hasil Enkripsi</td>
                        <td><textarea name="hasilEnkripsi" id="hasilEnkripsi" class="hasilEnkripsi" readonly></textarea></td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</div>


<!-- JS Deklarasi -->
<script>
    $(document).ready(function(){
        $(document).on("keydown", "input,select,textarea", function(event) {
            if (event.keyCode === 13) {
                var formInput = $('#formEnkripsi').find('input,select,textarea, button, checkbox');
                var idx = formInput.index(this);
                if (idx > -1 && (idx + 1 < formInput.length)) {
                    var nextInput = formInput[idx + 1];
                    while ((nextInput.disabled || nextInput.type === "hidden") && (idx + 1 < formInput.length)) {
                        idx++;
                        nextInput = formInput[idx + 1];
                    }
                    nextInput.focus();
                }
                return false;
            }
        });
    });
    
</script>

<!-- JS Ready -->
<script>
    $(document).ready(function(){
        clearForm();
    });
</script>

<!-- JS function Content -->
<script>
    function clearForm(){
        $('#plainteks').val('');
        $('#kunci').val('');
        $('#hasilEnkripsi').val('');
    }
</script>

<!-- JS Aksi button -->
<script>
    /*
     *btn reset
     */
    $(document).on('click', '#btnReset', function(){
        clearForm();
    });
    
    /*
     * btn proses
     */
    $(document).ready(function() {
        $('#formEnkripsi').validate({
            submitHandler: function(form) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('enkripsi/enkripsi/proses_enkripsi'); ?>",
                    data: $('#formEnkripsi').serialize(),
                    dataType: 'json',
                    beforeSend: function(xhr) {
                        showProgressBar('proses enkripsi data');
                    },
                    error: function(xhr, status) {
                        hideProgressBar();
                        alert(status);
                    },
                    success: function(response) {
                        hideProgressBar();
                        if (response['status'] === true) {
                            $('#hasilEnkripsi').val(response['data']);
                            alert(response['message']);
                        } else {
                            $('#hasilEnkripsi').val('');
                            alert(response['message']);
                        }
                    }
                });
                return false;
            }
        });
    });
</script>