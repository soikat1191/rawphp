<?php 
 $con=mysqli_connect('localhost','root','','api');
  $sql="select * from users";
  $result=mysqli_query($con,$sql);
  ?>
 <html>  
 <head>  
   <title>DataTable</title>  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
      <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
   <style>  
           body  
           {  
                margin:0;  
                padding:0;  
                background-color:#f1f1f1;  
           }  
           .box  
           {  
                width:900px;  
                padding:20px;  
                background-color:#fff;  
                border:1px solid #ccc;  
                border-radius:5px;  
                margin-top:10px;  
           }  
      </style>  
 </head>  
 <body> 
  
  <div class="container box">  
           <h3 align="center">DataTable</h3><br />  
           <div class="table-responsive">  
                <br />  
                <table id="user_data" class="table table-bordered table-striped">  
                     <thead>  
                          <tr>  
                               <th width="10%">SI NO</th>  
                               <th width="35%">First Name</th>  
                               <th width="35%">Last Name</th>  
                               <th width="10%">Edit</th>  
                               <th width="10%">Delete</th> 

                          </tr>  
                     </thead>  
                     <tbody><?php

                     $count=1;
                       while ($res=mysqli_fetch_array($result)) {?>                
                    
                   
                       <tr>
                         <th><?php echo $count++; ?></th>
                         <th><?php echo $res['first_name'] ?></th>
                         <th><?php echo $res['last_name'] ?></th>
                          <th><a href="editpost.php?id=<?php echo $res['id'] ?>"><span class="btn btn-warning btn-sm ">
                         Edit</span></a></th>
                          <th><a href="editpost.php?id=<?php echo $res['id'] ?>"><span class="btn btn-danger btn-sm ">
                         Delete</span></a></th>
                       </tr>
                       <?php 
                         }
                        ?>
                        

                     </tbody>
                </table>  
           </div>  
      </div>  
 </body>  
 </html>  
 <script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  
      var dataTable = $('#user_data').DataTable();
      // ({  
          
      //      "ajax":{  
      //           url:"data.php",  
      //           dataSrc:""
      //      },
      //      // "columns":[
                
      //      //      {"data":"first_name"},
      //      //      {"data":"last_name"}
             
      //      // ]
            
      // });  
 });  
 </script>  