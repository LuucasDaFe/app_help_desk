|<?php 

    session_start();



    //variavel que verifica se a autenticacao foi realizada.
    $usuario_autenticado = false;

    //Usuarios do sistema 
    $usuario_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
        array('email' => 'labraao957@gmail.com', 'senha' => 'cr7melhor'),
    );

    /*
    echo '<pre>';
    print_r($usuario_app);
    echo '</pre>';
    */

    foreach($usuario_app as $user){
        
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
        
    };

    if($usuario_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

    /*
    print_r($_GET);

    echo '<br />';

    echo $_GET['email'];
    echo '<br />';
    echo $_GET['senha'];
    */

    /*
    print_r($_POST);
    echo '<br />';
    */
   
?>