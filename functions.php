
<?php
 function printCOMENT($ide)
{
$row="";
	$ide=2; $i2=0;
	$dbc = mysqli_connect("127.0.0.1", "user_web", "", "asktues");
$response=1;

		$query = "SELECT  avtor,date,text, rating FROM otgovori1 WHERE vapros=$ide ORDER BY rating DESC";#AND id=$i 
    	$response = mysqli_query($dbc, $query);
		if($response)
    	{$row = mysqli_fetch_array($response);
    	    	ECHO
    	    	$row['avtor']."<br>"
    	    	.$row['date']."<br>"
    	    	.$row['text']."<br>"
                .$row['rating']."<br>";
    	    	}
                else
                {
    	    		break;
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
        
                ECHO
                $row['zaglavie']."<br>"
                .$row['rating']."<br>"
                .$row['avtor']."<br>"
                .$row['date']."<br>"
                .$row['text']."<br>";
                return $row['id'];
}

?>
