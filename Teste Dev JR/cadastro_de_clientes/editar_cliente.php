<?php include ('assets/header.php'); ?>
<?php include ('scripts/script_editar.php'); ?>

<body>

    <div class="container pt-5">
        <a href="index.php" class="btn btn-info">Voltar para a lista</a><br><br>
        <form method="POST" action="">
            <p>
                <label>Nome:</label>
                <input value="<?php echo $cliente['nome']; ?>" name="nome" type="text">
            </p>
            <p>
                <label>E-mail:</label>
                <input value="<?php echo $cliente['email']; ?>" name="email" type="text">
            </p>
            <p>
                <label>Telefone:</label>
                <input value="<?php if(!empty($cliente['telefone'])) echo formatar_telefone($cliente['telefone']); ?>"  placeholder="(11) 98888-8888" name="telefone" type="text">
            </p>
            <p>
                <label>Data de Nascimento:</label>
                <input value="<?php if(!empty($cliente['nascimento'])) echo formatar_data($cliente['nascimento']); ?>"  name="nascimento" type="text">
            </p>
            <p>
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </p>
        </form>
    </div>
    
</body>

    <?php include 'assets/bootstrap.php'; ?>

</html>