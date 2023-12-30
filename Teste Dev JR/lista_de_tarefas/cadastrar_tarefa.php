<?php include ('assets/header.php'); ?>
<?php include ('scripts/script_cadastrar.php'); ?>

<body>
    
    <div class="container pt-5">
        
        <a href="index.php" class="btn btn-primary">Inicio</a><br><br>
        <form method="POST" action="">
            <h4>Cadastrar Nova Tarefa</h4><br>
            <p>
                <label>Texto:</label>
                <input value="<?php if(isset($_POST['texto'])) echo $_POST['texto']; ?>" name="texto" type="text">
            </p>

            <p>
                <br><button type="submit" class="btn btn-primary">Salvar Tarefa</button>
            </p>
        </form>
    </div>

</body>

    <?php include 'assets/bootstrap.php'; ?>

</html>