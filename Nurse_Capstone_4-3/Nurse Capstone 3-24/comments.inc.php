<?php

function setComments($conn) {
    if (isset($_POST['commentSubmit'])){
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO comments(uid, date, message) VALUES('$uid', '$date', '$message')";
        $result = $conn->query($sql);
        echo "Comment Added";
    }
}

function getComments($conn){
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
        echo "<div class='comment-box'><p>";
            echo $row['date'];."<br>";
            echo n12br($row['message']);
        echo "</p></div>";
    }
    
}
