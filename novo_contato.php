<html lang="pt">
<head>
   <meta charset="utf-8"/>
   <title>Minha Lista de Contatos</title>
</head>
<body>
   <h1>Novo Contato</h1>
   <form action="logica/processa_novo_contato.php" method="post">
      <label for="inputNome">Nome:</label><br/>
      <input type="text" name="nome" id="inputNome" /><br/>
      <br/>
      <label for="inputApelido">Apelido:</label><br/>
      <input type="text" name="apelido" id="inputApelido" /><br/>
      <br/>
      <input type="submit" value="Confirmar" />
      <input type="button" value="Voltar" />
   </form>
</body>
</html>
