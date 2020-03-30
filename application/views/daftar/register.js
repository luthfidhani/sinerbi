function conditionJurusan() {
    var x = document.getElementById("jurusan").value;
    if (x == "teknikInformatika") {
        document.getElementById("prodiTeknikInformatika").style.display = "block";
        document.getElementById("prodiSistemInformasi").style.display = "none";
    } else {
        document.getElementById("prodiSistemInformasi").style.display = "block";
        document.getElementById("prodiTeknikInformatika").style.display = "none";
    }
}
