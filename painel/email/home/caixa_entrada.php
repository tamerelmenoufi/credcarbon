<?php
        include("{$_SERVER['DOCUMENT_ROOT']}/credcarbon/painel/lib/includes.php");
?>
<style>
    .pagina{
        position:fixed;
        left:10px;
        top:60px;
        bottom:0;
        right:10px;
        background-color:#fff;
        border:solid 0px #333;
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


        <!-- Exibe apenas no PC -->
        <div class="d-none d-md-block relativo">
            <div class="row relativo">
                <div class="col-4 relativo">
                    <div class="listaEntrada">

                        <ul class="list-group list-group-flush">
                        <?php
                        for($i=0;$i<100;$i++){
                        ?>
                        <li class="list-group-item">

                            <div class="d-flex justify-content-between align-items-center">
                                <span>
                                    <input type="checkbox" />
                                </span>
                                <div>
                                    <h3>tecnologia@credcarbonmanaus.com.br</h3>
                                    <p>Agenda de atividade desenvolvidas</p>
                                </div>
                                <div>
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>

                        </li>
                        <?php
                        }
                        ?>
                        </ul>

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


        <!-- Exibe apenas no celular -->
        <div class="d-block d-sm-none relativo">
            <div class="row relativo">
                <div class="col relativo">
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
            </div>
        </div>
</div>

<script>

    $(function(){
        Carregando('none')

    })

</script>