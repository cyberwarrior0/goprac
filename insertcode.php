$server="localhost";
$username="root";
$password="";
$database="code";
$sql="select * from a_code";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
?>
if(isset($_POST['insert']))
{
    $alcode = $_POST['alcode'];
    $start = $_POST['start'];
    $end= $_POST['end'];

    $query= "INSERT INTO a_code ('alcode','start','end') VALUES ('$alcode','$start','$end')";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
    echo '<script>alert("Date Recorded");</script>';
    header('Location: aca.php');
    }
    else{
    echo '<script>alert("Date not recorded");</script>';

    }
}
?>