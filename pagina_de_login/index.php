<?php
session_start();
if(isset($_SESSION["usuario"])) 
    {
    header("Location: dashboard.php");
    exit();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Institucional | Sua Empresa</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body{
    background: linear-gradient(135deg, #000000, #1a002e);
    color:white;
}

header{
    display:flex;
    justify-content:space-between;
    padding:20px 80px;
    align-items:center;
}

header h1{
    color:#a855f7;
}

header a{
    text-decoration:none;
    background:#6b46c1;
    padding:10px 20px;
    border-radius:8px;
    color:white;
    font-weight:bold;
    transition:0.3s;
}

header a:hover{
    background:#9333ea;
}

.hero{
    height:90vh;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    flex-direction:column;
}

.hero h2{
    font-size:48px;
    margin-bottom:20px;
}

.hero p{
    font-size:18px;
    max-width:600px;
    opacity:0.8;
}

section{
    padding:80px;
}

.cards{
    display:flex;
    gap:30px;
    justify-content:center;
    flex-wrap:wrap;
}

.card{
    background:rgba(255,255,255,0.05);
    padding:30px;
    border-radius:15px;
    width:300px;
    backdrop-filter:blur(10px);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-10px);
    background:rgba(168,85,247,0.2);
}

footer{
    text-align:center;
    padding:30px;
    opacity:0.6;
}
</style>
</head>

<body>

<header>
    <h1>TexSoft</h1>
    <a href="login.html">Entrar</a>
</header>

<div class="hero">
    <h2>Excelência, Inovação e Resultado</h2>
    <p>
        Somos especialistas em soluções digitais modernas,
        oferecendo tecnologia, segurança e performance para sua empresa.
    </p>
</div>

<section>
    <h2 style="text-align:center;margin-bottom:50px;">Nossos Serviços</h2>
    <div class="cards">
        <div class="card">
            <h3>Desenvolvimento Web</h3>
            <p>Sistemas modernos, rápidos e seguros.</p>
        </div>

        <div class="card">
            <h3>Infraestrutura</h3>
            <p>Gerenciamento de servidores e redes corporativas.</p>
        </div>

        <div class="card">
            <h3>Consultoria</h3>
            <p>Estratégia tecnológica para crescimento empresarial.</p>
        </div>
    </div>
</section>

<footer>
    © 2026 Sua Empresa - Todos os direitos reservados
</footer>

</body>
</html>