<?php include("gestionPage.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="Hacker Poulette">
    <meta name="description" content="formulaire gérer par PHP" /> 
    <meta name="keywords" content="référencement, SEO, balise meta keywords" />
    <meta name="robots" content="index,follow," />
    <title>Hacker Poulette.</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="container">
        <h1 class="row justify-content-center">Hackers Poulette form.</h1>
        <div class="row justify-content-center">
            <a href="#"><img class="img-responsive" src="assets/img/hackers-poulette-logo.png" alt="hackers-poulette-logo"></a>
        </div>
    </header>
    <main class="container">
        <br>   
        <h1 class="text-center">Pour toute question ou demande...<br>Remplissez notre formulaire !</h1><br>
        <p class="text-center">Hacker Poulette se fera un plaisir de vous répondre dans les plus bref délai.</p>
        <form method="post" action="index.php">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="firstname">Your firstname :</label>
                    <input type="text" class="form-control" name="firstname" placeholder="ex: Jean">
                    <span class="help-block"><?php echo $errorFirstName ?></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="lastname">Your Lastname :</label>
                    <input type="text" class="form-control" name="lastname" placeholder="ex: Dupont">
                    <?php echo $errorLastName ?>
                </div>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Man</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">Woman</label>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="email">Email address :</label>
                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                    <?php echo $errorEmail ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="country">Country :</label>
                    <input type="text" class="form-control" name="country" placeholder="Your country">
                </div>
            </div>
            <div class="form-group">
                <label for="subject">Subject :</label>
                <input type="text" class="form-control" name="subject" placeholder="Subject description">
                <?php echo $errorSubject ?>
            </div>
            <div class="form-group">
                <label for="text_area">Text area :</label>
                <textarea class="form-control" name="text_area" cols="60" rows="6" placeholder="Tapez votre message içi..."></textarea>
                <?php echo $errorTextArea ?>
            </div>
            <div class="form-group text-center">
                <input type="submit" name="send">
            </div>
        </form>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>