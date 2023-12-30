<?php include ('assets/header.php'); ?>
<?php include ('scripts/conexao_index.php'); ?>

<body>

    <div class="container pt-5">
        <h3>Lista de Clientes</h3>
        <a href="cadastrar_cliente.php" class="btn btn-primary">Cadastrar Novo</a><br><br>
        <p>Estes são os clientes cadastrados no seu sistema:</p>
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Nascimento</th>
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