
<?php  
 $connect = mysqli_connect("localhost", "root", "", "alpha");  
 $sql = "SELECT * FROM saitama";  
 $result = mysqli_query($connect, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Admin Panel</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body style="background: linear-gradient(90deg, #C7C5F4, #776BCC);">  
           <br />  
           <div class="container">
               <div class="row">
                    <div class="col-md-9" style="padding-left:25%">
                    <h3><center><b>Shree Sadguru Typing Institute</b></h3> 
                    </div>
                    <div class="col-md-3 "style="padding-left:5%;padding-top:15px;">
                    <h4> <i class="fas fa-sign-out-alt"></i>&nbsp;<a href="LoginForm.php" style="color:white"> Logout</a></h4> 
                            
                    </div>
                    <div class="col-md-" style="padding-left:20%;padding-top:15px;">
                   
                    </div>
               </div>  
               <br><br>
                       
                <div class="table-responsive">  
                <table class="table table-dark">
                <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["id"];?></td>  
                               <td><?php echo $row["fname"]; ?></td>  
                               <td><?php echo $row["phone"];?></td>  
                               <td><?php echo $row["email"]; ?></td>  
                               <td>
                                   <button class="btn btn-danger text-white"><a style="color:white"; href="delete.php ?id=<?php echo $row["id"]; ?>">Delete</a>
                              </td> 
                          </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  



 