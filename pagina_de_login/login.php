<?php
        session_start(); // inicia a sessão
        include "conexao.php"; // conexão com o banco de dados 
        if($_SERVER["REQUEST_METHOD"] === "POST")
{
        $usuarioLoginCliente =  $_POST["usuarioLoginCliente"];
        $senhaLoginCliente = $_POST["senhaLoginCliente"];

        $sql = "select * from usuarios;";
        
        $temp = $conn->query($sql);
        $Funcionou = false;

        while($dados = $temp->fetch_assoc()) 
          {

            if($dados['usuario'] == $usuarioLoginCliente && $dados['senha'] == $senhaLoginCliente )
              {
                $Funcionou = true;
                $_SESSION['id'] =  $dados['Id_U'] ; // pega o id da pagina de login html, da pessoa que logou e introduz elee nessa pagina, com o session
            }

        }
            if($Funcionou)
            {
            echo "
            <script>
                window.location.href = 'dashboard.php';
            </script>";
            }
            else
            {
              echo "<script>alert('Usuario ou senha errada, tente fazer login novamente');</script>";
              echo "<script>
                     window.location.href = 'login.html';
                    </script>";
           }
}
?>
