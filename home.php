<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="./css/index.css">
</head>
<body>

  <div className="App">

    <!--    ------------------Header-----------------      -->
    <header class="app-header">
      <img class="logo-header child-header" src="./assets/img/logo.png" />
      <input class="search-container child-header" type="input" placeholder='Rechercher une offre' />
      <button class="create-annonce child-header">Créer votre propre annonce !</button>
      <img class="compte-container" src="./assets/img/account.png" />
    </header>
    <!--    ------------------END Header-----------------      -->


    <div class="body-container">
      <div id="map" >
        <script>
          function initMap() {
            // Coordonnées du centre de la carte (Toulouse)
            const centerCoords = { lat: 43.6045, lng: 1.4442 };
      
            const iconShrek = {
              url: "./assets/img/shrek.png",                // Chemin vers l'image
              scaledSize: new google.maps.Size(100, 100),     // Redimensionne à 50x50
              anchor: new google.maps.Point(50, 50)         // Ancrage en bas au centre
            };

            // Création de la carte
            const map = new google.maps.Map(document.getElementById("map"), {
              zoom: 13,
              center: centerCoords
            });
      
            // Liste des waypoints (marqueurs) à Toulouse
            const waypoints = [
              {
                position: { lat: 43.604652, lng: 1.444209 },
                title: "Place du Capitole",
                url: "https://fr.wikipedia.org/wiki/Place_du_Capitole"
              },
              {
                position: { lat: 43.606, lng: 1.442 },
                title: "Basilique Saint-Sernin",
                url: "https://fr.wikipedia.org/wiki/Basilique_Saint-Sernin_de_Toulouse"
              },
              {
                position: { lat: 43.584, lng: 1.481 },
                title: "Cité de l'espace",
                url: "https://fr.wikipedia.org/wiki/Cit%C3%A9_de_l%27espace"
              },
              {
                position: { lat: 43.599, lng: 1.439 },
                title: "Pont Neuf de Toulouse",
                url: "https://fr.wikipedia.org/wiki/Pont_Neuf_(Toulouse)"
              }
            ];
      
            // Création des marqueurs et gestion du clic
            waypoints.forEach((waypoint) => {
              const marker = new google.maps.Marker({
                position: waypoint.position,
                map: map,
                title: waypoint.title,
                icon: iconShrek
              });
      
              marker.addListener("click", () => {
                window.open(waypoint.url, "_blank");
              });
            });
          }
        </script>

      
        <!-- Script Google Maps avec votre clé d’API -->
        <script 
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuRA36AzIS5o-83Qx1V6Rc90NXsZRwU4o&callback=initMap"
          async
          defer>
        </script>
      </div>




      <div class="post-container">
        <div class="post"> Annonce </div>
        <div class="post pair"> Annonce </div>
        <div class="post"> Annonce </div>
        <div class="post pair"> Annonce </div>
        <div class="post"> Annonce </div>
        <div class="post pair"> Annonce </div>
        <div class="post"> Annonce </div>
        <div class="post pair"> Annonce </div>
        <div class="post"> Annonce </div>
        <div class="post pair"> Annonce </div>
        <div class="post"> Annonce </div>
        <div class="post pair"> Annonce </div>
        



        <!--    ------------------FOOTER-----------------      -->
        <footer class="footer">
          <div id="footer-socials">
            <div class="socials inline-inside socials-colored">
              <a href="#" target="_blank" title="Facebook" class="socials-item">
                <i class="fab fa-facebook-f facebook"></i>
              </a>
              <a href="#" target="_blank" title="Twitter" class="socials-item">
                <i class="fab fa-twitter twitter"></i>
      
              </a>
              <a href="#" target="_blank" title="Instagram" class="socials-item">
                <i class="fab fa-instagram instagram"></i>
              </a>
              <a href="#" target="_blank" title="YouTube" class="socials-item">
                <i class="fab fa-youtube youtube"></i>
              </a>
              <a href="#" target="_blank" title="Telegram" class="socials-item">
                <i class="fab fa-telegram telegram"></i>
              </a>
            </div>
          </div>
        </footer>
        <!--                     END  FOOTER                          -->


      </div>
    </div>
  </div>
  
</body>
</html>







