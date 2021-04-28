<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <title>
        Feedback
    </title>
</head>
<body background="../Asset/bg.jpg">
        <div class="main" id="home">
            <br />
            <h3 align="center">
                <font face="sans" size="4">
                    <a href="home.html">BACK</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../index.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../Controller/logout.php">LOGOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;
                </font>
            </h3>
        </div>
         <fieldset>
        <legend>Feedback</legend>
        <br>
    <div align="center">
        <input type="button" value="See Feedback" class="feedback" id="feedback" name="feedback" onclick="ajax();toggle();">

   </div>
   <br><br>
   <div class="result" id="result" align="center"></div>
        <br><br>
        
 </fieldset>
 <center>
     <a href="addfeedback.html">ADD FEEDBACK</a>
     </center>
     <br><br>
        <br><br>
        <script type="text/javascript">

        function ajax() {

  var xhttp = new XMLHttpRequest();   
  xhttp.open('GET', '../controller/getfeedback.php', true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhttp.send();
  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      
      document.getElementById('result').innerHTML = this.responseText;
    }
  }
}
function toggle() {
  var tog = document.getElementById("result");
  if (tog.style.display === "none") {
    tog.style.display = "block";
  } else {
    tog.style.display = "none";
    
  }
}


 


        </script>
    </body>
</html>