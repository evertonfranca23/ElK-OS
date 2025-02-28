// Filtragem da lista de clientes
document.getElementById('search').addEventListener('keyup', function() {
    const searchTerm = this.value.toLowerCase();
    const clientList = document.getElementById('client-list').getElementsByTagName('tr');
    
    Array.from(clientList).forEach(function(client) {
        const clientName = client.getElementsByTagName('td')[1].textContent.toLowerCase();
        client.style.display = clientName.includes(searchTerm) ? '' : 'none';
    });
});

// Carregar conteúdo dos links dentro do content-frame
document.querySelectorAll('a[target="content-frame"]').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        const url = this.getAttribute('onclick');
        
        fetch(url)
            .then(response => response.text())
            .then(data => {
                document.getElementById('content-card').style.display = 'block';
                document.getElementById('content-frame').innerHTML = data;
            });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    //const navLinks = document.querySelectorAll('#sidebar .nav-link');
    //const sidebar = document.getElementById('sidebar');
    //const toggleSidebar = document.getElementById('toggle-sidebar');

    // Detecta clique nos links do menu lateral
    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const contentUrl = this.getAttribute('onclick');

            // Carrega o conteúdo dentro do card main-content
            fetch(contentUrl)
                .then(response => response.text())
                .then(data => {
                    document.querySelector('#main-content .card-body').innerHTML = data;
                });

            // Se for tela pequena, esconder o menu lateral após clique no link
            if (window.innerWidth <= 768) {
                sidebar.classList.remove('show');
            }
        });
    });

    // Abrir ou fechar o menu lateral em telas pequenas
    toggleSidebar.addEventListener('click', function () {
        sidebar.classList.toggle('show');
    });
});
