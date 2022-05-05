<?php
    function layDuLieuTuDB($query){
        $connect = mysqli_connect('localhost','root','','truyentranh');
		mysqli_query($connect,"set names 'utf8'");
        $result = mysqli_query($connect ,$query);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($connect);
        mysqli_free_result($result);
        return $data;
    }
?>

