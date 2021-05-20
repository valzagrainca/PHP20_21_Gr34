<!DOCTYPE html>

<html>
  <head>
    <link rel="stylesheet" href="email.css">
  </head>
  <body>
    <div class="box">
   <form action="sendmail.php" method="POST" class="form-container">
   <label for="emri"  style="color:#333;font-size:15px;"><b>Name</b></label>
   </br>
   <input type="text" id="name" placeholder="Enter Name" name="emri"  required>
   </br>
   <label for="email" style="color:#333;font-size:15px;"><b>Email</b></label>
   </br>
   <input type="text" id="email" placeholder="Enter Email" name="email"  required>
  </br>
   <label for="subject" style="color:#333;font-size:15px;"><b>Message</b></label>
   </br>
   <textarea id="subject" name="subject" placeholder="Enter text here.." cols="30" rows="4" ></textarea>
   <button type="submit" class="btn">Submit</button>
   </form>
  </div>
                  
  </body>
</html>