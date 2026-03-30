<?php
session_start();

if(!isset($_SESSION["usuario"])) 
    {
    header("Location: login.html");
    exit();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Painel</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial;
}

body{
    background: linear-gradient(135deg, #000000, #1a002e);
    color:white;
}

.topbar{
    display:flex;
    justify-content:space-between;
    padding:20px 60px;
    background:rgba(255,255,255,0.05);
    backdrop-filter:blur(10px);
}

.logout{
    background:#6b46c1;
    padding:8px 15px;
    border-radius:8px;
    text-decoration:none;
    color:white;
}

.container{
    padding:80px;
}

.cards{
    display:flex;
    gap:30px;
    flex-wrap:wrap;
}

.card{
    background:rgba(255,255,255,0.05);
    padding:30px;
    border-radius:15px;
    width:300px;
    transition:0.3s;
}

.card:hover{
    background:rgba(168,85,247,0.3);
    transform:scale(1.05);
}
</style>
</head>

<body>

<div class="topbar">
    <h2>Bem-vindo, <?php echo $_SESSION["usuario"]; ?> 👋</h2>
    <a class="logout" href="logout.php">Sair</a>
</div>

<div class="container">
    <h1 style="margin-bottom:40px;">Painel Administrativo</h1>

    <div class="cards">
        <div class="card">
            <h3>Usuários</h3>
            <p>Gerencie os usuários do sistema.</p>
        </div>

        <div class="card">
            <h3>Relatórios</h3>
            <p>Acompanhe métricas e resultados.</p>
        </div>

        <div class="card">
            <h3>Configurações</h3>
            <p>Personalize o sistema.</p>
        </div>
    </div>
</div>

</body>
</html>