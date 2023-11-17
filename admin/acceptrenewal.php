<?php
require('dbconn.php');

$bookid=$_GET['id1'];
$rollno=$_GET['id2'];

$sql="select Gender from MYLMS.user where RollNo='$rollno'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

$Gender=$row['Gender'];



if($Gender == 'GEN' || $Gender == 'OBC' )
{$sql1="update MYLMS.record set Due_Date=date_add(Due_Date,interval 60 day),Renewals_left=0 where BookId='$bookid' and RollNo='$rollno'";
 
if($conn->query($sql1) === TRUE)
{$sql3="delete from MYLMS.renew where BookId='$bookid' and RollNo='$rollno'";
 $result=$conn->query($sql3);
 
 $sql5="insert into MYLMS.message (RollNo,Msg,Date,Time) values ('$rollno','Your request for renewal of BookId: $bookid  has been accepted',curdate(),curtime())";
 $result=$conn->query($sql5);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=renew_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:0.01; url=renew_requests.php", true, 303);

}
}
else
{$sql2="update MYLMS.record set Due_Date=date_add(Due_Date,interval 180 day),Renewals_left=0 where BookId='$bookid' and RollNo='$rollno'";

if($conn->query($sql2) === TRUE)
{$sql4="delete from MYLMS.renew where BookId='$bookid' and RollNo='$rollno'";
 $result=$conn->query($sql4);
 $sql6="insert into MYLMS.message (RollNo,Msg,Date,Time) values ('$rollno','Your request for renewal of BookId: $bookid has been accepted',curdate(),curtime())";
 $result=$conn->query($sql6);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=renew_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:0.01; url=renew_requests.php", true, 303);

}
}



?>