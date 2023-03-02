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

    .ItemEmail div h5{
        font-size:14px;
        font-weight:bold;
        color:#a1a1a1;
    }
    .ItemEmail div span{
        font-size:12px;
        font-weight:normal;
        color:#333;
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

                                <div class="d-flex justify-content-between align-items-center ItemEmail">
                                    <div>
                                        <input type="checkbox" />
                                    </div>
                                    <div>
                                        <h5>tecnologia@credcarbonmanaus.com.br</h5>
                                        <span>Agenda das atividades desenvolvidas</span>
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


	 var lastScrollTop = 0, delta = 5;
	 $(".listaEntrada").scroll(function(){
		 var nowScrollTop = $(".listaEntrada").scrollTop();
         var altura = ( $(".listaEntrada ul").outerHeight() - $(".listaEntrada").outerHeight());

        if(nowScrollTop == altura){
            console.log(`Já Estou no final da página ${nowScrollTop} de ${altura}`);
        }else{
            console.log(`Estou fora da área ${nowScrollTop} de ${altura}`);
        }

		//  if(Math.abs(lastScrollTop - nowScrollTop) >= delta){
		//  	if (nowScrollTop > lastScrollTop){
		//  		// ACTION ON
		//  		// SCROLLING DOWN
        //         console.log(`DESCE ${nowScrollTop}`)
		//  	} else {
		//  		// ACTION ON
		//  		// SCROLLING UP
        //          console.log(`SOBE ${nowScrollTop}`)
		// 	}
		//  lastScrollTop = nowScrollTop;
		//  }

	 });
 });

</script>