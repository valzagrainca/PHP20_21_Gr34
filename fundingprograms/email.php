<!DOCTYPE html>

<html>
  <head>
    <link rel="stylesheet" href="email.css">
    <script>
    function showSuggestion(str){
      if(str.length==0){
        document.getElementById('output').innerHTML='';
      }
      else{
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function(){
          if(this.readyState==4 && this.status==200){
            document.getElementById('output').
            innerHTML=this.responseText;
          }
        }
        xmlhttp.open("GET","suggest.php?q="+str,true);
        xmlhttp.send();
      }
    }
    </script>
  </head>
  <body>
    <div class="box">
   <form action="sendmail.php" method="POST" class="form-container">
   <label for="emri"  style="color:#333;font-size:15px;"><b>Name</b></label>
   </br>
   <input type="text" id="name" placeholder="Enter Name" name="emri" onkeyup="showSuggestion(this.value)"  required>
   </br>
   <label for="email" style="color:#333;font-size:15px;"><b>Email</b></label>
   </br>
   <input type="text" id="email" placeholder="Enter Email" name="email"  required>
  </br>
   <label for="subject" style="color:#333;font-size:15px;"><b>Message</b></label>
   </br>
   <textarea id="subject" name="subject" placeholder="Enter text here.." cols="30" rows="4"></textarea>
   <p style="font-size:15px;color:#F79B44;font-weight:700">Suggestion: <spam id="output" style="font-size:15px;font-weight:600;color:black"></spam></p>
   </br>

   <button type="submit" class="btn">Submit</button>
   </form>
  </div>
                  
  </body>
</html>