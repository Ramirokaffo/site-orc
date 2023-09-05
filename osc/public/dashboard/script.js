
window.addEventListener("load", function () {
    console.log(document.getElementById('dashbord-osc-search'))
    try {
        document.getElementById('dashbord-osc-search').addEventListener('click', function () {
            document.getElementById("dashbord-osc-search-form").submit();
        });
    } catch (error) {
    }


});
