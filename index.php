<?php
    $pages = ['home'=>'página home, de itens do menu dinâmico em PHP','sobre'=>'página sobre','contato'=>'página de contatos','contato'=>'<form><input type="text" placeholder="Seu nome..."></form>','FAQ'=>'Perguntas frequentes','loja'=>'conteudo loja'];



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema PHP</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #069;
            padding: 8px 10px;
            text-align: center;
        }
        a {
            display: inline-block;
            margin: 0 10px;
            color: white;
            font-size: 17px;
            text-decoration: none;
        }
        section {
            max-width: 960px;
            margin: 20px auto;
            padding: 0 2px;
        }
        h2 {
            background-color: #069;
            color: white;
            padding: 8px 10px;
        }
        p {
            color: black;
            margin-top: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <header>
        <?php
            foreach ($pages as $key => $value) {
                echo '<a href="?page='.$key.'">'. ucfirst($key).'</a> ';
            }
        ?>
    </header>
    <section>
        <h2>
            <?php
                $page = (isset($_GET['page']) ? $_GET['page'] : 'home');

                if (!array_key_exists($page, $pages)) {
                    $page = 'home';
                }

                echo ucfirst($page);
            ?>
        </h2>
        <p>
            <?php echo $pages[$page]; ?>
        </p>
    </section>
</body>
</html>