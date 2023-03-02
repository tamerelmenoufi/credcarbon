Carregando = (opc = 'flex') => {
    $(".Carregando").css("display",opc);
    // alert(opc);
}

function rolar(){
    var atualPosicao = window.scrollY;

    if (atualPosicao > ultimaPosicao){
        console.log('desce')
    } else {
        console.log('sobe')
    }
    ultimaPosicao = atualPosicao;
}