<?php include ('assets/header.php'); ?>
<?php include ('scripts/conexao_index.php'); ?>

<body>

    <div class="container pt-5">
        <h3>Lista de Tarefas</h3>
        <a href="cadastrar_tarefa.php" class="btn btn-primary">Cadastrar Nova</a><br><br>
        <p>Estas são as tarefas cadastradas:</p>
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Texto</th>
                <th>Data de Cadastro</th>
                <th>Ações</th>
            </thead>
            <tbody>

            <?php include('scripts/script_index.php');?>

            </tbody>
        </table>
    </div>
    
</body>

    <?php include 'assets/bootstrap.php'; ?>

</html>