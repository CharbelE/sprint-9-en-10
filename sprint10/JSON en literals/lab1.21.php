<!DOCTYPE html>
<html lang="nl">
<head>
    <title>json</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<form action="lab21.verwerken.php" method="post"> // maakt fromielier aan
    <table>
        <tr>
            <td>
                <label>
                    <input type="text" name="voornaam" placeholder="voornaam"> // maakt kopje voornaam aan
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    <input type="text" name="naam" placeholder="naam"> // maakt kopje naam aan
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    <input type="text" name="geboortedatum" placeholder="geboortedatum"> // maakt kopje geboortedatum aan
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    <input type="text" name="straat" placeholder="straat"> // maakt kopje straat aan
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    <input type="text" name="postcode" placeholder="postcode"> // maakt kopje postcode aan
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    <input type="text" name="plaats" placeholder="plaats"> // maakt kopje plaats aan
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    <input type="text" name="E-mailadres" placeholder="email"> // maakt kopje email aan
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    <input type="password" name="wachtwoord" placeholder="wachtwoord">  // maakt anoniem kopje wachtwoord aan
                </label>
            </td>
        </tr>
    </table>
    <br>
    Minderjarig:
    JA
    <label>
        <input type="radio" name="minderjarig" value="ja"> // maakt keuze minderjarig aan (ja)
    </label>
    NEE
    <label>
        <input type="radio" name="minderjarig" value="nee">// maakt keuze minderjarig aan (nee)
    </label>
    <br>
    <br>
    <input type="submit" name="registreren" value="Registreren"> // knop Registreren
    <input type="reset" name="reset" value="Resetten"> // knop resetten
</form>
</body>
</html>