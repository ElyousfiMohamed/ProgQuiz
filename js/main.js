$(document).ready(function () {
    $("i.icon").click(function () {
        $(".main-nav").slideToggle();
    });
});


let cor_ansr = 0, wro_ansr = 0;

function verifierQuestion(correct, reponse, id, id2, id_speciale) {
    let id_h = id;
    index = 4;
    if (correct == reponse) {
        document.getElementById(id_speciale).style = "color : white;background-color :#5cb85c ;padding : 3px;border-radius : 5px;";
        cor_ansr++;
    } else {
        document.getElementById(id2).style = "color : white;background-color:#d43f3a;padding : 3px;border-radius : 5px;";
        document.getElementById(id_speciale).style = "color : white;background-color :#5cb85c ;padding : 3px;border-radius : 5px;";
        wro_ansr++;
    }
    document.getElementById(id++).disabled = true;
    document.getElementById(id++).disabled = true;
    document.getElementById(id++).disabled = true;
    document.getElementById(id++).disabled = true;
    document.fr.cor.value = cor_ansr;
    document.fr.wro.value = wro_ansr;
}
