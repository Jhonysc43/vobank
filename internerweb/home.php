


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Icard Pay - Sua Conta Digital</title>

    <link rel="stylesheet" href="src/css/home.css">
</head>
<body>

    <main>
        <section class="fundo" id="fundo">

            <div class="menu" id="fundo">


                <p class="nome_cliente" id="nome_cliente">Olá <?php echo $_SESSION['nome']?>    </p>

                <div class="usuario-imagem">
                    <img src="src/imagens/usuario(claranet).png" alt="icone-usuario" class="usuario-img" id="usuario-img"">
                    
                </div>


                <input type="file" name="usuario" id="usuario" accept="Image/*" width="150px">

                   
                <ul class="opcoes" id="opcoes">
                    <li id="saldo">Consultar saldo</li>
                    <li id="extrato">Extrato financeiro</li>
                    <li id="transferencia">Tranferência</li>
                    <li id="deposito">Depositar</li>
                    <li id="pix">Área do pix</li>
                    <li id="recarga">Recarregue seu celular</li>
                    <li id="suporte">Suporte</li>

                    <a href="sair.php">
                        <li id="sair">Sair </li>
                    </a>
                    

                </ul>
    
                

            </div>

        </section>

        <img src="src/imagens/menu-aberto.png" alt="icone-menu" class="icone-menu" id="icone-menu" width="50px" height="50px">
        <img src="src/imagens/x.png" alt="icone-x" class="icone-fechar" id="icone-fechar" width="50px" height="50px">

        <!-- Tela principal da home -->
        <section class="texto-fundo" id="texto-fundo">

            <div class="texto-principal">

                <h1>Bem-vindo <?php echo $_SESSION['nome']?></h1>


               
<style>
#cartao-pro-dependente {
  box-sizing: border-box;
}
#cartao-pro-dependente.pacote {
  width: 100%;
  display: flex;
  justify-content: center;
}
#cartao-pro-dependente.pacote .tipo {
  width: 160px;
  margin: 1em;
  border-radius: 10px;
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  padding: 2em;
  cursor: pointer;
}
#cartao-pro-dependente.pacote .tipo:hover {
  background-color: white;
  box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.22);
}
#cartao-pro-dependente.pacote .tipo.selecionado {
  background-color: #f9e4d6;
}
#cartao-pro-dependente.pacote .tipo img {
  width: 120px;
  display: block;
  margin: auto;
}
#cartao-pro-dependente.pacote .tipo span {
  display: block;
  text-align: center;
  margin-top: 1.5em;
  text-transform: uppercase;
  font-size: 0.8em;
  font-weight: 600;
  color: #E06F23;
}
#cartao-pro-dependente.pacote .tipo p {
  margin-bottom: 0;
  margin-top: 0.5em;
  text-align: center;
  opacity: 0.5;
}
</style>
 <div id="cartao-pro-dependente" class="pacote">
  <div id="cartao-virtual" class="tipo selecionado">
    <img class="img-normal" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1257241/cartao-virtual.svg">
    <img class="img-selecionado" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1257241/cartao-virtual-selecionado.svg">
    <span>cartão virtual</span>
    <p>Custo zero</p>
  </div>
  <div id="cartao-fisico" class="tipo">
    <img class="img-normal" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1257241/cartao-fisico.svg">
    <img class="img-selecionado" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1257241/cartao-fisico-selecionado.svg">
    <span>cartão físico</span>
    <p>Custo <strong>R$ 25,00</strong></p>
  </div>
</div>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
      <script id="rendered-js" >
//estado inicial do DOM
$("#cartao-virtual").find(".img-normal").hide();
$("#cartao-virtual").find(".img-selecionado").show();
$("#cartao-fisico").find(".img-normal").show();
$("#cartao-fisico").find(".img-selecionado").hide();

$("#cartao-virtual").click(function () {

  $(this).toggleClass("selecionado");

  if ($(this).hasClass("selecionado")) {

    //comportamento do estado inicial
    $("#cartao-fisico").find(".img-selecionado").hide();
    $("#cartao-fisico").find(".img-normal").show();

    //comportamento de radio btn
    $("#cartao-fisico").removeClass("selecionado");

    $(this).find(".img-normal").hide();
    $(this).find(".img-selecionado").show();
  } else {
    $(this).find(".img-normal").show();
    $(this).find(".img-selecionado").hide();
  };

});

$("#cartao-fisico").click(function () {

  $(this).toggleClass("selecionado");

  if ($(this).hasClass("selecionado")) {

    //comportamento do estado inicial
    $("#cartao-virtual").find(".img-selecionado").hide();
    $("#cartao-virtual").find(".img-normal").show();

    //comportamento de radio btn
    $("#cartao-virtual").removeClass("selecionado");

    $(this).find(".img-normal").hide();
    $(this).find(".img-selecionado").show();
  } else {
    $(this).find(".img-normal").show();
    $(this).find(".img-selecionado").hide();
  };

});
//# sourceURL=pen.js
    </script>

               

            </div>

        </section>


        

        <!-- texto principal do Saldo -->
        <section class="saldo-fundo" id="saldo-fundo">

            <div class="saldo-principal">

                <img src="src/imagens/saldo.png" alt="icone-cifrão" width="100px">
                <br>
                <h1c class="h1">Consulte seu saldo</h1>

                <hr>

                <div class="informacoes-saldo">

                    <p>Conta</p>

                    <p class="valor" id="ocultar-saldo">R$ <span id="dinheiro">0,00</span> Reais</p>


                    <p>Cartão de Crédito</p>

                    <p class="valor">R$ 5.500,00</p>

                </div>

            </div>

        </section>


        <!-- texto principal do Extrato -->
        <section class="extrato-fundo" id="extrato-fundo">

            <div class="extrato-principal" id="extrato-principal">

                <img src="src/imagens/extrato.png" alt="icone-cifrão" width="100px">

                <h1>Extratro financeiro</h1>

                <hr>

                <div class="informacoes-extrato">

                    <div class="grupo-extrato">
                        <span class="informacoes-extrato">Data</span>
                        <span class="informacoes-extrato">Histórico</span>
                        <span class="informacoes-extrato">Valor</span>
                    </div>
                    
                    <div class="fundo-compra1">
                        <span class="compra1">Data</span>
                        <span class="compra1">----</span>
                        <span class="compra1">R$ </span>
                    </div>


                    <div class="fundo-compra2">
                        <span class="compra2">Data</span>
                        <span class="compra2">----</span>
                        <span class="compra2">R$ </span>
                    </div>

                    
                    <div class="fundo-compra3">
                        <span class="compra3">Data</span>
                        <span class="compra3">----</span>
                        <span class="compra3">R$ </span>
                    </div>


                    <div class="fundo-compra4">
                        <span class="compra4">Data</span>
                        <span class="compra4">----</span>
                        <span class="compra4">R$ </span>
                    </div>


                    <div class="fundo-compra5">
                        <span class="compra5">Data</span>
                        <span class="compra5">----</span>
                        <span class="compra6">R$ </span>
                    </div>


                    <div class="fundo-compra6">
                        <span class="compra6">Data</span>
                        <span class="compra6">----</span>
                        <span class="compra6">R$ </span>
                    </div>


                    <div class="fundo-compra7">
                        <span class="compra7">Data</span>
                        <span class="compra7">----</span>
                        <span class="compra7">R$ </span>
                    </div>



                </div>

            </div>

        </section>




        <!-- texto principal da transferência -->
        <section class="transferência-fundo" id="transferência-fundo">

            <div class="transferência-principal">

                <img src="src/imagens/transferencia.png" alt="icone-cifrão" width="100px">

                <h1>Relizar Transferência</h1>

                <hr>


                <form class="menu_banco">

                    <select name="#" id="banco_transferencia" class="bancos_transferencia">

                        <option value="bancos_transferencia" disabled selected>Instituição</option>
                        <option value="">Bradesco</option>
                        <option value="">Santander</option>
                        <option value="">Caixa</option>
                        <option value="">Itaú</option>
                        <option value="">Banco do Brasil</option>

                    </select>


                    <br>


                    <select name="#" id="contas_transferencia" class="bancos_transferencia">

                        <option value="contas_transferencia" disabled selected>Tipo de conta</option>
                        <option value="">Conta corrente</option>
                        <option value="">Conta poupança</option>
                        <option value="">Conta salário</option>
                        <option value="">Conta digital</option>

                    </select>

                </form>

                <form action="" id="transferencia-valores" class="transferencia-valores">
                    <div class="form-2">

                        <input type="number" name="agencia" class="agencia_transferencia" id="agencia_transferencia" placeholder="Agência">

                        <input type="number" name="conta" class="conta_transferencia" id="conta_transferencia" placeholder="Conta">

                        <input type="number" name="valor" class="valor_transferencia" id="valor_transferencia" placeholder="Valor R$">

                    </div>

                    <div class="form-2">
                        <input type="text" name="titular" class="titular_transferencia" id="titular_transferencia" placeholder="Titular">

                        <input type="number" name="cpf" class="cpf_transferencia" id="cpf_transferencia" placeholder="CPF/CNPJ">

                        <button class="botao_transferencia" id="botao_transferencia">Enviar transferência</button>
                    </div>
                </form>

                

            </div>

        </section>



        <!-- texto principal do deposito -->
        <section class="deposito-fundo" id="deposito-fundo">

            <div class="deposito-principal">

                <!-- <img src="src/imagens/transferencia.png" alt="icone-cifrão" width="150px"> -->

                <h1>Depósito</h1>

                <hr>


                <form >

                    <h2 class="h2-depositar">Depósito para sua conta</h2>

                    <input type="text" name="valor_deposito" id="valor_deposito" class="valor_deposito" placeholder="Valor R$">

                    <button class="depositar" id="depositar">Depositar</button>



                    <h2 class="h2-depositar">Depósito para outra conta</h2>

                    <select name="#" id="bancos" class="bancos_depositar">

                        <option  value="bancos" disabled selected>Instituição</option>
                        <option value="">Bradesco</option>
                        <option value="">Santander</option>
                        <option value="">Caixa</option>
                        <option value="">Itaú</option>
                        <option value="">Banco do Brasil</option>

                    </select>
                    <br>

                    <select name="#" id="contas" class="contas_depositar">

                        <option value="conta" disabled selected>Tipo de conta</option>
                        <option value="">Conta corrente</option>
                        <option value="">Conta poupança</option>
                        <option value="">Conta salário</option>
                     

                    </select>

                </form>

                <form action="" id="depositar-valores" class="depositar-valores">
                    <div class="form-2">

                        <input type="number" name="agencia" class="agencia_depositar" id="agencia_depositar" placeholder="Agência">

                        <input type="number" name="conta" class="conta_depositar" id="conta_depositar" placeholder="Conta">

                        <input type="number" name="valor" class="valor_depositar" id="valor_depositar" placeholder="Valor R$">

                    </div>

                    <div class="form-2">

                        <input type="text" name="titular" class="titular_depositar" id="titular_depositar" placeholder="Titular">

                        <input type="number" name="cpf" class="cpf_depositar" id="cpf_depositar" placeholder="CPF/CNPJ">

                        <button class="botao_depositar" id="botao_depositar">Depositar</button>
                    </div>
                </form>

            </div>

        </section>



        <!-- texto principal do Pix -->
        <section class="pix-fundo" id="pix-fundo">

            <div class="pix-principal">

                <!-- <img src="src/imagens/transferencia.png" alt="icone-cifrão" width="150px"> -->

                <h1>Área pix</h1>

                <hr>



                <div class="btn-pix">
                    <button class="btn btn-transferir">Transferir</button>
                    <button class="btn btn-pix"> Pix copia e cola</button>
    
                    <br>
                    <button class="btn btn-qrcode">Ler QR code</button>
                    <button class="btn btn-cobrar">Cobrar</button>
                </div>




                <br>


                <button class="btnM btn-chave">Registrar chave pix</button>

                <br>

                <button class="btnM btn-configurar">Configurar chave pix</button>


                

            </div>

        </section>





        <!-- texto principal do regarga de celular -->
        <section class="recarga-fundo" id="recarga-fundo">

            <div class="recarga-principal">

                <img src="src/imagens/celular(claranet).png" alt="icone-cifrão" width="100px">

                <h1>Recarregue seu celular</h1>

                <hr>

                <form >

                    <select name="#" id="recarga_celular" class="lista">

                        <option value="recarga_celular" disabled selected>Operadora</option>
                        <option value="">Vivo</option>
                        <option value="">Tim</option>
                        <option value="">Oi</option>
                        <option value="">Claro</option>

                    </select>

                    <br>

                    <input type="number" name="valor" class="valor" id="valor_recarga" placeholder="Digite o valor da recarga">

                    <input type="number" name="valor" class="numero" id="numero_recarga" placeholder="Digite o número de telefone">

                    <br>


                    <button class="btn-enviar" id="enviar_recarga">Efetuar recarga</button>
                </form>

            </div>

        </section>



        <!-- texto principal do suporte -->
        <section class="suporte-fundo" id="suporte-fundo">

            <div class="suporte-principal">

                <img src="src/imagens/transferencia.png" alt="icone-cifrão" width="100px">

                <h1>Suporte</h1>

                <hr>

                <h2>Entre em contato</h2>

                <form id="formulario_suporte" class="formulario_suporte">

                    <input type="text" name="nome_suporte" id="nome_suporte" class="nome_suporte" placeholder="Informe seu nome">

                    <input type="email" name="email_suporte" id="email_suporte" class="email_suporte" placeholder="Informe seu e-mail">

                    <input type="text" name="assunto_suporte" id="assunto_suporte" class="assunto_suporte" placeholder="Informe o assunto">
    
                    <textarea name="caixa_suporte" id="caixa_suporte" class="caixa_suporte" cols="15" rows="5" placeholder="Escreva sua mensagem"></textarea>

                    <button id="btn-suporte" class="btn_suporte">Enviar</button>

                </form>


            </div>

        </section>

        
    </main>


    <script src="src/javascript/home.js" defer></script>
    <script src="src/javascript/valores.js" defer></script>
</body>
</html>