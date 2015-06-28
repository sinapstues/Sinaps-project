<?php
// Get a connection for the database
$dbc = mysqli_connect("127.0.0.1", "user_web", "", "asktues");

$query = "SELECT id, zaglavie,avtor,text,rating, date FROM vaprosi";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

    echo '<table align="left"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>First Name</b></td>
<td align="left"><b>Last Name</b></td>
<td align="left"><b>Email</b></td>
<td align="left"><b>Street</b></td>
<td align="left"><b>City</b></td>
<td align="left"><b>State</b></td>
<td align="left"><b>Zip</b></td>
</tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
    while($row = mysqli_fetch_array($response)){

        echo '<tr><td align="left">' .
            $row['id'] . '</td><td align="left">' .
            $row['zaglavie'] . '</td><td align="left">' .
            $row['avtor'] . '</td><td align="left">' .
            $row['text'] . '</td><td align="left">' .
            $row['rating'] . '</td><td align="left">' .
            $row['date'] . '</td><td align="left">';

        echo '</tr>';
    }

    echo '</table>';

} else {

    echo "Couldn't issue database query<br />";

    echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>
