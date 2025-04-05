📋 Cadastro de Corretores

Este projeto tem como objetivo criar um sistema de **cadastro de corretores** com validação de formulários e integração com um banco de dados **MySQL**. O sistema é totalmente funcional com front-end, back-end e banco de dados conectados.

## 🚀 Tecnologias Utilizadas

- **HTML**: Estrutura do front-end.
- **CSS**: Estilização das páginas.
- **JavaScript**: Validação do formulário no lado do cliente.
- **PHP**: Lógica de back-end e conexão com o banco de dados.
- **MySQL**: Armazenamento dos dados dos corretores.

## 🎯 Funcionalidades

- Formulário de cadastro com campos obrigatórios.
- Validação em tempo real com JavaScript.
- Validação adicional no back-end com PHP.
- Armazenamento seguro dos dados no banco de dados MySQL.
- Feedback visual para erros e sucessos no envio do formulário.

## 🧪 Validação do Formulário

A validação é feita em duas camadas:

1. **JavaScript (Front-end)**:
   - Verifica campos obrigatórios.
   - Valida formato de e-mail, CPF, telefone, etc.

2. **PHP (Back-end)**:
   - Revalida os dados antes de enviar ao banco.
   - Previne envio de dados maliciosos.

⚙️ Como Executar
Clone o repositório:

git clone https://github.com/GustavoSousaa/cadastro-corretores.git

Configure o banco de dados MySQL com a tabela acima.

Edite o arquivo conexao.php com suas credenciais do MySQL.

Coloque os arquivos em um servidor local (como o XAMPP, WAMP ou outro ambiente PHP/MySQL).

Acesse o index.html pelo navegador e teste o formulário.

📌 Requisitos
Servidor com suporte a PHP (ex: Apache)

MySQL 5.7 ou superior

Navegador moderno

🤝 Contribuições
Sinta-se à vontade para abrir Issues e Pull Requests. Toda ajuda é bem-vinda!

📄 Licença
Este projeto está sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.
