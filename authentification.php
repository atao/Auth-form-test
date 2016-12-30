<?php
  // Definition des constantes et variables
  define('LOGIN','a');
  define('PASSWORD','a');
  $errorMessage = '';

  // Test de l'envoi du formulaire
  if(!empty($_POST))
  {
    // Les identifiants sont transmis ?
    if(!empty($_POST['login']) && !empty($_POST['password']))
    {
      // Sont-ils les mêmes que les constantes ?
      if($_POST['login'] !== LOGIN)
      {
        $errorMessage = 'Connexion non valide !';
      }
        elseif($_POST['password'] !== PASSWORD)
      {
        $errorMessage = 'Connexion non valide !';
      }
        else
      {
        // On ouvre la session
        session_start();
        // On enregistre le login en session
        $_SESSION['login'] = LOGIN;
        // On redirige vers le fichier admin.php
        header('Location: http://test/admin.php');
        exit();
      }
    }
      else
    {
      $errorMessage = 'Veuillez inscrire vos identifiants svp !';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FORM</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <title>Formulaire d'authentification</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <fieldset>
                        <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Identifiez-vous</h1>
                        <?php
                            // Rencontre-t-on une erreur ?
                            if(!empty($errorMessage))
                            {
                              // echo '<div class="alert alert-danger" role="alert">', htmlspecialchars($errorMessage) ,'</div>';
                              echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', htmlspecialchars($errorMessage) ,'</div>';
                            }
                          ?>
                            <div class="form-group">
                                <label for="login">Login :</label>
                                <input class="form-control" type="text" name="login" id="login" placeholder="login" value="" />
                            </div>
                            <div class="form-group">
                                <label for="password">Password :</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="password" value="" />
                            </div>
                            <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Submit</button>
                    </fieldset>
                </form>

                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="js/bootstrap.min.js"></script>
            </div>
            <div class="col-md-8">
              <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTgzMDI5ODZjMiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1ODMwMjk4NmMyIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ0LjA0Njg3NSIgeT0iNzQuMzk2ODc1Ij4xNDB4MTQwPC90ZXh0PjwvZz48L2c+PC9zdmc+" class="img-responsive" alt="Responsive image">
            </div>
        </div>
    </div>
</body>

</html>
