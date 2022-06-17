<?php
 define("SERVER_LOCAL", "nitratuscom.mysql.dbaas.com.br");
 define("SERVER_USER", "nitratuscom");
 define("SERVER_PASSWORD", "Mynm@2324!");
 define("DATABASE_NAME", "nitratuscom");

 //declaar uma variável e atribuir a função de conexão ao banco de dados
 $conexao = mysqli_connect(SERVER_LOCAL, SERVER_USER, SERVER_PASSWORD, DATABASE_NAME)or die ('Não foi possível conectar');
