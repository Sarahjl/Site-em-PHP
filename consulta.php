<?php
require_once("controller/ControllerCadastro.php");
?>

<!DOCTYPE html>
    <html lang="en">
        
        <head>
            <meta name="format-detection" content="telephone-no"> <meta nmae="msapplication-tap-highlight" content="no">
            <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"> <meta name="color-scheme" content="light dark">
            <title>Sistema Web 2.0</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
            <script>
                function confirmDelete(delUrl) {
                    if (confirm("Deseja apagar o registro?")) {
                        document.location = delUrl;
                        //var url_string = "http://localhost/agendamento-mysql/" + delUrl;
                        //var url = new URL(url_string);
                        //var data = url.searchParams.get("id"); //pega o value
                    }  
                }
	        </script>
       
        </head>

        <body>

        <div class="container text-center">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">
                            <img src="img/bootstrap-solid.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            Sistema Web 2.0
                        </a>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="index.php" aria-current="page">Cadastro</a>  
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="consulta.php">Consulta</a>  
                                        </li>
                                    </ul>
                                </div>
                    </div>
                </nav>
            </div>    
        </div>    

        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="consulta.php">Consultar - Contatos Agendados</a>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col">
                &nbsp;
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Email</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Cep</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Ações</th>

                        
                        </tr>
                    </thead>
                    <tbody id="TableData">
                    <?php
                        $controller = new ControllerCadastro();
                        $resultado = $controller->listar(0);

                        for($i=0; $i < count($resultado); $i++){
                    ?>    
                        <tr>
                            <th scope="col"><?php echo $resultado[$i]['id']; ?></th>
                            <td scope="col"><?php echo $resultado[$i]['email']; ?></td>
                            <td scope="col"><?php echo $resultado[$i]['endereco']; ?></td>
                            <td scope="col"><?php echo $resultado[$i]['bairro']; ?></td>
                            <td scope="col"><?php echo $resultado[$i]['cep']; ?></td>
                            <td scope="col"><?php echo $resultado[$i]['cidade']; ?></td>
                            <td scope="col"><?php echo $resultado[$i]['estado']; ?></td>
                            <td scope="col">
                                <button type="button" class="btn btn-dark" onclick="location.href='editarClientes.php?id=<?php echo $resultado[$i]['id']; ?>'" style="width: 72px;">Editar</button>
                                <button type="button" class="btn btn-dark" onclick="javascript:confirmDelete('excluirClientes.php?id=<?php echo $resultado[$i]['id']; ?>')" style="width: 72px;">Excluir</button>
                            </td>
                        </tr>     
                    <?php
                        }
                    ?>    
                    </tbody>
                </table>
            </div>
        </div>   

    </div> 
    </body>
</html>
