<?php include ('assets/header.php'); ?>
<?php include ('scripts/script_editar.php'); ?>

<body>

    <div class="container pt-5">
        <a href="index.php" class="btn btn-info">Voltar para a lista</a><br><br>
        <form method="POST" action="">
            <p>
                <label>Texto:</label>
                <input value="<?php echo $tarefa['texto']; ?>" name="texto" type="text">
            </p>

            <p>
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </p>
        </form>
    </div>
    
</body>

    <?php include 'assets/bootstrap.php'; ?>

</html>