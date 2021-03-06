<?php
    
    session_start();
    include_once('../../../controller/Conexao/Conexao.php');
    ob_start();
    require_once('../../../controller/Verificacao/Assistencia.php');
    require_once('../../../controller/Dados/Assistencia.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/icons/LineAwesome/css/line-awesome.css">
    <link rel="stylesheet" href="../../assets/css/dashboard-users.css">
    <title><?php echo $LinhaDados['Nome']; ?> - Dashboard Assistência Técnica - LocalTech</title>
    <link rel="stylesheet" href="../../assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/update-assistencia.css">
    <link rel="stylesheet" href="../../assets/icons/FontAwesome/css/all.css">
    <link rel="stylesheet" href="../../assets/icons/Iconscout/css/line.css">

    <!--=================== FAVICON ===================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    
    <script src="../../assets/js/index.umd.min.js"></script>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/jquery.mask.min.js"></script>
  </head>
  <body>

    <!--=======Scroll to top button=======-->
    <div class="scrollToTop-btn flex-center">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!--=======Light/Dark theme button=======-->
    <div class="theme-btn flex-center">
        <i class="fas fa-moon"></i>
        <i class="fas fa-sun"></i>
    </div>

    <!--=======Header=======-->
    <header>
        <div class="nav-bar">
            <a href="../../../index.php" class="logo">
                LocalTech
            </a>
            <div class="navigation">
                <div class="nav-items">
                    <div class="nav-close-btn">                        
                    </div>
                    <a href="../../../index.php">
                        Inicio
                    </a>
                    <a href="../Servicos/servicos.php">
                        Serviços
                    </a>
                    <a href="../Postagens/explorar.php">
                        Postagens
                    </a>
                    <a href="../Contato/contato.php">
                        Contato
                    </a>
                    <a href="../QuemSomos/quemsomos.php">
                        Quem Somos
                    </a>
                    <?php
                        
                        require_once('../../../controller/Verificacao/Login.php')

                    ?>
                </div>
            </div>
            <div class="nav-menu-btn"></div>
        </div>
    </header>

    <!--=======Home section=======-->
    <section class="home flex-center" id="inicio" style="display: none;">
        <div class="home-container">
            <div class="media-icons">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <div class="info">
                <h2 id="txt1">
                    
                </h2>
                <h3>
                    Cuidando de tudo por você.
                </h3>
                <p>
                    Encontre soluções para os problemas em seu desktop.
                </p>
                <a href="" class="btn">
                    Serviços
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
            <div class="home-img">
                <img src="../../assets/img/favicon/android-chrome-512x512.png">
            </div>
        </div>
        <a href="#sobrenos" class="scroll-down">
            Arraste Para Baixo
            <i class="fas fa-arrow-down"></i>
        </a>
    </section>

    <div>

        <input type="checkbox" name="" id="user-menu-toggle">

        <div class="user-overlay">
            <label for="user-menu-toggle">
            </label>
        </div>

        <div class="user-sidebar">
            <div class="user-sidebar-container">
                <br>
                <div class="user-sidebar-avartar">
                    <div>
                        <img src="../../assets/images/ImagensPerfil/<?php echo $LinhaDados['Imagem']; ?>" alt="" class="user-img">
                    </div>
                    <div class="avartar-info">
                        <div class="avartar-text">
                            <h4>
                                <?php echo $LinhaDados['Nome']; ?>
                            </h4>
                            <small>
                                <?php echo $LinhaDados['Email']; ?>
                            </small>
                        </div>
                        <a href="../../../controller/Sair/Sair.php" style="color: red;" class="las la-sign-out-alt"></a>
                    </div>
                </div>

                <div class="user-sidebar-menu">
                    <ul>
                        <li>
                            <a href="dashboard-assistencia.php">
                                <span class="las uil uil-info-circle"></span>
                                <span>
                                    Informações
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="horario.php">
                                <span class="las uil uil-clock"></span>
                                <span>
                                    Horário
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="endereco.php">
                                <span class="las uil uil-map-marker"></span>
                                <span>
                                    Endereço
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="atualizar-dados.php" class="user-active">
                                <span class="las uil uil-edit"></span>
                                <span>
                                    Atualizar
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="user-main-content">
            <div class="user-header" style="margin-top: 4%;">
                <div class="user-header-title-wrapper">
                    <label for="user-menu-toggle">
                        <span class="las la-bars"></span>
                    </label>
                    <div class="user-header-title">
                        <h1>
                            Atualizar Dados
                        </h1>
                    </div>
                </div>
            </div>

            <main class="user-main">
                <section class="user-section">

                    <section class="ftco-section">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 col-md-12">
                                    <div class="wrapper">

                                        <section class="form">
                                            <?php
                                                require_once('../../../controller/Atualizar/Assistencia.php');
                                            ?>
                                            <div class="img-form">
                                                <img src="../../assets/images/ImagensPerfil/<?php echo $LinhaDados['Imagem'] ?>" id="preview">
                                            </div>
                                            <form method="POST" enctype="multipart/form-data">
                                                <h1 hidden>
                                                </h1>
                                                <fieldset>
                                                    <div class="container-form">
                                                        <label>
                                                            Imagem
                                                        </label>
                                                        <input type="file" name="imagem" id="imagem">
                                                    </div>
                                                </fieldset>
                                                <br>
                                                <h3 class="user-section-head" style="text-align: center;">
                                                    Dados Empresariais
                                                </h3>
                                                <fieldset>
                                                    <div class="container-form">
                                                        <label>
                                                            Nome
                                                        </label>
                                                        <input type="text" name="nome" value="<?php echo $LinhaDados['Nome'] ?>" required>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="container-form">
                                                        <label>
                                                            Email
                                                        </label>
                                                        <input type="email" name="email" value="<?php echo $LinhaDados['Email'] ?>" required>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="container-form">
                                                        <label>
                                                            Telefone
                                                        </label>
                                                        <input type="tel" name="telefone" id="campo_celular" onkeypress="$(this).mask('(00) 0000-00009')" value="<?php echo $LinhaDados['Telefone'] ?>" required>
                                                    </div>
                                                </fieldset>
                                                <br>
                                                <h3 class="user-section-head" style="text-align: center;">
                                                    Informações
                                                </h3>
                                                <fieldset>
                                                    <div class="container-form">
                                                        <label>
                                                            Descrição
                                                        </label>
                                                        <textarea name="descricao" value="<?php echo $LinhaDados['Telefone'] ?>" required>
<?php echo $LinhaDados['Descricao'] ?>
                                                        </textarea>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="container-form end">
                                                        <label>
                                                            Horário
                                                        </label>
                                                        <input type="time" name="horaabrir" value="<?php echo $LinhaDados['Hora_Abrir'] ?>">
                                                    </div>
                                                    <div class="container-form end">
                                                        <label>
                                                            <br>
                                                        </label>
                                                        <input type="time" name="horafechar" value="<?php echo $LinhaDados['Hora_Fechar'] ?>" required>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="container-form end">
                                                        <label>
                                                            Semana
                                                        </label>
                                                        <select name="semanainicio" required>
                                                            <option value="<?php echo $LinhaDados['Semana_Inicio'] ?>" selected><?php echo $LinhaDados['Semana_Inicio'] ?></option>
                                                            <option value="Domingo">Domingo</option>
                                                            <option value="Segunda-Feira">Segunda-Feira</option>
                                                            <option value="Terça-Feira">Terça-Feira</option>
                                                            <option value="Quarta-Feira">Quarta-Feira</option>
                                                            <option value="Quinta-Feira">Quinta-Feira</option>
                                                            <option value="Sexta-Feira">Sexta-Feira</option>
                                                            <option value="Sábado">Sábado</option>
                                                        </select>
                                                    </div>
                                                    <div class="container-form end">
                                                        <label>
                                                            <br>
                                                        </label>
                                                        <select name="semanafinal" required>
                                                            <option value="<?php echo $LinhaDados['Semana_Final'] ?>" selected><?php echo $LinhaDados['Semana_Final'] ?></option>
                                                            <option value="Domingo">Domingo</option>
                                                            <option value="Segunda-Feira">Segunda-Feira</option>
                                                            <option value="Terça-Feira">Terça-Feira</option>
                                                            <option value="Quarta-Feira">Quarta-Feira</option>
                                                            <option value="Quinta-Feira">Quinta-Feira</option>
                                                            <option value="Sexta-Feira">Sexta-Feira</option>
                                                            <option value="Sábado">Sábado</option>
                                                        </select>
                                                    </div>
                                                </fieldset>
                                                <br>
                                                <h3 class="user-section-head" style="text-align: center;">
                                                    Dados Residenciais
                                                </h3>
                                                <fieldset>
                                                    <div class="container-form">
                                                        <label>
                                                            CEP
                                                        </label>
                                                        <input type="text" name="cep" id="cep" onkeypress="$(this).mask('00000-000')" value="<?php echo $LinhaDados['CEP'] ?>" required>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="container-form log">
                                                        <label>
                                                            Logradouro
                                                        </label>
                                                        <input type="text" name="logradouro" id="logradouro" value="<?php echo $LinhaDados['Logradouro'] ?>" required>
                                                    </div>
                                                    <div class="container-form">
                                                        <label>
                                                            Número
                                                        </label>
                                                        <input type="number" name="numero" id="numero" value="<?php echo $LinhaDados['Numero'] ?>" required>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="container-form end">
                                                        <label>
                                                            Complemento
                                                        </label>
                                                        <input type="text" name="complemento" value="<?php echo $LinhaDados['Complemento'] ?>">
                                                    </div>
                                                    <div class="container-form end">
                                                        <label>
                                                            Bairro
                                                        </label>
                                                        <input type="text" name="bairro" id="bairro" value="<?php echo $LinhaDados['Bairro'] ?>" required>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="container-form end">
                                                        <label>
                                                            Cidade
                                                        </label>
                                                        <input type="text" name="cidade" id="cidade" value="<?php echo $LinhaDados['Cidade'] ?>" required>
                                                    </div>
                                                    <div class="container-form end">
                                                        <label>
                                                            Estado
                                                        </label>
                                                        <input type="text" name="uf" id="uf" value="<?php echo $LinhaDados['Estado'] ?>" required>
                                                    </div>
                                                </fieldset>
                                                <fieldset style="justify-content: right; display: flex; padding: 0px 10px;">
                                                    <input type="submit" value="Atualizar" name="atualizar" class="btn-atualizar">
                                                </fieldset>
                                            </form>
                                        </section>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </main>
        </div>

        <div class="user-main-content">

        </div>

    </div>

    <!--=======External scripts=======-->
    <script src="../../assets/js/swiper-bundle.min.js"></script>
    <script src="../../assets/js/main.js"></script>
    <script src="../../assets/js/Updates/updates.js"></script>

    <script>
        $("#cep").focusout(function(){
            //Início do Comando AJAX
            $.ajax({
                //O campo URL diz o caminho de onde virá os dados
                //É importante concatenar o valor digitado no CEP
                url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/',
                //Aqui você deve preencher o tipo de dados que será lido,
                //no caso, estamos lendo JSON.
                dataType: 'json',
                //SUCESS é referente a função que será executada caso
                //ele consiga ler a fonte de dados com sucesso.
                //O parâmetro dentro da função se refere ao nome da variável
                //que você vai dar para ler esse objeto.
                success: function(resposta){
                    //Agora basta definir os valores que você deseja preencher
                    //automaticamente nos campos acima.
                    $("#logradouro").val(resposta.logradouro);
                    $("#complemento").val(resposta.complemento);
                    $("#bairro").val(resposta.bairro);
                    $("#cidade").val(resposta.localidade);
                    $("#uf").val(resposta.uf);
                    //Vamos incluir para que o Número seja focado automaticamente
                    //melhorando a experiência do usuário
                    $("#numero").focus();
                }
            });
        });
    </script>
</body>
</html>