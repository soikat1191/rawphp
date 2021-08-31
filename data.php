
<?php
  $con=mysqli_connect('localhost','root','','api');
  $sql="select * from users";
  $result=mysqli_query($con,$sql);
 
                     $count=1;
                     $row=array();
                    while ($res=mysqli_fetch_array($result)) {
                      $count++;
                       $row[]=$res;
                     }

                     echo json_encode($row);
                                        
                     ?>
 