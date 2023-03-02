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
        padding:0;
        margin:0;
    }
    .ItemEmail div span{
        font-size:12px;
        font-weight:normal;
        color:#333;
        padding:0;
        margin:0;
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
                                    <div class="p-2">
                                        <input type="checkbox" />
                                    </div>
                                    <div class="p-2 d-flex flex-column align-items-start flex-grow-1">
                                        <h5>tecnologia@credcarbonmanaus.com.br</h5>
                                        <span>Agenda das atividades desenvolvidas</span>
                                    </div>
                                    <div class="p-2">
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


    var RegiNovo = '';
    for(i=0;i<20;i++){
    var RegiNovo = RegiNovo + '<li class="list-group-item"><div class="d-flex justify-content-between align-items-center ItemEmail"><div><input type="checkbox" /></div><div><h5>tecnologia@credcarbonmanaus.com.br</h5><span>Novo Agenda das atividades desenvolvidas</span></div><div><i class="fa fa-user"></i></div></div></li>';
    }
	 var lastScrollTop = 0, delta = 5;
	 $(".listaEntrada").scroll(function(){
		 var nowScrollTop = $(".listaEntrada").scrollTop();
         var altura = ( $(".listaEntrada ul").outerHeight() - $(".listaEntrada").outerHeight());

        if((nowScrollTop) >= (altura - 10)){
            console.log(`Já Estou no final da página ${nowScrollTop} de ${altura}`);
            $(".listaEntrada ul").append(RegiNovo);
        }else{
            // console.log(`Estou fora da área ${nowScrollTop} de ${altura}`);
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


     $(document).off('click').on('click','.ItemEmail div i', function(){
        alert('ação aqui');
     })

 });

</script>