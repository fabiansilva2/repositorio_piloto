<?php include ('assets/header.php'); ?>
<?php include ('scripts/script_cadastrar.php'); ?>

<body>
    
    <div class="container pt-5">
        
        <a href="index.php" class="btn btn-primary">Inicio</a><br><br>
        <form method="POST" action="">
            <h4>Cadastrar Novo Cliente</h4><br>
            <p>
                <label>Nome:</label>
                <input value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>" name="nome" type="text">
            </p>
            <p>
                <label>E-mail:</label>
                <input value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" name="email" type="text">
            </p>
            <p>
                <label>Telefone:</label>
                <input value="<?php if(isset($_POST['telefone'])) echo $_POST['telefone']; ?>"  placeholder="(11) 98888-8888" name="telefone" type="text">
            </p>
            <p>
                <label>Data de Nascimento:</label>
                <input value="<?php if(isset($_POST['nascimento'])) echo $_POST['nascimento']; ?>"  name="nascimento" type="text">
            </p>
            <p>
                <br><button type="submit" class="btn btn-primary">Salvar Cliente</button>
            </p>
        </form>
    </div>

</body>

    <?php include 'assets/bootstrap.php'; ?>

</html>