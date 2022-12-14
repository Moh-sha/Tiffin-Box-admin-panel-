<!DOCTYPE html>
<html>
  <head>
    <title>Search Restaurant</title>
    <link rel="stylesheet" href="../assets/h_ajax.css">
 
 

  </head>
  <body>
    <p>Please input restaurant Name </p>
    <form>
   
   <p> Resturant name:<p> <input type="text" onkeyup="showSuggestion(this.value)" />
    
      <script>
        function showSuggestion(string) {
          if (string.length == 0) {
            document.getElementById("getSuggestion").innerHTML = "";
            return;
          } else {
            var request = new XMLHttpRequest();
            request.onreadystatechange = function () {
              if (request.readyState == 4 && request.status == 200) {
                document.getElementById("getSuggestion").innerHTML =
                  request.responseText;
              }
            };
            request.open("GET", "ajax.php?i=" + string, true);
            request.send();
          }
        }
      </script>
    </form>
    <p >Suggestion :  <span id="getSuggestion"></span></p>

    <br>
        <br> 
        <a  href="../views/home.php">Home </a>

  </body>
</html>
