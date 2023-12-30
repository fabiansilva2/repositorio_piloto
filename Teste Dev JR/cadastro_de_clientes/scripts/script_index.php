<?php if($num_clientes == 0) { ?>
                    <tr>
                        <td colspan="7">Nenhum cliente foi cadastrado</td>
                    </tr>
                <?php 
                } else {
                    while ($cliente = $query_clientes->fetch_assoc()) {
                    
                    $telefone = "Não informado";
                    if(!empty($cliente['telefone'])) {
                        $telefone = formatar_telefone($cliente['telefone']);
                    }
                    $nascimento = "Não informada";
                    if(!empty($cliente['nascimento'])) {
                        $nascimento = formatar_data($cliente['nascimento']);
                    }
                    
                    $data_cadastro = date("d/m/Y H:i", strtotime($cliente['data_cadastro']));
                    ?>
                    <tr>
                        <td><?php echo $cliente['id']; ?></td>
                        <td><?php echo $cliente['nome']; ?></td>
                        <td><?php echo $cliente['email']; ?></td>
                        <td><?php echo $telefone; ?></td>
                        <td><?php echo $nascimento; ?></td>
                        <td><?php echo $data_cadastro; ?></td>
                        <td>
                            <a href="editar_cliente.php?id=<?php echo $cliente['id']; ?>">Editar</a>
                            <a href="deletar_cliente.php?id=<?php echo $cliente['id']; ?>">Deletar</a>
                        </td>
                    </tr>
                    <?php
                    }
} ?>