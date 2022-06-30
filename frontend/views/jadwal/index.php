<?php
/* @var $this yii\web\View */
$this->title = 'Edu School | Jadwal';
?>
<!-- Cards -->
<div class="container">
    <form>
        <select class="form-control form-control-lg" style="margin-left: auto; margin-right: auto; width: 80%; margin-top: 50px; margin-bottom: 50px;" aria-label="Default select example" name="users" onchange="showJadwal(this.value)">
            <option value="">Pilih Kelas :</option>
            <?php foreach ($models as $model) { ?>
                <option value="<?= $model->id ?>"><?= $model->kelas ?></option>
            <?php } ?>
        </select>
    </form>
    <div id="txtHint"></div>
</div>

<script>
    function showJadwal(str) {
        if (str=="") {
            document.getElementById("txtHint").innerHTML="";
            return;
        }
        var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
                document.getElementById("txtHint").innerHTML=this.responseText;
            }
        }
        xmlhttp.open("GET","jadwal?id="+str,true);
        xmlhttp.send();
    };
</script>