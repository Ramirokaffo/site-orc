
window.addEventListener("load", function () {

document.getElementById('geolocation-btn').addEventListener('click', function() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(fillForm);
    } else {
      alert('La géolocalisation n\'est pas prise en charge par votre navigateur.');
    }
  });
  
  function fillForm(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    console.log(latitude)
    console.log(longitude)
  
    // Remplissez le formulaire avec les coordonnées récupérées
    const geolocation_button = document.getElementById("geoloc-label");
    console.log("geolocation_button: ", geolocation_button)
    document.getElementById('latitude-input').value = latitude;
    document.getElementById('longitude-input').value = longitude;
    document.getElementById('geoloc-label').innerText = "Long: " + longitude + "  Lat: " + latitude;
    document.getElementById('geoloc-label').style.display = "block";
  
    // Soumettez automatiquement le formulaire
    // document.getElementById('my-form').submit();
  }

    const yoonulogo = document.getElementById("yoonu-logo");
    const yoonulogo2 = document.getElementById("yoonu-logo2");
    const checkbox = document.getElementById("nav-mobile");
    const appheader = document.getElementById("app-header");
    checkbox.addEventListener("change", function () {
        yoonulogo.style.display = checkbox.checked? "none": "block";
        appheader.style.display = checkbox.checked? "block": "flex";
        yoonulogo2.style.zIndex = 30;

    });
});
console.log("Je suis ici")
const geolocation_button = document.getElementById("geolocation-btn");
console.log("geolocation_button: ", geolocation_button)

