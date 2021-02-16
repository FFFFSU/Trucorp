<?php
    $con = mysqli_connect("172.18.0.2", "root", "toor", "Trucorp");
    if($con)
    {
        $sql = "SELECT * FROM users";
        $res = mysqli_query($con, $sql);
        if(mysqli_num_rows($res)>0)
        {
            while($row = mysqli_fetch_array($res))
            {
                echo "ID: " . $row["ID"]. " - Nama: " . $row["Nama"]. " " . $row["Kantor"]. "<br>";
            }
        }
    }
    else
    {
        echo "ga bisa";
    }
    mysqli_close($con);
?>