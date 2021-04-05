<?php

    session_start();

    // overwrite the name
    // $_SESSION['name'] = "bogs";

    // deleting name
    if($_SERVER['QUERY_STRING'] == 'noname'){
        // -- single delete --
        unset($_SESSION['name']);
        unset($_SESSION['gender']);
        // -- delete all/clear session --
        // session_unset();
    }

    $name = $_SESSION['name'] ?? 'Guest';
    $gender = $_SESSION['gender'] ?? 'Unknown';

    //get cookie
    // $gender = $_COOKIE['gender'] ?? 'Unknown';


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project One</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        .brand
        {
            background: #cbb09c !important;
        }
        form
        {
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
        .pizza
        {
            width: 100px;
            margin: 40px auto -30px;
            display: block;
            position: relative;
            top: -30px;
        }
    </style>
</head>
    <body class="grey lighten-4">
        <nav clas="white z-depth-0">
            <div class="container">
                <a href="index.php" class="brand-logo brand-text">Ninja Pizza</a>
                <ul id="nav-mobile" class="right hide-on-small-down">
                    <li>Hello <?php echo htmlspecialchars($name); ?></li>
                    <li>(<?php echo htmlspecialchars($gender); ?>)</li>
                    <li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
                </ul>
            </div>
        </nav>
