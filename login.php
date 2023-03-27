<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Inloggen | Het Gewitte Kippetje</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <section class="nav-branding">
            <img src="img/logo4.png" alt="Webshop" />
            <h1>Witte Kip</h1>
        </section>
        <section class="nav-items">
            <a href="login.php">Inloggen</a><br />
            <a href="register.php">Registeren</a>
        </section>
    </nav>
    
    <main>
        <form method="POST" action="src/formhandlers/login.php">
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" />
            </div>
            <div>
                <label for="password">Wachtwoord</label>
                <input type="password" name="password" id="password" />
            </div>
            <button type="submit">Inloggen</button>
        </form>
    </main>
</body>
</html>