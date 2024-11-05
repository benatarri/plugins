document.addEventListener("DOMContentLoaded", function(event)) {
    datuak_ikusi();
}

function datuak_ikusi(){

    var currenturl = window.location.href;
    var shorturl = currenturl.split("/worpress/");

    jQuery.ajax({
        url: shorturl[0] + "/wordpress/plugins/php-json.php",
        dataType: 'json',
        success: function(response) {
            document.getElementById('idContainer').innerHTML = "<ul id='ulUsers'></ul>";
            for (var i=0;i<response.length;i++) {
                document.getElementById('ulUsers').innerHTML+="<li>Erabiltzailea: " + response[i].username + "</li>";
            }
        },
        error: function(xhr) {
            alert("An AJAX error occured: " + xhr.status + " " + xhr.status.Text)
        }
    })


}