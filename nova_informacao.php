<html lang="pt">
<head>
   <meta charset="utf-8"/>
   <title>Minha Lista de Contatos</title>
</head>
<body>
   <h1>Nova Informação</h1>
   <h2>João Zinho</h2>
   <form action="logica/processa_nova_informacao.php" method="post">
      <label for="inputTipo">Tipo:</label><br/>
      <select nome="tipo" id="inputTipo">
         <<option value="Telefone">Telefone</option>
         <<option value="E-mail">E-mail</option>
         <<option value="Aniversário">Aniversário</option>
         <<option value="Endereço">Endereço</option>
      </select>
      <br/>
      <label for="inputValor">Valor:</label><br/>
      <input type="text" name="valor" id="inputValor" /><br/>
      <br/>
      <input type="submit" value="Confirmar" />
      <input type="button" value="Voltar" />
   </form>
</body>
</html>
