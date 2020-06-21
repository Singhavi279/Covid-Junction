
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="b.css">
</head>
<body>
<h1>BRAINFLOW DISCUSSION FORUM</h1>
    <div class="container" id="cont7">
       
        <form action="" method="post">
            <label for="question" class="centered">Ask a question:</label><br>
            <input type="text" id="question" name="question" class="text"><br>
            <input href="#msg" type="submit" class="s">
            </form> 
          <?php
if(empty($_POST["question"]))
{
    $question=null;
}
else
{
    $question=$_POST["question"];
}
$date=date("Y-m-d");
$conn= new mysqli('localhost','root','','discussion_forum');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into msg(date,message)
    values(?,?)");
    $stmt->bind_param("ss",$date,$question);
    $stmt->execute();
    $stmt->close();
}
$conn= new mysqli('localhost','root','','discussion_forum');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}
else{
    $query = "SELECT * FROM msg";
    
    if ($result = $conn->query($query)) {
        echo "<center><div id='forum'>";
        while ($row = $result->fetch_assoc()) {
            echo "<body><div id='msg'>".$row['message']."<br></div></body>";

            }
        echo "</div></center>";
    $result->free();
}
}


?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

    </div>
</body>