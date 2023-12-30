<?php include ('assets/header.php'); ?>
<?php include ('scripts/script_deletar.php'); ?>

<body>
    
    <div class="container pt-5">
        <h4>Tem certeza que deseja deletar esta tarefa?</h4><br>
        
        <form action="" method="post">
            <a style="margin-right:40px;" href="index.php" class="btn btn-success">Não</a>
            <button name="confirmar" value="1" type="submit" class="btn btn-danger">Sim</button>
        </form>
    </div>

</body>
    
    <?php include 'assets/bootstrap.php'; ?>

</html>