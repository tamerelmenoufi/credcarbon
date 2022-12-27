<?php
    include("{$_SERVER['DOCUMENT_ROOT']}/credcarbon/painel/lib/includes.php");

    if($_POST['acao'] == 'endereco'){

        $dados = $_POST;
        unset($dados['acao']);

        $campos = [];
        foreach($dados as $i => $v){
          $campos[] = "{$i} = '".addslashes($v)."'";
        }
        $campos[] = "coordenadas = ''";

        $query = "update configuracoes set  ".implode(", ",$campos)." WHERE codigo = '1'";
        mysqli_query($con, $query);
        exit();
    }


    $query = "select * from configuracoes where codigo = '1'";
    $result = mysqli_query($con, $query);
    $d = mysqli_fetch_object($result);
?>


email
email_assinatura
email_resposta
telefone
midias_sociais



    <div class="mb-3">
        <label class="form-label">Telefone</label>
        <input type="text" class="form-control" value="<?=$d->cep?>" id="cep" >
    </div>

    <div class="mb-3">
        <label class="form-label">E-mail</label>
        <input type="text" class="form-control" value="<?=$d->rua?>" id="rua" >
    </div>

    <div class="mb-3">
        <label class="form-label">E-mail (Assinatura)</label>
        <input type="text" class="form-control" value="<?=$d->numero?>" id="numero" >
    </div>


    <div class="mb-3">
        <label class="form-label">E-mail (Mensagem Resposta)</label>
        <input type="text" class="form-control" value="<?=$d->bairro?>" id="bairro" >
    </div>

    <button
            class="btn btn-primary"

            data-bs-toggle="offcanvas"

            salvar_endereco

    >Editar Contatos</button>


<script>
    $(function(){

        Carregando('none');

        $("button[salvar_endereco]").click(function(){
            Carregando();
            data = [];
            data.push({name:'telefone', value:$("#cep").val()});
            data.push({name:'email', value:$("#rua").val()});
            data.push({name:'email_assinatura', value:$("#numero").val()});
            data.push({name:'email_resposta', value:$("#bairro").val()});
            data.push({name:'acao', value:'contato'});
            $.ajax({
                url:"src/configuracoes/editar_contatos.php",
                type:"POST",
                data,
                success:function(dados){
                    $.ajax({
                        url:"src/configuracoes/cotatos.php",
                        success:function(dados){
                            $(".contatos").html(dados);
                        }
                    });
                }
            })
        });

    })
</script>