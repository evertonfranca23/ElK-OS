<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Clientes - ELKSystems</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles1.css">
</head>
<body>

    <!-- Conteúdo Principal -->
    <main id="main-content" class="container-fluid">
        <div class="row">
            <!-- Card com a Lista de Clientes -->
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="mt-2">Lista de Clientes</h2>
                        <input type="text" id="search" class="form-control mt-2" placeholder="Pesquisar...">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Contato</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody id="client-list">
                                    <!-- Exemplo de Linha de Cliente -->
                                    <tr>
                                        <td>1</td>
                                        <td>João Silva</td>
                                        <td>joao.silva@email.com</td>
                                        <td>
                                          <a href="atualizar_cliente.html" target="content-frame" class="btn btn-primary btn-sm">
                                              <i class="bi bi-pencil-square"></i> Update
                                          </a>
                                          <a href="excluir_cliente.html" target="content-frame" class="btn btn-danger btn-sm">
                                              <i class="bi bi-trash-fill"></i> Excluir
                                          </a>
                                        </td>
                                    </tr>
                                    <!-- Mais linhas de clientes serão carregadas aqui -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Card para o Conteúdo dos Links -->
                <div class="col-12">
                    <div class="card" id="content-card" style="display:none;">
                        <div class="card-body" id="content-frame">
                            <!-- O conteúdo dos links será carregado aqui -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script1.js"></script>
</body>
</html>
