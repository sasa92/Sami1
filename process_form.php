<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>À propos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/Progrès.png" type="image/x-icon">
    <link rel="shortcut icon" href="images/Progrès.png" type="image/x-icon">
</head>
  <body class="custom-video">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="images/Progrès.png" alt="Logo" width="50" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.html">Accueil</a></li>
            <li class="nav-item"><a class="nav-link" href="Aproposdemoi.html">À propos</a></li>
            <li class="nav-item"><a class="nav-link" href="Projets.html">Projets</a></li>
            <li class="nav-item"><a class="nav-link" href="PF.html">Portefeuille</a></li>
            <li class="nav-item"><a class="nav-link" href="Contacts.html">Contacts</a></li>
          </ul>
        </div>
        <div class="navbar-icons">
          <a href="https://www.linkedin.com/in/sami-ouail-275563289/" target="_blank" class="mx-2">
            <img src="images/linkedin.png" alt="LinkedIn" width="30" height="30">
          </a>
          <a href="mailto:sami.ouail08@gmail.com" class="mx-2">
            <img src="images/Mail.png" alt="Email" width="30" height="30">
          </a>
        </div>
      </div>
    </nav>










    <?php
$servername = "sql311.infinityfree.com";
$username = "if0_38331427";
$password = "T1GZXeHkUCI";
$dbname = "if0_38331427_contact";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer les données du formulaire
$name = $_POST['name'];
$status = $_POST['status'];
$email = $_POST['email'];
$message = $_POST['message'];

// Préparer et exécuter la requête SQL
$sql = "INSERT INTO contact_form (name, status, email, message) VALUES ('$name', '$status', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<div style='color: green; font-weight: bold; font-size: 1.2em;'>Les informations ont été envoyées avec succès.</div>";
    
    // Envoyer un email
    $to = "sami.ouail08@gmail.com";
    $subject = "Nouveau message de contact";
    $email_body = "Nom: $name\nStatut: $status\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "<div style='color: green; font-weight: bold; font-size: 1.2em;'>Email envoyé avec succès.</div>";
    } else {
        echo "<div style='color: red; font-weight: bold; font-size: 1.2em;'>Erreur lors de l'envoi de l'email.</div>";
    }
} else {
    echo "<div style='color: red; font-weight: bold; font-size: 1.2em;'>Erreur : " . $sql . "<br>" . $conn->error . "</div>";
}

// Fermer la connexion 
$conn->close();

?>






<nav class="navbar navbar-expand-lg navbar-light bg-light custom-navbar">
      <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.html">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="Aproposdemoi.html">À propos</a></li>
                <li class="nav-item"><a class="nav-link" href="Projets.html">Projets</a></li>
                <li class="nav-item"><a class="nav-link" href="PF.html">Portefeuille</a></li>
                <li class="nav-item"><a class="nav-link" href="Contacts.html">Contacts</a></li>
              </ul>
          </div>
          <div class="navbar-icons">
              <a href="https://www.linkedin.com/in/sami-ouail-275563289/" target="_blank" class="mx-2">
                  <img src="images/linkedin.png" alt="LinkedIn" width="30" height="30" class="icon-dark">
              </a>
              <a href="mailto:sami.ouail08@gmail.com" class="mx-2">
                  <img src="images/Mail.png" alt="Email" width="30" height="30" class="icon-dark">
              </a>
          </div>
      </div>
  </nav>
  
  
             <script src="script.js"></script>
             <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
              <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
               <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
               <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


          </body>
        </html>