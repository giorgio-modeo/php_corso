<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form >
        <input type="text" name="nome" id="nome">
        <input type="password" name="pswd" id="pswd">
        <input type="button" value="invia">

    </form>

    <script>
document.querySelector("input[type='button']").addEventListener("click", function() {
  let nome = document.querySelector("#nome").value;
  let pswd = document.querySelector("#pswd").value;

  let xhttp = new XMLHttpRequest();
    
  xhttp.open("POST", "http://localhost/php_corso/BattagliaNavale/src/Model/DBsave.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("nome=" + nome + "&pswd=" + pswd);
  
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
      if (this.responseText === "login successful") {
        // set cookie "nome" to nome for all paths
        document.cookie = "nome=" + nome + ";path=/";
        window.location.href = "http://localhost/php_corso/BattagliaNavale/src/View/shipPos.html";
      }
    }
  };
  


});


    </script>
</body>
</html>