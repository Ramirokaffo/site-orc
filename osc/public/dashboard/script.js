console.log("Bonjour ici")

window.addEventListener("load", function () {
    console.log("Bonjour")
    // this.alert("Je suis ici a", document.getElementById('dashbord-osc-search'), " toto")
    console.log(document.getElementById('dashbord-osc-search'))
    try {
        document.getElementById('dashbord-osc-search').addEventListener('click', function () {
    // this.alert("Je suis ici maintenant")

            document.getElementById("dashbord-osc-search-form").submit();
        alert(document.getElementById("dashbord-osc-search-form"))
        });
    } catch (error) {
        // this.alert("Il ya erreur")
    }


});
