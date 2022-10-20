<?php
require_once("controller/ControllerCadastro.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
    <meta name="color-scheme" content="light dark">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Sistema Web 2.0</title>
</head>
<body>
    <div class="container">
    <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
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
        <div class="card mb-3 col-12">
				<div class="card-body">
					<h5 class="card-title">Editar - Atualizar Cadastro</h5>
                    <p>
                        <?php
                        $controller = new ControllerCadastro();
                        $resultado = $controller->listar($_GET['id']);
                        ?>
                        <form class="row g-3" method="post" action="controller/ControllerCadastro.php?funcao=editar&id=<?php echo $resultado[0]['id']; ?>" id="form" name="form">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="text" class="form-control" name="txtEmail" required id="txtEmail" value="<?php echo $resultado[0]['email']; ?>">  
                            </div>                            
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Senha:</label>
                                <input type="password" class="form-control" name="txtSenha" required id="txtSenha" value="<?php echo $resultado[0]['senha']; ?>">
                            </div>

                        

                            <div class="col-12">
                                <label for="inputAdress" class="form-label">Endereço:</label>
                                <input type="text" class="form-control" name="txtEndereco" required id="txtEndereco" value="<?php echo $resultado[0]['endereco']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="inputAddress2" class="form-label">Bairro:</label>
                                <input type="text" class="form-control" name="txtBairro" required id="txtBairro" value="<?php echo $resultado[0]['bairro']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="inputAddress2" class="form-label">Cep:</label>
                                <input type="text" class="form-control" name="txtCep" required id="txtCep" value="<?php echo $resultado[0]['cep']; ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Cidade:</label>
                                <input type="text" class="form-control" name="txtCidade" required id="txtCidade" value="<?php echo $resultado[0]['cidade']; ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1">Estado:</label>                      
                                    <select required name="cboEstado" id="cboEstado" class="form-control">
                                        <option <?php if($resultado[0]['estado'] == "AC") { echo "selected"; }?>>AC</option>
                                        <option <?php if($resultado[0]['estado'] == "AL") { echo "selected"; }?>>AL</option>
                                        <option <?php if($resultado[0]['estado'] == "AP") { echo "selected"; }?>>AP</option>
                                        <option <?php if($resultado[0]['estado'] == "AM") { echo "selected"; }?>>AM</option>
                                        <option <?php if($resultado[0]['estado'] == "BA") { echo "selected"; }?>>BA</option>
                                        <option <?php if($resultado[0]['estado'] == "CE") { echo "selected"; }?>>CE</option>
                                        <option <?php if($resultado[0]['estado'] == "DF") { echo "selected"; }?>>DF</option>
                                        <option <?php if($resultado[0]['estado'] == "GO") { echo "selected"; }?>>GO</option>
                                        <option <?php if($resultado[0]['estado'] == "MA") { echo "selected"; }?>>MA</option>
                                        <option <?php if($resultado[0]['estado'] == "MT") { echo "selected"; }?>>MT</option>
                                        <option <?php if($resultado[0]['estado'] == "MS") { echo "selected"; }?>>MS</option>
                                        <option <?php if($resultado[0]['estado'] == "MG") { echo "selected"; }?>>MG</option>
                                        <option <?php if($resultado[0]['estado'] == "PA") { echo "selected"; }?>>PA</option>
                                        <option <?php if($resultado[0]['estado'] == "PB") { echo "selected"; }?>>PB</option>
                                        <option <?php if($resultado[0]['estado'] == "PR") { echo "selected"; }?>>PR</option>
                                        <option <?php if($resultado[0]['estado'] == "PE") { echo "selected"; }?>>PE</option>
                                        <option <?php if($resultado[0]['estado'] == "PI") { echo "selected"; }?>>PI</option>
                                        <option <?php if($resultado[0]['estado'] == "RJ") { echo "selected"; }?>>RJ</option>
                                        <option <?php if($resultado[0]['estado'] == "RS") { echo "selected"; }?>>RS</option>
                                        <option <?php if($resultado[0]['estado'] == "RO") { echo "selected"; }?>>RO</option>
                                        <option <?php if($resultado[0]['estado'] == "RR") { echo "selected"; }?>>RR</option>
                                        <option <?php if($resultado[0]['estado'] == "SC") { echo "selected"; }?>>SC</option>
                                        <option <?php if($resultado[0]['estado'] == "SP") { echo "selected"; }?>>SP</option>
                                        <option <?php if($resultado[0]['estado'] == "SE") { echo "selected"; }?>>SE</option>
                                        <option <?php if($resultado[0]['estado'] == "TO") { echo "selected"; }?>>TO</option>
                                    </select>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-dark" id="btnEditar" name="btnEditar">Editar</button>
                            </div>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>