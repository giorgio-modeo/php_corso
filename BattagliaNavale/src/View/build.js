var navi = [4,3,3,2,2,2];
var l_nave;
var premuto = 0;
var navi_posizionate = Array();
var coordinate = Array();

function buildShipSelector(){
    var form =document.createElement("form");
    document.body.appendChild(form);
    form.setAttribute("id", "form");
    form.setAttribute("method", "post");
    
    // form.setAttribute("action", "http://localhost:8080/../model/game.php");
    var br = document.createElement("br");
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
    // creazione bottone per mettere le navi posizionate casualmente
    var bottone = document.createElement("button");
    bottone.setAttribute("type", "button");
    bottone.setAttribute("onclick", "defaultNavi()");
    bottone.textContent = "posizione default";
    document.getElementsByTagName("form")[0].appendChild(bottone);
    
    var bottoneS = document.createElement("button");
    bottoneS.setAttribute("type", "button");
    bottoneS.setAttribute("onclick", "NaviSbagliate()");
    bottoneS.textContent = "posizione sbagliata";
    document.getElementsByTagName("form")[0].appendChild(bottoneS);
    document.body.appendChild(br);
}
function defaultNavi() {
    navi_posizionate.push(["A0","A1","A2","A3"],["A5","A6","A7"],["A9","B9","C9"],["D8","D7"],["D5","D4"],["D2","D1"]);
    verificaNave();
}
function NaviSbagliate() {
    navi_posizionate.push(["A0","A0","A0","A0"],["A5","A6","A5"],["A0","B9","C9"],["D6","D7"],["A5","D4"],["D2","D4"]);
    verificaNave();
}

function buildGrid(eventClick) {

    div1 = document.createElement('div')
    div1.setAttribute("id","campo")
    document.body.appendChild(div1)
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
            cella.setAttribute("value", letter+j.toString());
            cella.setAttribute("onclick", eventClick);
            
            div1.appendChild(cella);
        }
        div1.appendChild(document.createElement("br"));
    }
}
function disable() {
    document.getElementById("campo").style.pointerEvents = "none";
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

function verificaNave(cella){
    if(navi_posizionate.length == 6){
        
        sendNaviPosizionate();
        navi_posizionate = Array();
        return;
    }
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

}
function sendNaviPosizionate() {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://localhost/php_corso/BattagliaNavale/src/model/game.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    const data = `navi=${JSON.stringify(navi_posizionate)}`;
    xhr.send(data);

    xhr.onload = function() {
        if (this.responseText === "all ships positioned") {
            window.location.href = "http://localhost/php_corso/BattagliaNavale/src/View/prova.php";
        }
        else{
            alert(this.responseText);
        }
    };
}

function colpo(cella){
    cella.style.backgroundColor = "red";
    console.log(cella.id);
    premuto++;
}