<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Het Gewitte Kippetje</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <form method="POST" action="src/formhandlers/register.php">
            <div>
                <label for="username">Gebruikersnaam</label>
                <input type="text" name="username" id="username" />
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" />
            </div>
            <div>
                <label for="password">Wachtwoord</label>
                <input type="password" name="password" id="password" />
            </div>
            <button type="submit">Registeer</button>
        </form>
    </main>
</body>
</html>