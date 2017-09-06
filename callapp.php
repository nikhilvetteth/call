$link = mysql_connect('mynikhil.mysql.database.azure.com', 'nikhil@mynikhil', '1!qazxcnMS');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

echo 'Connected successfully';

//mysql_select_db('sandsbtob',$link) or die ("could not open db".mysql_error());
// we connect to localhost at port 3306