<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <!--<link rel="stylesheet" href="styles2.css">-->
    <link rel="stylesheet" href="{{ asset('/ElkSys/css/cadastroCliOs.css') }}">

</head>
<body>
  
    <div id="main-content">
      <div class="row">
          <!-- Card com Cadastro de Clientes -->
          <div class="col-12 mb-4">
            <div class="header">
                <h2 class="mt-2">Cadastro de Empresa</h2>
              </div>
            <div class="card">
              <form method="POST"> 
                   <!--@csrf-->
                  <div class="form-group">
                      <label for="nome">Nome/Empresa</label>
                      <input type="text" id="nome" name="nome" required>
                  </div>
                  <div class="form-group">
                      <label for="cpf">CPF/CNPJ</label>
                      <input type="text" id="cpf" name="cpf" required>
                  </div>
                  <div class="form-group">
                      <label for="data_nascimento">Data de Adesão</label>
                      <input type="date" id="data_nascimento" name="data_nascimento" required>
                  </div>
                  <div class="form-group">
                      <label for="endereco">Endereço</label>
                      <input type="text" id="endereco" name="endereco" required>
                  </div>
                  <div class="form-group">
                      <label for="numero">Número</label>
                      <input type="text" id="numero" name="numero" required>
                  </div>
                  <div class="form-group">
                      <label for="cidade">Cidade</label>
                      <input type="text" id="cidade" name="cidade" required>
                  </div>
                  <div class="form-group">
                      <label for="estado">Estado</label>
                      <input type="text" id="estado" name="estado" required>
                  </div>
                  <div class="form-group">
                      <label for="cep">CEP</label>
                      <input type="text" id="cep" name="cep" required>
                  </div>
                  <div class="form-group">
                      <label for="celular">Celular</label>
                      <input type="text" id="celular" name="celular" required>
                  </div>
                  <div class="form-group">
                      <label for="email">E-mail</label>
                      <input type="email" id="email" name="email" required>
                  </div>
                  <button type="submit">Cadastrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <script src="{{ asset('/ElkSys/js/cadastroCliOs.js') }}"></script>
</body>
</html>
