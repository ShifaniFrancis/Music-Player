<?php
        session_start();
        $table=$_SESSION['usern']."songs";
        $audpath=$_POST['aud'];
        echo $audpath;
        // Connecting to database
        $conn=mysqli_connect('localhost','root','','musicapp');
        $quer="select * from $table where audiopath=$audpath";
        $s=mysqli_query($conn,$quer);
        $c=mysqli_fetch_array($s,MYSQLI_ASSOC);
        $prior=$c['listenpriority'];
        $genre=$c['Genre'];
        $artist=$c['Artist'];
        $cur=time();
        // To calculate time spent in seconds on the song that was playing before 
        // the user logs out
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
        // Destroying the session because the user has logged out
       session_destroy();
?>