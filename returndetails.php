<?php 
// This is to send details of a particular song to the javascript function
$n=$_POST['a'];
function change($b){
        // Connecting to database
        $conn=mysqli_connect('localhost','root','','musicapp');
        $access="select * from user1songs where SongNum=$b";
        $res1=mysqli_query($conn,$access);
        $arr1=mysqli_fetch_array($res1,MYSQLI_ASSOC);
        $path=array();
        $path=array($arr1['audiopath'],$arr1['Title'],$arr1['Artist'],$arr1['Liked'],$arr1['imgpath']);
        return $path;
       }
$audpath=change($n);
print_r(JSON_encode($audpath));
?>