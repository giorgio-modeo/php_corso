var navi = [4,3,3,2,2,2];
var l_nave;
var premuto = 0;
var navi_posizionate = Array();
var coordinate = Array();

function buildShipSelector() {
    var form =document.createElement("form");
    document.body.appendChild(form);
    form.setAttribute("method", "post");
    form.setAttribute("action", "prova.php");
    var br = document.createElement("br");
    // 8 navi: 1 di lunghezza 4, 2 di lunghezza 3 e 3 di lunghezza 2

    for(var i=0; i<6; i++){
        var nave = document.createElement("div");
        var input = nave.appendChild(document.createElement("input"));
        nave.style.display = "inline-block";
        nave.style.border = "1px solid black";
        nave.style.padding = "5px";
        input.setAttribute("type", "radio");
        // nave.setAttribute("value", premuto = 0);
        input.setAttribute("id", "nave"+i.toString());
        input.setAttribute("onclick", "naveSelizionata(navi["+i+"], this)");
        nave.textContent = "lungezza nave: "+navi[i];
        document.getElementsByTagName("form")[0].appendChild(nave).appendChild(input);
    }
    document.body.appendChild(br);
}

function buildGrid() {
    for (let i = 65; i <= 74; i++) {
        let letter = String.fromCharCode(i);
        for(var j=0; j<10; j++){
            var cella = document.createElement("div");
            cella.style.width = "50px";
            cella.style.height = "50px";
            cella.style.border = "1px solid black";
            cella.style.display = "inline-block";
            cella.style.cursor = "pointer";
            cella.setAttribute("id", letter+j.toString());
            cella.setAttribute("content", letter+j.toString());
            cella.setAttribute("onclick", "cliccato(this)");
            document.body.appendChild(cella);
        }
        document.body.appendChild(document.createElement("br"));
    }
}

function naveSelizionata(params,nave) {
    if(l_nave != null){
        alert("hai già selezionato una nave");
        nave.checked = false;
        return;
    }
    l_nave = params;
    console.log(l_nave);

}

function cliccato(cella){
    if(l_nave == null){
        alert("seleziona prima una nave");
        return;
    }

    if(premuto < l_nave){
        cella.style.backgroundColor = "red";
        coordinate.push(cella.id);
        console.log(cella.id);
        premuto++;
    }
    else{
        alert("hai già selezionato tutte le caselle per questa nave");
        l_nave = null;
        premuto = 0;
    }
    if(premuto == l_nave){
        navi_posizionate.push(coordinate);
        coordinate = [];
        l_nave = null;
        premuto = 0;
        console.log(navi_posizionate);
    }
    if(navi_posizionate.length == 6){



        var input = document.createElement("input");
        input.setAttribute("type", "hidden");
        input.setAttribute("name", "navi");
        input.setAttribute("value", JSON.stringify(navi_posizionate));
        document.getElementsByTagName("form")[0].appendChild(input) ;
        document.getElementsByTagName("form")[0].submit();
    }
}
