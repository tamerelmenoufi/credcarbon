<?php
        include("{$_SERVER['DOCUMENT_ROOT']}/credcarbon/painel/lib/includes.php");
?>
<style>
    .pagina{
        position:fixed;
        left:0;
        top:60px;
        bottom:0;
        right:0;
        background-color:#fff;
    }
    .relativo{
        position:relative;
        height:100%;
    }
    .listaEntrada{
        position:absolute;
        left:0;
        top:0px;
        bottom:0;
        right:0;
        background-color:red;
        overflow:auto;
    }
    .exibeEmail{
        position:absolute;
        left:0;
        top:0px;
        bottom:0;
        right:0;
        background-color:green;
        overflow:auto;
    }
</style>
<div class="pagina">
    <div class="row relativo">
        <div class="col-4 relativo">
            <div class="listaEntrada">
                <?php
                for($i=0;$i<100;$i++){
                ?>
                Lista de entrada<br>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="col-8 relativo">
            <div class="exibeEmail">
                <?php
                for($i=0;$i<100;$i++){
                ?>
                Exibição dos e-mails<br>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<script>

    $(function(){
        Carregando('none')

    })

</script>