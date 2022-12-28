<?php
    include("{$_SERVER['DOCUMENT_ROOT']}/credcarbon/painel/lib/includes.php");

    if($_POST['acao'] == 'contatos'){

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

<form class="acaoContatos">
    <div class="mb-3">
        <label class="form-label">Telefone</label>
        <input type="text" class="form-control" value="<?=$d->telefone?>" id="telefone" >
    </div>

    <div class="mb-3">
        <label class="form-label">E-mail</label>
        <input type="text" class="form-control" value="<?=$d->email?>" id="email" >
    </div>

    <div class="mb-3">
        <label class="form-label">E-mail (Assinatura)</label>
        <input type="text" class="form-control" value="<?=$d->email_assinatura?>" id="email_assinatura" >
    </div>

    <div class="mb-3">
        <!-- <label class="form-label">E-mail (Mensagem Resposta)</label>
        <input type="text" class="form-control" value="<?=$d->email_resposta?>" id="email_resposta" > -->
        <textarea id="email_resposta" name="email_resposta"><?=$d->email_resposta?></textarea>
    </div>

    <button
            class="btn btn-primary"
            data-bs-toggle="offcanvas"
            type="submit"
            salvar_contatos
    >Editar Contatos</button>
</form>
<script>

    ClassicEditor
    .create( document.querySelector( '#email_resposta' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
    // console.log(editor);



    $(function(){

        Carregando('none');

        $("form.acaoContatos").on( "submit", function( event ) {

            Carregando();

            // data = [];
            // data.push({name:'telefone', value:$("#telefone").val()});
            // data.push({name:'email', value:$("#email").val()});
            // data.push({name:'email_assinatura', value:$("#email_assinatura").val()});
            // data.push({name:'email_resposta', value:$("#email_resposta").val()});
            // data.push({name:'acao', value:'contatos'});
            // console.log(data);

            event.preventDefault();
            // materia = editor.getData();
            data = $( this ).serialize();
            // data.push({name:'materia', value:editor});
            console.log(data)

            $.ajax({
                url:"src/configuracoes/editar_contatos.php",
                type:"POST",
                data,
                success:function(dados){
                    $.ajax({
                        url:"src/configuracoes/contatos.php",
                        success:function(dados){
                            $(".contatos").html(dados);
                        }
                    });
                }
            })
        });

    })
</script>