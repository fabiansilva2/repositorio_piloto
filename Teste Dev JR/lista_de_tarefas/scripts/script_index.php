<?php if($num_tarefas == 0) { ?>
                    <tr>
                        <td colspan="7">Nenhuma Tarefa foi cadastrada</td>
                    </tr>
                <?php 
                } else {
                    while ($tarefa = $query_tarefas->fetch_assoc()) {

                    $data_cadastro = date("d/m/Y H:i", strtotime($tarefa['data_cadastro']));
                    ?>
                    <tr>
                        <td><?php echo $tarefa['id']; ?></td>
                        <td><?php echo $tarefa['texto']; ?></td>
                        <td><?php echo $data_cadastro; ?></td>
                        <td>
                            <a href="editar_tarefa.php?id=<?php echo $tarefa['id']; ?>">Editar</a>
                            <a href="deletar_tarefa.php?id=<?php echo $tarefa['id']; ?>">Deletar</a>
                        </td>
                    </tr>
                    <?php
                    }
} ?>