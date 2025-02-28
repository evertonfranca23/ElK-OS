// Lógica para abrir/fechar submenus ao clicar
document.querySelectorAll('.menu-toggle').forEach(function (menuLink) {
    menuLink.addEventListener('click', function (e) {
        e.preventDefault();
        var nextElem = this.nextElementSibling;
        if (nextElem && nextElem.classList.contains('submenu')) {
            var allSubmenus = document.querySelectorAll('.submenu');
            allSubmenus.forEach(function (submenu) {
                if (submenu !== nextElem) {
                    submenu.style.display = 'none';  // Fecha os outros submenus
                    submenu.classList.remove('active'); // Remove o deslocamento dos outros submenus fechados
                }
            });

            // Alterna a exibição do submenu clicado
            if (nextElem.style.display === 'block') {
                nextElem.style.display = 'none';
                nextElem.classList.remove('active'); // Remove o padding-left extra ao fechar
            } else {
                nextElem.style.display = 'block';
                nextElem.classList.add('active'); // Adiciona o padding-left extra ao abrir
            }
        }
    });
});

// Seleciona todos os links de menu no sidebar
const menuItems = document.querySelectorAll('#sidebar ul li a');

// Adiciona o evento de clique a todos os itens de menu
menuItems.forEach(item => {
    item.addEventListener('click', function() {
        // Remove a classe 'selected' de todos os itens
        menuItems.forEach(i => i.classList.remove('selected'));
        
        // Adiciona a classe 'selected' ao item clicado
        this.classList.add('selected');
    });
});

/// Configuração dos gráficos usando Chart.js

const createChart = (id, type, data, options) => {
    var ctx = document.getElementById(id).getContext('2d');
    return new Chart(ctx, {
        type: type,
        data: data,
        options: {
          responsive: true,
          maintainAspectRatio: false, // Mantém o gráfico responsivo e evita crescimento indefinido
        }
    });
};

// Dados e configuração dos gráficos
const dataOSAbertas = {
    labels: ['Pendente', 'Concluida', 'Cancelada'],
    datasets: [{
        label: 'OS Status',
        data: [12, 19, 3],
        backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe'],
    }],
    options: {
        responsive: true,
        maintainAspectRatio: false, // Mantém o gráfico responsivo e evita crescimento indefinido
    }
};

const dataOSMes = {
    labels: ['Semana 1', 'Semana 2', 'Semana 3', 'Semana 4'],
    datasets: [{
        label: 'OS no Mês',
        data: [7, 12, 6, 8],
        backgroundColor: '#ff6384'
        
    }]
};

const dataOSColaborador = {
    labels: ['Ana', 'Bruno', 'Carlos', 'Daniela'],
    datasets: [{
        label: 'OS por Colaborador',
        data: [5, 10, 7, 3],
        backgroundColor: '#36a2eb'
    }]
};

const dataFluxoCaixa = {
    labels: ['Entrada', 'Saida', 'Saldo'],
    datasets: [{
        label: 'Caixa',
        data: [5000, 300, 1500, 4000],
        backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe','#F0E68C']
    }]
};

const dataContasReceber = {
    labels: ['Cliente A', 'Cliente B', 'Cliente C', 'Cliente D'],
    datasets: [{
        label: 'Contas a Receber',
        data: [7000, 2000, 3000, 2500],
        backgroundColor: '#98FB98'
    }]
};

const dataLucroMensal = {
    labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai'],
    datasets: [{
        label: 'Lucro Mensal',
        data: [8000, 9000, 7500, 8500, 9500],
        backgroundColor: '#36a2eb'
    }]
};

// Configurações globais para os gráficos
const options = {
    responsive: true,
    maintainAspectRatio: false,  // Garante que os gráficos não cresçam indefinidamente
    scales: {
        y: {
            beginAtZero: true
        }
    }
};
const dataAtrasadas = {
    labels: ['Aluguel', 'Internet', 'Fornecedores'],
    datasets: [{
        label: 'Contas em Atraso',
        data: [5000, 300, 1500, 4000],
        backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe']
    }]
};
const dataAtrasoCliente = {
    labels: ['Cliente A', 'Cliente B', 'Cliente C', 'Cliente D'],
    datasets: [{
        label: 'Cliente em Atraso',
        data: [7000, 2000, 3000, 2500],
        backgroundColor: '#98FB98'
    }]
};

// Criação dos gráficos
createChart('chartOSAbertas', 'doughnut', dataOSAbertas, options);
createChart('chartOSMes', 'bar', dataOSMes, options);
createChart('chartOSColaborador', 'bar', dataOSColaborador, options);
createChart('chartFluxoCaixa', 'bar', dataFluxoCaixa, options);
createChart('chartContasReceber', 'bar', dataContasReceber, options);
createChart('chartLucroMensal', 'bar', dataLucroMensal, options);
createChart('chartAtrasadas', 'bar', dataAtrasadas, options);
createChart('chartAtrasoCliente', 'bar', dataAtrasoCliente, options);
