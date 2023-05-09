<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./form-prenotazione.css">
    <title>Form Prenotazione</title>
</head>

<body>
    <div class="container d-flex align-items-center">
        <div class="row justify-content-center">
            <h2 class="text-center">Inserisci i tuoi dati per effettuare la prenotazione</h2>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <form>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Inserisci la tua email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password"
                            placeholder="Inserisci la tua password">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono:</label>
                        <input type="tel" class="form-control" id="telefono" placeholder="Inserisci il tuo numero di telefono" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Invia</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>