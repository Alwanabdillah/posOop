var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

keyword.addEventListener("keyup", function () {
    var ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            container.innerHTML = ajax.responseText
        }
    }


    ajax.open("GET", "ajax/search.php?keyword=" + keyword.value + "&ajax", true)
    ajax.send();
})