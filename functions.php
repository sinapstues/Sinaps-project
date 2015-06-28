
<?php
 function printCOMENT($ide)
{
$row="";
 $i2=0;
    $dbc = mysqli_connect("127.0.0.1", "user_web", "", "asktues");
$response=1;
 # for ($i=1; 1 ; $i++) { 


        $query = "SELECT  avtor,date,text, rating FROM otgovori1 WHERE vapros=$ide";
        $response = mysqli_query($dbc, $query);
        $row = mysqli_fetch_array($response);
if(mysqli_num_rows($response) > 0)
        {
            while($row = mysqli_fetch_assoc($response)){
                 printf('<div class="questions">
            <div class="name">%s</div>
            <div class="date">%s</div>
            <div class="yourq"><h1>%s</h1></div>
       </div>',$row['avtor'],$row['date'],$row['text']);

}

               /* ECHO
                $row['avtor']."<br>"
                .$row['date']."<br>"
                .$row['text']."<br>"
                .$row['rating']."<br>";*/
                #}
                #else
               # {
               #     break;
               # }
       # $i2++;
       # if ($i2>25) {
         #   break;
       # }
    }  
}
function printQuestion($ada)
{

$dbc = mysqli_connect("127.0.0.1", "user_web", "", "asktues");

$query = "SELECT id, zaglavie, rating, text, avtor, date FROM vaprosi WHERE id=$ada";
        $response = mysqli_query($dbc, $query);

        if (!$response) {
    return 0;
}

        $row = mysqli_fetch_array($response);
        
                /*ECHO
                $row['zaglavie']."<br>"
                .$row['rating']."<br>"
                .$row['avtor']."<br>"
                .$row['date']."<br>"
                .$row['text']."<br>";*/

                printf('
   <div class="questions">
          <div class="name">%s</div>
          <div class="date">%s</div></br>
          <a href="Vapros.php?id=%s"><div class="yourq"><h1>%s</h1></div></a>
   </div></br>
   
   ',$row['avtor'], $row['date'], $row['id'], $row['zaglavie']);
                return $row['id'];
}

?>
