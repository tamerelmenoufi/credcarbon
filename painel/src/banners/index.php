<?php
    include("{$_SERVER['DOCUMENT_ROOT']}/credcarbon/painel/lib/includes.php");
?>
<style>

</style>
<div class="p-3">
    <div class="row">
        <div listaBanners class="col-md-12"></div>
    </div>
</div>

<script>
    $(function(){
        Carregando('none');
        $.ajax({
            url:"src/banners/lista.php",
            success:function(dados){
                $("div[listaBanners]").html(dados);
            }
        });
    })
</script>