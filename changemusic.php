<?php 
// To change the song that is playing 
session_start();
$arr2=json_decode($_POST['arr']);
function change($b,$a){
        // Connecting to database
        $conn=mysqli_connect('localhost','root','','musicapp');
        $table=$_SESSION['usern']."songs";
        $access="select * from $table where imgpath='$b'";
        $res1=mysqli_query($conn,$access);
        $arr1=mysqli_fetch_array($res1,MYSQLI_ASSOC);
        $path=array();
        $path=array($arr1['audiopath'],$arr1['Title'],$arr1['Artist'],$arr1['Liked']);
        $t=time();
        // Updating the lastlistened time of the song
        $changet="update $table set Last_Listened=$t where imgpath='$b'";
        $res2=mysqli_query($conn,$changet);
        $quer="select * from $table where audiopath='$a'";
        $s=mysqli_query($conn,$quer);
        $c=mysqli_fetch_array($s,MYSQLI_ASSOC);
        $prior=$c['listenpriority'];
        $genre=$c['Genre'];
        $artist=$c['Artist'];
        $cur=time();
        // To calculate time spent in seconds on the song that was playing before 
        // the user clicked on another song
        $timespent=$cur-$_SESSION['prev'];
        $_SESSION['prev']=$cur;
        $q=mysqli_query($conn,"select * from $table");
        if($timespent>30 && $timespent<60){
                // If time spent lies between 30 and 60 seconds
                while($row=mysqli_fetch_array($q)){
                        $num=$row['SongNum'];
                        $p=$row['listenpriority'];
                        if($row['Genre']==$genre && $row['Artist']==$artist){
                        $n=$p+3;
                        if($p<30){
                                if($n>30){
                                        $n=30;
                                }
                                $s=mysqli_query($conn,"update $table set listenpriority=$n where SongNum=$num");
                        }
                        }
                        else if($row['Genre']==$genre){
                        $n=$p+2;
                        if($p<30){
                                if($n>30){
                                        $n=30;
                                }
                                $s=mysqli_query($conn,"update $table set listenpriority=$n where SongNum=$num");
                        }
                        }
                        else if($row['Artist']==$artist){
                        $n=$p+2;
                        if($p<30){
                                if($n>30){
                                        $n=30;
                                }
                                $s=mysqli_query($conn,"update $table set listenpriority=$n where SongNum=$num");
                        }
                        }
                        if($row['Genre']!=$genre && $row['Artist']!=$artist){
                        $n=$p-1;
                        if($p>-25){
                                if($n<-25){
                                        $n=-25;
                                }
                                $s=mysqli_query($conn,"update $table set listenpriority=$n where SongNum=$num");
                        }
                        }
                }
        }
        else if($timespent>=60 && $timespent<120){
                // If time spent lies between 60 and 120 seconds
                while($row=mysqli_fetch_array($q)){
                        $num=$row['SongNum'];
                        $p=$row['listenpriority'];
                        if($row['Genre']==$genre && $row['Artist']==$artist){
                        $n=$p+5;
                        if($p<30){
                                if($n>30){
                                        $n=30;
                                }
                                $s=mysqli_query($conn,"update $table set listenpriority=$n where SongNum=$num");
                        }
                        }
                        else if($row['Genre']==$genre){
                        $n=$p+3;
                        if($p<30){
                                if($n>30){
                                        $n=30;
                                }
                                $s=mysqli_query($conn,"update $table set listenpriority=$n where SongNum=$num");
                        }
                        }
                        else if($row['Artist']==$artist){
                        $n=$p+3;
                        if($p<30){
                                if($n>30){
                                        $n=30;
                                }
                                $s=mysqli_query($conn,"update $table set listenpriority=$n where SongNum=$num");
                        }
                        }
                        if($row['Genre']!=$genre && $row['Artist']!=$artist){
                        $n=$p-2;
                        if($p>-25){
                                if($n<-25){
                                        $n=-25;
                                }
                                $s=mysqli_query($conn,"update $table set listenpriority=$n where SongNum=$num");
                        }
                        }
                }
        }
        else if($timespent>=120 && $timespent<=360){
                // If time spent lies between 120 and 360 seconds
                while($row=mysqli_fetch_array($q)){
                        $num=$row['SongNum'];
                        $p=$row['listenpriority'];
                        if($row['Genre']==$genre && $row['Artist']==$artist){
                        $n=$p+6;
                        if($p<30){
                                if($n>30){
                                        $n=30;
                                }
                                $s=mysqli_query($conn,"update $table set listenpriority=$n where SongNum=$num");
                        }
                        }
                        else if($row['Genre']==$genre){
                        $n=$p+4;
                        if($p<30){
                                if($n>30){
                                        $n=30;
                                }
                                $s=mysqli_query($conn,"update $table set listenpriority=$n where SongNum=$num");
                        }
                        }
                        else if($row['Artist']==$artist){
                        $n=$p+4;
                        if($p<30){
                                if($n>30){
                                        $n=30;
                                }
                                $s=mysqli_query($conn,"update $table set listenpriority=$n where SongNum=$num");
                        }
                        }
                        if($row['Genre']!=$genre && $row['Artist']!=$artist){
                        $n=$p-3;
                        if($p>-25){
                                if($n<-25){
                                        $n=-25;
                                }
                                $s=mysqli_query($conn,"update $table set listenpriority=$n where SongNum=$num");
                        }
                        }
                }
        }
        return $path;
       }

$audpath=change($arr2[0],$arr2[1]);
print_r(JSON_encode($audpath));
?>