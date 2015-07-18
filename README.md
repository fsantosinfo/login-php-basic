# login-php-basic
This is one simple system login in php!

1 - Este sistema é muito basico, no arquivo index.php, fica um teste de sessao, caso ainda exista alguma sessao ativa
o teste redireciona para a pagina, home.php
Caso não exista ele exibe um formulario basico.

2 - No arquivo login.php existe um teste para verificar se o que foi digitado é igual ao conteudo das variaveis
$userLocal e $passLocal, essas variaveis foram definidas em modo texto, mas em sistemas que demandem maior segurança
a verificação deve ser feita com base em uma consulta em banco de dados. Além é claro de utilizar alguma forma de 
criptografia dos dados.

3 - O arquivo home.php, serve apenas como modelo para os arquivos que tenham que ter controle, uma vez que o teste 
de sessao verifica se existe uma sesssao ativa e caso nao exista ele redireciona, para o arquivo index.php, para que seja feita
uma nova verificação.

Além de um link simples para o arquivo logout.php que serve para encerrar a sessão.

Obs.: Em todos os arquivos internos ao sistema esse teste de sessao do arquivo home.php deve ser incluido.

Melhorias são bem vindas.
Francisco Santos
