<htm>
    <head></head>
<body>

<?php

require('connection.php'); 
                            $res=$con->query("select SUM(TPRICE) from tb_servicerequest as S JOIN tb_bill as B on S.EID=B.EID AND S.ID=B.UID");
                            $count=$res->num_rows;
                            $i=1;
                            if($count>0)
                            { 
while($row=$res->fetch_assoc()){ 
    $A=$row['SUM(TPRICE)'];
    $z=$A+100;
    echo $z; 
}
                            }
	


?>







</body>  
  </html>