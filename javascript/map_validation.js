function initMap() {
    var e = {
            lat: 60.221855,
            lng: 24.805967
        },
        n = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: e
        });
    new google.maps.Marker({
        position: e,
        map: n
    })
}! function() {
    "use strict";
    window.addEventListener("load", function() {
        var e = document.getElementsByClassName("needs-validation");
        Array.prototype.filter.call(e, function(n) {
            n.addEventListener("submit", function(e) {
                !1 === n.checkValidity() ? (e.preventDefault(), e.stopPropagation()) : document.getElementById("demo").innerHTML = "<span class='color-green'>Your message was successfully sent!!</span>", n.classList.add("was-validated")
            }, !1)
        })
    }, !1)
}();