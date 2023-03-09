<?php
if (isset($_POST['submit'])) {
  $vorname = $_POST['Vorname'];
  $nachname = $_POST['Nachname'];
  $geburtstag = $_POST['Geburtstag'];
  $email = $_POST['Email'];
  $passwort = $_POST['Passwort'];
  $salt = bin2hex(random_bytes(32));
  $hashed_password = hash('sha256', $passwort . $salt);
  $strasse = $_POST['Strasse'];
  $wohnort = $_POST['Wohnort'];
  $plz = $_POST['PLZ'];
  $bundesland = $_POST['Bundesland'];
  $telefon = $_POST['Telefon'];

  $content = file_get_contents('data.csv');
  $content .= "\"$vorname\";\"$nachname\";\"$geburtstag\";\"$email\";\"$hashed_password\";\"$strasse\";\"$wohnort\";\"$plz\";\"$bundesland\";\"$telefon\";\n";
  $file = fopen('data.csv', 'w');
  fwrite($file, $content);
  fclose($file);
//  $targetDir = "uploads/";
//  $targetFile = $targetDir . basename($_FILES["myfile"]["name"]);
//  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
//    echo "Die Datei " . htmlspecialchars(basename($_FILES["myfile"]["name"])) . " wurde hochgeladen.";
//  } else {
//    echo "Es gab einen Fehler beim Hochladen Ihrer Datei.";
//  }

    header('Location: http://localhost/MyFirstWebsite/index.php');
}
?>
