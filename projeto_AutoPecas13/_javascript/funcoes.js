// MUDA A COR DO PEIXE NO INDEX.HTML - VARIAS MARCAS
function variomarca(tipo) {
    let arquivo;
    if (tipo == 1) {
        arquivo = "_imagens/pneus-continental.png";
    }
    if (tipo == 2) {
        arquivo = "_imagens/rodas_logo.png";
    }
    if (tipo == 4) {
        arquivo = "_imagens/roda_lilas.png"
    }
    document.getElementById("colorido").src = arquivo;
}
// FUNÇÃO DO MENU ESTÁ PRESENTE EM TODOS OS ARQUIVOS HTML
function mudaFoto(foto) {
    document.getElementById("icone").src = foto;
}

// FORMA DE AJUDA
function tipodeAjuda() {
    var total;
    // tipo de local (virtual ou presencial)
    var tpl = document.getElementsByName('tAjud');

    // Verifica se a opção 'Virtual' está selecionada
    if (tpl[0].checked) {
        total = "Não será cobrado.";
        document.getElementById('cTot').value = total;
    }
    // Verifica se a opção 'Presencial' está selecionada
    else if (tpl[1].checked) {
        // Acessa o tipo de ajuda (1, 2, 3)
        var tipoAjuda = document.getElementById('cTipo').value;

        // Define o total de acordo com o tipo de ajuda selecionado
        if (tipoAjuda === "1") {
            total = 90.90;  // Pneus
        } else if (tipoAjuda === "2") {
            total = 87.90;  // Rodas
        } else if (tipoAjuda === "3") {
            total = 95.90;  // Produtos Gerais
        } else {
            alert('Selecione um tipo de ajuda');
            return;
        }
    }
    else {
        alert('Por favor, selecione o local de ajuda');
        return;
    }

    document.getElementById('cTot').value = total;
}

//MOSTRA IMAGEM DO PRODUTO GERAL NO INÍCIO 
function valvula() {
    var rac = window.document.querySelector('.pg-img')
    rac.src = './_imagens/valvula1.png'
}
function tampa() {
    var ver = window.document.querySelector('.pg-img')
    ver.src = './_imagens/tampa_brilha1.png'
}
function reparo() {
    var imu = window.document.querySelector('.pg-img')
    imu.src = './_imagens/Kit_Reparo.png'
}
// rodas
function calota() {
    var bom = window.document.querySelector('.pg-img')
    bom.src = './_imagens/calotas1.png'
}
function friso() {
    var enfeite = window.document.querySelector('.pg-img')
    enfeite.src = './_imagens/friso_rodas1.png'
}
function quatroluzes() {
    var lim = window.document.querySelector('.pg-img')
    lim.src = './_imagens/quatro_luzes.png'
}
