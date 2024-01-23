<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>


<body>
    <div>
        <h1>Strong password Generator</h1>
    </div>
    <div>
        <p class="subtitle">Genera una password sicura</p>
    </div>
    <div class="wrapper-label">
        <div class="container-parameter">
            <p>Nessun paramtero valido inserito</p>
        </div>
    </div>
    <div class="wrapper-container">
        <div class="container">
            <form action="./script.php" method="GET">
                <div class="container-password">
                    <div class="my-mt">
                        <label class="my-label" for="length">Lunghezza password:</label>
                        <input type="number" class="form-control" id="length" name="length">
                    </div>
                    <div class="my-mt">
                        <label for="repeatRadio">Consenti ripetizioni di uno o piu' caratteri:</label>
                        <div class="flex-col">
                            <div>
                                <input type="radio" name="repeatRadio" id="repeatRadio" value="1" checked>
                                <label for="repeatRadio">Si</label>
                            </div>
                            <div>
                                <input type="radio" name="repeatRadio" id="repeatRadio" value="1" checked>
                                <label for="repeatRadio">No</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" value="1" id="flexCheckDefault" name="chars">
                                <label for="flexCheckDefault">
                                    Lettere
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" value="1" id="flexCheckChecked" name="numbers">
                                <label for="flexCheckChecked">
                                    Numeri
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" value="1" id="flexCheckChecked" name="symbols">
                                <label for="flexCheckChecked">
                                    Simboli
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="btn-container">
                        <button type="submit" class="my-button bg-blue">Invia</button>
                        <button type="reset" class="my-button bg-gray">Annulla</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>