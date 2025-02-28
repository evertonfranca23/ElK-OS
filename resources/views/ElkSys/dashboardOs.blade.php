<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard ELK Sistemas</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/ElkSys/css/dashboardOs.css') }}">
    <!--<link rel="stylesheet" href="styles.css">-->
</head>

<body>

    <!-- Cabeçalho -->
    <header>
      <div class="header-title">Dashboard OS</div>
      <div class="header-icons">
        <!-- Ícone de usuário -->
        <a href="configuracoes.html" id="user-settings" class="user-icon">
            <i class="fa fa-user"></i>
        </a>
        <!-- Botão de logout -->
        <a href="#" class="logout-btn">Logout</a>
      </div>
    </header>

    <!-- Menu lateral -->
    <div id="sidebar" class="sidebar">
        <a href="{{ route('elk.dashboard') }}">ELK Sistemas</a>
        <ul>
            <li><a href="#" class="menu-toggle">Cadastro</a>
                <ul class="submenu">
                    <li><a href="#" onclick="loadContent('{{ route('elk.cadastroCliOs') }}')">Cliente</a></li>
                    <li><a href="#" onclick="loadContent('{{ route('elk.cadastroEmpresaOs') }}')">Empresa</a></li>
                    <li><a href="#">Colaborador</a></li>
                    <li><a href="#">OS</a></li>
                    <li><a href="#">Tarefa</a></li>
                    <li><a href="#">Produto/Serviço</a></li>
                </ul>
            </li>
            <li><a href="#" class="menu-toggle">Consultar</a>
                <ul class="submenu">
                    <li><a href="#" onclick="loadContent('page1.html')">Cliente</a></li>
                    <li><a href="#">Empresa</a></li>
                    <li><a href="#">Colaborador</a></li>
                    <li><a href="#">OS</a></li>
                    <!--<li><a href="#">Tarefa</a></li>-->
                    <li><a href="#">Estoque</a></li>
                </ul>
            </li>
            <li><a href="#" class="menu-toggle">Financeiro</a>
                <ul class="submenu">
                    <li><a href="#">Caixa</a></li>
                    <li><a href="#">Banco</a></li>
                    <li><a href="#">A pagar</a></li>
                    <li><a href="#">A Receber</a></li>
                    <li><a href="#">Atrasadas</a></li>
                    <li><a href="#">Atraso Cliente</a></li>
                </ul>
            </li>
            <li><a href="#" class="menu-toggle">Relatório</a>
                <ul class="submenu">
                    <li><a href="#">OS</a></li>
                    <li><a href="#">Financeiro</a></li>
                    <li><a href="#">Empresa</a></li>
                    <li><a href="#">Estoque</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- Conteúdo principal -->
    <div class="content">
        <div id="dashboard-content" class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-3 shadow">
                        <h5 class="card-title">OS Status</h5>
                        <canvas id="chartOSAbertas" class="chart"></canvas>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 shadow">
                        <h5 class="card-title">OS no Mês</h5>
                        <canvas id="chartOSMes" class="chart"></canvas>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 shadow">
                        <h5 class="card-title">OS por Colaborador</h5>
                        <canvas id="chartOSColaborador" class="chart"></canvas>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-3 shadow">
                        <h5 class="card-title">Fluxo Caixa</h5>
                        <canvas id="chartFluxoCaixa" class="chart"></canvas>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 shadow">
                        <h5 class="card-title">Contas a Receber</h5>
                        <canvas id="chartContasReceber" class="chart"></canvas>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 shadow">
                        <h5 class="card-title">Lucro Mensal</h5>
                        <canvas id="chartLucroMensal" class="chart"></canvas>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-3 shadow">
                        <h5 class="card-title">Atrasadas</h5>
                        <canvas id="chartAtrasadas" class="chart"></canvas>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-3 shadow">
                        <h5 class="card-title">Atraso Cliente</h5>
                        <canvas id="chartAtrasoCliente" class="chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rodapé -->
    <footer>
      &copy; 2024 ELK Sistemas. Todos os direitos reservados.
      <a href="#">Instagram</a> | 
      <a href="#">WhatsApp</a> |
      <a href="mailto:contato.elksystems@gmail.com">Email</a>
    </footer>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('/ElkSys/js/dashboardOs.js') }}"></script>
    <!--<script src="script.js"></script>-->
    <!-- JavaScript para o Menu Hambúrguer e Links -->
    <script>
      // Alterna a classe 'active' no menu lateral para abrir/fechar o sidebar
      document.getElementById('sidebar').addEventListener('click', function() {
          this.classList.toggle('active');
      });
      
      // Função para carregar conteúdo dinâmico ao clicar nos links do menu lateral
      function loadContent(page) {
          fetch(page)
              .then(response => {
                  if (!response.ok) {
                      throw new Error('Erro ao carregar a página: ' + response.statusText);
                  }
                  return response.text();
              })
              .then(html => {
                  // Substitui o conteúdo atual pelo conteúdo da página carregada
                  document.getElementById('dashboard-content').innerHTML = html;
              })
              .catch(error => {
                  console.error('Erro:', error);
                  document.getElementById('dashboard-content').innerHTML = '<p>Erro ao carregar o conteúdo.</p>';
              });
      }
    </script>
</body>

</html>
