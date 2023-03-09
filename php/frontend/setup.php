<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Woods Sooper Dooper Shop</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="stylesheet" href="../../css/normalize.css">
  <link rel="stylesheet" href="../../css/setup.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
<div class="headerDiv">
  <header>
    <h1 class="websiteHeader">Willkommen zu Woods Sooper Dooper Shop!</h1>
  </header>
</div>

<div class="nav">
  <a href="../../index.php">Home</a>
  <a href="setup.php">Login</a>
  <a href="#">Kontakt</a>
  <a href="#">Über uns</a>
</div>
<div class="formDiv">
  <form action="../backend/setupLogic.php" method="post">
    <div class="account">
      <h3>Account</h3>
      <table>
        <tbody>
        <tr>
          <label>Vorname:
            <input maxlength="30" name="Vorname" size="35" type="text" required/>
          </label>
        </tr>
        <tr>
          <label>Nachname:
            <input maxlength="30" name="Nachname" size="35" type="text" required/>
          </label>
        </tr>
        <tr>
          <label class="birthday">Geburtstag:
            <input name="Geburtstag" type="date" required/>
          </label>
        </tr>
        <tr>
          <label>Email:
            <input name="Email" size="35" type="email" required/>
          </label>
        </tr>
        <tr>
          <label>Passwort:
            <input maxlength="50" name="Passwort" size="35" type="password" required>
          </label>
        </tr>
        <tr>
          <label>Passwort bestätigen:
            <input maxlength="50" size="35" type="password" required>
          </label>
        </tr>
        </tbody>
      </table>
    </div>
    <br><br>

    <div class="address">
      <h3>Account</h3>
      <table>
        <tbody>
        <tr>
          <label>Strasse:
            <input maxlength="30" name="Strasse" size="35" type="text" required/>
          </label>
        </tr>
        <tr>
          <label>Wohnort:
            <input maxlength="30" name="Wohnort" size="35" type="text" required/>
          </label>
        </tr>
        <tr>
          <label>PLZ:
            <input maxlength="4" name="PLZ" size="35" type="text" required/>
          </label>
        </tr>
        <tr>
          <label class="selectCountry">Bundesland:
            <label>
              <select name="Bundesland">
                <option>Salzburg</option>
                <option>Oberösterreich</option>
                <option>Niederösterreich</option>
                <option>Wien</option>
                <option>Burgenland</option>
                <option>Kärnten</option>
                <option>Steiermark</option>
                <option>Tirol</option>
                <option>Vorarlberg</option>
              </select>
            </label>
        </tr>
        <tr>
          <label>Telefon:
            <input name="Telefon" size="35" type="tel" value="+43" pattern="[+]{1}[0-9]{8,14}" required/>
          </label>
        </tr>
        </tbody>
      </table>
    </div>
    <br><br>

    <div class="Upload">
      <h3>Datei Hochladen</h3>
      <form action=""
            enctype="multipart/form-data">

        <label for="" class="fileSelect">Select a file:</label>
        <input type="file" id="myfile" name="myfile"/>
        <br/><br/>
      </form>
      <input name="AGB" size="AGB" type="checkbox" required/> Ich akzeptiere die AGB
      <br><br>
      <input type="submit" name="submit" value="Abschicken"/>
    </div>
  </form>
</div>
<div class="blankSpace"></div>

<!-- Add your site or application content here -->
<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
</body>
</html>
