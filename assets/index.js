
carregarCorretores();

document.getElementById("cadastroForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let formData = new FormData(this);

    fetch("../pages/processa.php", { 
        method: "POST",
        body: formData
    })
    .then(response => response.json()) 
    .then(data => {
        alert(data.mensagem);
        if (data.sucesso) {
            this.reset();
        }
    })
    .catch(error => console.error("Erro ao cadastrar:", error));
});


function carregarCorretores() {
    fetch('../pages/listar_corretores.php') 
        .then(response => response.json()) 
        .then(data => {
            let tabela = document.getElementById('tabela-corretores');
            tabela.innerHTML = ''; 
            
            data.forEach(corretor => {
                let row = `<tr>
                    <td>${corretor.id}</td>
                    <td>${corretor.nome}</td>
                    <td>${corretor.cpf}</td>
                    <td>${corretor.creci}</td>
                    <td>        
                        <a href="../pages/editar.php?id=${corretor.id}">Editar</a> |
                        <a href="../pages/excluir.php?id=${corretor.id}" onclick="return confirm('Tem certeza?')">Excluir</a>
                    </td>        
                </tr>`;

                tabela.innerHTML += row;
            });
        })
        .catch(error => console.error('Erro ao buscar corretores:', error));
}

// Carrega os corretores assim que a página for aberta
window.onload = carregarCorretores;

function validarFormulario() {
        let cpf = document.getElementById('cpf').value.replace(/\D/g, '');
        let creci = document.getElementById('creci').value;
        let nome = document.getElementById('nome').value;
        
        if (cpf.length !== 11) {
            alert('O CPF deve ter 11 dígitos numéricos.');
            return false;
        }
        if (creci.length < 2) {
            alert('O CRECI deve ter pelo menos 2 caracteres.');
            return false;
        }
        if (nome.length < 2) {
            alert('O Nome deve ter pelo menos 2 caracteres.');
            return false;
        }
        return true;
    }

    function aplicarMascaraCPF(input) {
        input.value = input.value.replace(/\D/g, '')
                                 .replace(/(\d{3})(\d)/, '$1.$2')
                                 .replace(/(\d{3})(\d)/, '$1.$2')
                                 .replace(/(\d{3})(\d{1,2})$/, '$1-$2');
    }