var nome_cliente = document.getElementById('nome_cliente');
nome_cliente.addEventListener('click', mudarTelaHome);

var saldo = document.getElementById('saldo');
saldo.addEventListener('click', mudarTelaSaldo);

var extrato = document.getElementById('extrato');
extrato.addEventListener('click', mudarTelaExtrato);

var transferencia = document.getElementById('transferencia');
transferencia.addEventListener('click', mudarTelaTransferencia);

var deposito = document.getElementById('deposito');
deposito.addEventListener('click', mudarTelaDeposito);

var pix = document.getElementById('pix');
pix.addEventListener('click', mudarTelaPix);

var recarga = document.getElementById('recarga');
recarga.addEventListener('click', mudarTelaRecarga);

var suporte = document.getElementById('suporte');
suporte.addEventListener('click', mudarTelaSuporte);


// função que vai para tela de consultar seu saldo
function mudarTelaSaldo(){
    
    var home = document.getElementById('texto-fundo');
    var saldo_fundo = document.getElementById('saldo-fundo');
    var extrato_fundo = document.getElementById('extrato-fundo');
    var pix_fundo = document.getElementById('pix-fundo');
    var recarga_fundo = document.getElementById('recarga-fundo');
    var suporte_fundo = document.getElementById('suporte-fundo');
    var deposito_fundo = document.getElementById('deposito-fundo');
    var transferencia_fundo = document.getElementById('transferência-fundo');


    
    home.style.display="none";
    extrato_fundo.style.display="none";
    pix_fundo.style.display="none";
    recarga_fundo.style.display="none";
    suporte_fundo.style.display="none";
    deposito_fundo.style.display="none";
    transferencia_fundo.style.display="none";
    saldo_fundo.style.display="inline";
}


// função que vai para tela de Home
function mudarTelaHome(){
    
    var home = document.getElementById('texto-fundo');
    var saldo_fundo = document.getElementById('saldo-fundo');
    var extrato_fundo = document.getElementById('extrato-fundo');
    var pix_fundo = document.getElementById('pix-fundo');  
    var recarga_fundo = document.getElementById('recarga-fundo');
    var suporte_fundo = document.getElementById('suporte-fundo');
    var deposito_fundo = document.getElementById('deposito-fundo');
    var transferencia_fundo = document.getElementById('transferência-fundo');



    
    saldo_fundo.style.display="none";
    extrato_fundo.style.display="none";
    pix_fundo.style.display="none";
    recarga_fundo.style.display="none";
    suporte_fundo.style.display="none";
    deposito_fundo.style.display="none";
    transferencia_fundo.style.display="none";
    home.style.display="inline";
    
    
}

function mudarTelaExtrato(){
    
    var home = document.getElementById('texto-fundo');
    var saldo_fundo = document.getElementById('saldo-fundo');
    var extrato_fundo = document.getElementById('extrato-fundo');
    var pix_fundo = document.getElementById('pix-fundo');
    var recarga_fundo = document.getElementById('recarga-fundo');
    var suporte_fundo = document.getElementById('suporte-fundo');
    var deposito_fundo = document.getElementById('deposito-fundo');
    var transferencia_fundo = document.getElementById('transferência-fundo');


    home.style.display="none";
    saldo_fundo.style.display="none";
    pix_fundo.style.display="none";
    recarga_fundo.style.display="none";
    suporte_fundo.style.display="none";
    deposito_fundo.style.display="none";
    transferencia_fundo.style.display="none";
    extrato_fundo.style.display="inline";
}


function mudarTelaPix(){
    
    var home = document.getElementById('texto-fundo');
    var saldo_fundo = document.getElementById('saldo-fundo');
    var extrato_fundo = document.getElementById('extrato-fundo');
    var pix_fundo = document.getElementById('pix-fundo');
    var recarga_fundo = document.getElementById('recarga-fundo');
    var suporte_fundo = document.getElementById('suporte-fundo');
    var deposito_fundo = document.getElementById('deposito-fundo');
    var transferencia_fundo = document.getElementById('transferência-fundo');


    home.style.display="none";
    saldo_fundo.style.display="none";
    extrato_fundo.style.display="none";
    recarga_fundo.style.display="none";
    suporte_fundo.style.display="none";
    deposito_fundo.style.display="none";
    transferencia_fundo.style.display="none";
    pix_fundo.style.display="inline";
}


function mudarTelaRecarga(){
    
    var home = document.getElementById('texto-fundo');
    var saldo_fundo = document.getElementById('saldo-fundo');
    var extrato_fundo = document.getElementById('extrato-fundo');
    var pix_fundo = document.getElementById('pix-fundo');
    var recarga_fundo = document.getElementById('recarga-fundo');
    var suporte_fundo = document.getElementById('suporte-fundo');
    var deposito_fundo = document.getElementById('deposito-fundo');
    var transferencia_fundo = document.getElementById('transferência-fundo');


    home.style.display="none";
    saldo_fundo.style.display="none";
    extrato_fundo.style.display="none";
    pix_fundo.style.display="none";
    suporte_fundo.style.display="none";
    deposito_fundo.style.display="none";
    transferencia_fundo.style.display="none";
    recarga_fundo.style.display="inline";
}

function mudarTelaSuporte(){
    
    var home = document.getElementById('texto-fundo');
    var saldo_fundo = document.getElementById('saldo-fundo');
    var extrato_fundo = document.getElementById('extrato-fundo');
    var pix_fundo = document.getElementById('pix-fundo');
    var recarga_fundo = document.getElementById('recarga-fundo');
    var suporte_fundo = document.getElementById('suporte-fundo');
    var deposito_fundo = document.getElementById('deposito-fundo');
    var transferencia_fundo = document.getElementById('transferência-fundo');


    home.style.display="none";
    saldo_fundo.style.display="none";
    extrato_fundo.style.display="none";
    pix_fundo.style.display="none";
    recarga_fundo.style.display="none";
    deposito_fundo.style.display="none";
    transferencia_fundo.style.display="none";
    suporte_fundo.style.display="inline";
}

function mudarTelaDeposito(){
    
    var home = document.getElementById('texto-fundo');
    var saldo_fundo = document.getElementById('saldo-fundo');
    var extrato_fundo = document.getElementById('extrato-fundo');
    var pix_fundo = document.getElementById('pix-fundo');
    var recarga_fundo = document.getElementById('recarga-fundo');
    var suporte_fundo = document.getElementById('suporte-fundo');
    var deposito_fundo = document.getElementById('deposito-fundo');
    var transferencia_fundo = document.getElementById('transferência-fundo');


    home.style.display="none";
    saldo_fundo.style.display="none";
    extrato_fundo.style.display="none";
    pix_fundo.style.display="none";
    recarga_fundo.style.display="none";
    suporte_fundo.style.display="none";
    transferencia_fundo.style.display="none";
    deposito_fundo.style.display="inline";
}

function mudarTelaTransferencia(){
    
    var home = document.getElementById('texto-fundo');
    var saldo_fundo = document.getElementById('saldo-fundo');
    var extrato_fundo = document.getElementById('extrato-fundo');
    var pix_fundo = document.getElementById('pix-fundo');
    var recarga_fundo = document.getElementById('recarga-fundo');
    var suporte_fundo = document.getElementById('suporte-fundo');
    var deposito_fundo = document.getElementById('deposito-fundo');
    var transferencia_fundo = document.getElementById('transferência-fundo');


    home.style.display="none";
    saldo_fundo.style.display="none";
    extrato_fundo.style.display="none";
    pix_fundo.style.display="none";
    recarga_fundo.style.display="none";
    suporte_fundo.style.display="none";
    deposito_fundo.style.display="none";
    transferencia_fundo.style.display="inline";
}







// interação com opções de menu


saldo.addEventListener('click', menuSaldo);
extrato.addEventListener('click', menuExtrato);
transferencia.addEventListener('click', menuTransferencia);
deposito.addEventListener('click', menuDeposito);
pix.addEventListener('click', menuPix);
recarga.addEventListener('click', menuRecarga);
suporte.addEventListener('click', menuSuporte);
sair.addEventListener('click', menuSair);
nome_cliente.addEventListener('click', menuHome);




function menuHome(){
    var saldo = document.getElementById('saldo');
    var extrato = document.getElementById('extrato');
    var transferencia = document.getElementById('transferencia');
    var deposito = document.getElementById('deposito');
    var pix = document.getElementById('pix');
    var recarga = document.getElementById('recarga');
    var suporte = document.getElementById('suporte');
    var sair = document.getElementById('sair');
    var nome_cliente = document.getElementById('nome_cliente');


    saldo.style.borderLeft="none";
    extrato.style.borderLeft="none";
    transferencia.style.borderLeft="none";
    deposito.style.borderLeft="none";
    pix.style.borderLeft="none";
    recarga.style.borderLeft="none";
    suporte.style.borderLeft="none";
    sair.style.borderLeft="none";
    nome_cliente.style.borderLeft="5px solid #fff"
}
function menuSaldo(){
    var saldo = document.getElementById('saldo');
    var extrato = document.getElementById('extrato');
    var transferencia = document.getElementById('transferencia');
    var deposito = document.getElementById('deposito');
    var pix = document.getElementById('pix');
    var recarga = document.getElementById('recarga');
    var suporte = document.getElementById('suporte');
    var sair = document.getElementById('sair');
    var nome_cliente = document.getElementById('nome_cliente');




    extrato.style.borderLeft="none";
    transferencia.style.borderLeft="none";
    deposito.style.borderLeft="none";
    pix.style.borderLeft="none";
    recarga.style.borderLeft="none";
    suporte.style.borderLeft="none";
    sair.style.borderLeft="none";
    nome_cliente.style.borderLeft="none"
    saldo.style.borderLeft="5px solid #fff";
}

function menuExtrato(){
    var extrato = document.getElementById('extrato');
    var saldo = document.getElementById('saldo');
    var transferencia = document.getElementById('transferencia');
    var deposito = document.getElementById('deposito');
    var pix = document.getElementById('pix');
    var recarga = document.getElementById('recarga');
    var suporte = document.getElementById('suporte');
    var sair = document.getElementById('sair');
    var nome_cliente = document.getElementById('nome_cliente');




    saldo.style.borderLeft="none";

    transferencia.style.borderLeft="none";
    deposito.style.borderLeft="none";
    pix.style.borderLeft="none";
    recarga.style.borderLeft="none";
    suporte.style.borderLeft="none";
    sair.style.borderLeft="none";
    nome_cliente.style.borderLeft="none";
    extrato.style.borderLeft="5px solid #fff";
   
}

function menuTransferencia(){
    var transferencia = document.getElementById('transferencia');
    var extrato = document.getElementById('extrato');
    var saldo = document.getElementById('saldo');
    var deposito = document.getElementById('deposito');
    var pix = document.getElementById('pix');
    var recarga = document.getElementById('recarga');
    var suporte = document.getElementById('suporte');
    var sair = document.getElementById('sair');
    var nome_cliente = document.getElementById('nome_cliente');

    saldo.style.borderLeft="none";
    extrato.style.borderLeft="none";
    deposito.style.borderLeft="none";
    pix.style.borderLeft="none";
    recarga.style.borderLeft="none";
    suporte.style.borderLeft="none";
    sair.style.borderLeft="none";
    nome_cliente.style.borderLeft="none";
    transferencia.style.borderLeft="5px solid #fff";

    
}

function menuDeposito(){
    var deposito = document.getElementById('deposito');
    var extrato = document.getElementById('extrato');
    var saldo = document.getElementById('saldo');
    var transferencia = document.getElementById('transferencia');
    var pix = document.getElementById('pix');
    var recarga = document.getElementById('recarga');
    var suporte = document.getElementById('suporte');
    var sair = document.getElementById('sair');
    var nome_cliente = document.getElementById('nome_cliente');

    saldo.style.borderLeft="none";
    extrato.style.borderLeft="none";
    transferencia.style.borderLeft="none";
    pix.style.borderLeft="none";
    recarga.style.borderLeft="none";
    suporte.style.borderLeft="none";
    sair.style.borderLeft="none";
    nome_cliente.style.borderLeft="none";
    deposito.style.borderLeft="5px solid #fff";
}

function menuPix(){
    var pix = document.getElementById('pix');
    var extrato = document.getElementById('extrato');
    var saldo = document.getElementById('saldo');
    var transferencia = document.getElementById('transferencia');
    var deposito = document.getElementById('deposito');
    var recarga = document.getElementById('recarga');
    var suporte = document.getElementById('suporte');
    var sair = document.getElementById('sair');
    var nome_cliente = document.getElementById('nome_cliente');

    saldo.style.borderLeft="none";
    extrato.style.borderLeft="none";
    transferencia.style.borderLeft="none";
    deposito.style.borderLeft="none";
    recarga.style.borderLeft="none";
    suporte.style.borderLeft="none";
    sair.style.borderLeft="none";
    nome_cliente.style.borderLeft="none";
    pix.style.borderLeft="5px solid #fff";
}

function menuRecarga(){
    var recarga = document.getElementById('recarga');
    var extrato = document.getElementById('extrato');
    var saldo = document.getElementById('saldo');
    var transferencia = document.getElementById('transferencia');
    var deposito = document.getElementById('deposito');
    var pix = document.getElementById('pix');
    var suporte = document.getElementById('suporte');
    var sair = document.getElementById('sair');
    var nome_cliente = document.getElementById('nome_cliente');

    saldo.style.borderLeft="none";
    extrato.style.borderLeft="none";
    transferencia.style.borderLeft="none";
    deposito.style.borderLeft="none";
    pix.style.borderLeft="none";
    suporte.style.borderLeft="none";
    sair.style.borderLeft="none";
    nome_cliente.style.borderLeft="none";
    recarga.style.borderLeft="5px solid #fff";
}

function menuSuporte(){
    var suporte = document.getElementById('suporte');
    var extrato = document.getElementById('extrato');
    var saldo = document.getElementById('saldo');
    var transferencia = document.getElementById('transferencia');
    var deposito = document.getElementById('deposito');
    var pix = document.getElementById('pix');
    var recarga = document.getElementById('recarga');
    var sair = document.getElementById('sair');
    var nome_cliente = document.getElementById('nome_cliente');

    saldo.style.borderLeft="none";
    extrato.style.borderLeft="none";
    transferencia.style.borderLeft="none";
    deposito.style.borderLeft="none";
    pix.style.borderLeft="none";
    recarga.style.borderLeft="none";
    sair.style.borderLeft="none";
    nome_cliente.style.borderLeft="none";
    suporte.style.borderRight="5px solid #fff";
}

function menuSair(){
    var sair = document.getElementById('sair');
    var extrato = document.getElementById('extrato');
    var saldo = document.getElementById('saldo');
    var transferencia = document.getElementById('transferencia');
    var deposito = document.getElementById('deposito');
    var pix = document.getElementById('pix');
    var recarga = document.getElementById('recarga');
    var suporte = document.getElementById('suporte');
    var nome_cliente = document.getElementById('nome_cliente');

    saldo.style.borderLeft="none";
    extrato.style.borderLeft="none";
    transferencia.style.borderLeft="none";
    deposito.style.borderLeft="none";
    pix.style.borderLeft="none";
    recarga.style.borderLeft="none";
    suporte.style.borderLeft="none";
    nome_cliente.style.borderLeft="none";
    sair.style.borderLeft="5px solid #fff";
}


let photo = document.getElementById("usuario-img");
let file = document.getElementById("usuario");

photo.addEventListener('click', () => {
    file.click();
})

file.addEventListener('change', (event) =>{
    

    let leitor = new FileReader();

    leitor.onload = () => {
        photo.src = leitor.result;
    }

    leitor.readAsDataURL(file.files[0]);
})



// menu Hambúrguer

var menu = document.getElementById('icone-menu');

menu.addEventListener('click', AbrirMenu);

function AbrirMenu(){
    

    var fundo = document.getElementById('fundo');
    var icone_fechar = document.getElementById('icone-fechar');


    menu.style.display="none";
    icone_fechar.style.display="inline";
    fundo.style.display="inline";
    fundo.style.animation="menu 0.5s normal 1";

}


var icone_fechar = document.getElementById('icone-fechar');

icone_fechar.addEventListener('click', FecharMenu)

function FecharMenu(){
    

    var fundo = document.getElementById('fundo');
    var icone_fechar = document.getElementById('icone-fechar');

    icone_fechar.style.display="none";
    fundo.style.display="none";
    menu.style.display="inline";
    menu.style.animation="menu-icone 0.5s normal 1"
}