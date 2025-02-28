<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ELK Systems - Início</title>
    <link rel="stylesheet" href="{{ asset('/ElkSys/css/index.css') }}">
    <!--<link rel="stylesheet" href="styles.css">-->
</head>
<body>

    <!-- Cabeçalho -->
    <header class="header">
        <h1>ELK Sistemas</h1>
        <a href="{{ route('elk.login') }}" class="btn-login">Entrar</a>
    </header>

    <!-- Missão -->
    <section class="info-section">
        <h2>Missão</h2>
        <p>Oferecer soluções inovadoras e eficientes para gestão de serviços e estacionamentos, garantindo praticidade e automação aos nossos clientes.</p>
    </section>

    <!-- Visão -->
    <section class="info-section">
        <h2>Visão</h2>
        <p>Ser referência no desenvolvimento de sistemas SaaS para gestão de ordens de serviço e estacionamentos no Brasil.</p>
    </section>

    <!-- Produtos -->
    <h2>Nossos Produtos</h2>
    <section class="product-section">
        <div class="product">
            <img src="{{ asset('images/sistema-os.jpg') }}" alt="Sistema OS">
            <h3>Sistema de Ordem de Serviço</h3>
            <p>Gerencie ordens de serviço com eficiência, controle status, tarefas e fluxo de caixa em um só lugar.</p>
        </div>

        <div class="product">
            <img src="{{ asset('images/sistema-estacionamento.jpg') }}" alt="Sistema Estacionamento">
            <h3>Sistema para Estacionamentos</h3>
            <p>Automatize a gestão do seu estacionamento com controle de entrada, saída e pagamentos.</p>
        </div>
    </section>

    <!-- Contato -->
    <section class="info-section">
        <h2>Contato</h2>
        <p>Email: contato.elksystems@gmail.com</p>
        <p>Telefone: (11) 99999-9999</p>

        <!-- Redes Sociais -->
        <div class="social-icons">
            <a href="https://instagram.com" target="_blank">Instagram</a>
            <a href="https://wa.me/5599999999999" target="_blank">WhatsApp</a>
        </div>
    </section>

</body>
</html>
