Carregando = (opc = 'flex') => {
    $(".Carregando").css("display",opc);
    // alert(opc);
}

ultimaPosicao = 0;

function rolar(){
    var atualPosicao = window.scrollY;

    if (atualPosicao > ultimaPosicao){
        console.log('desce')
    } else {
        console.log('sobe')
    }
    ultimaPosicao = atualPosicao;
}