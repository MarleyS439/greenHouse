<?php
require_once('../../config/userDao.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$users = UserDao::selectAll();
var_dump($users);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/menu.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/view-clientes.css">
    <link rel="stylesheet" href="./assets/css/modal.css">
</head>

<body>
    <div class="container">
        <div class="side-bar">
            <?php include('./components/menu.php'); ?>
        </div>
        <div class="content">
            <div class="table">
                <table>
                    <tr class="title-table">
                        <td class="col">Código</td>
                        <td class="col">Primeiro nome</td>
                        <td class="col">Sobrenome</td>
                        <td class="col">E-mail</td>
                        <td class="col">RG</td>
                        <td class="col">CPF</td>
                        <td class="col">Recebe notícias</td>
                        <td class="col">Ação no usuário</td>
                    </tr>

                    <?php
                    foreach ($users as $user) {
                        ?>
                        <tr class="clientes">
                            <td class="item-col">
                                <?php echo $user['codUser']; ?>
                            </td>
                            <td class="item-col">
                                <?php echo $user['primeiroNomeUser']; ?>
                            </td>
                            <td class="item-col">
                                <?php echo $user['sobrenomeUser']; ?>
                            </td>
                            <td class="item-col">
                                <?php echo $user['emailUser']; ?>
                            </td>
                            <td class="item-col">
                                <?php echo $user['rgUser']; ?>
                            </td>
                            <td class="item-col">
                                <?php echo $user['cpfUser']; ?>
                            </td>
                            <td class="item-col">
                                <?php echo ($user['receberNoticias'] == 1) ? 'Sim' : 'Não'; ?>
                            </td>
                            <td class="item-col">
                                <button type="button" onclick="openModal(<?php echo $user['codUser']; ?>)">Editar</button>
                                <button type="submit" id="delete"
                                    onclick="openModal(<?php echo $user['codUser']; ?>)">Excluir</button>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>

                <!-- Modal -->
                <div id="deleteModal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal()">&times;</span>
                        <p>Tem certeza que deseja excluir este usuário?</p>
                        <form method="post" action="delete_user.php">
                            <input type="hidden" name="user_id" id="user_id_to_delete">
                            <button type="submit" id="deleteBtn" name="confirm_delete">Sim, Excluir</button>
                            <button type="button" onclick="closeModal()">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal(userId) {
            document.getElementById('deleteModal').style.display = 'block';
            document.getElementById('user_id_to_delete').value = userId;
        }

        function closeModal() {
            document.getElementById('deleteModal').style.display = 'none';
        }
    </script>
</body>

</html>