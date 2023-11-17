<?php
require('dbconn.php');
?>

<?php 
if ($_SESSION['RollNo']) {
    ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MYLMS</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php"><h1 style="padding-left: 92vh;"><strong>MYADMIN</strong></h1></a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php">Your Profile</a></li>
                                    <!--li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li-->
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                 <li><a href="message.php"><i class="menu-icon icon-inbox"></i>Messages</a>
                                </li>
                                <li><a href="student.php"><i class="menu-icon icon-user"></i>Manage Students </a>
                                </li>
                                <li><a href="book.php"><i class="menu-icon icon-book"></i>All Books </a></li>
                                <li><a href="addbook.php"><i class="menu-icon icon-edit"></i>Add Books </a></li>
                                <li><a href="requests.php"><i class="menu-icon icon-tasks"></i>Issue/Return Requests </a></li>
                                <li><a href="recommendations.php"><i class="menu-icon icon-list"></i>Book Recommendations </a></li>
                                <li><a href="current.php"><i class="menu-icon icon-list"></i>Currently Issued Books </a></li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    
                    <div class="span9">
                        <center>
                            <div class="card" style="width: 50%;"> 
                                <img class="card-img-top" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBESERIUEhISERISEhEaEhISEhEREhIRGBMYGhcUGRcaICwjGh0sIBcXJDYkKS0vMzQzGSI4Pjg4PSwyMy8BCwsLDw4PHRISHS8pIio1MjI0MjIyLzIyLzIyMjIyLzIyMjIyMjIyMjIvMjIyMjI0MjIyMjIyMjIyMjIvMjIyMv/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABAECAwUHBgj/xABCEAACAQIBCAYGBwgCAwEAAAAAAQIDEQQFBhIhMUFRYRMicYGRwTJCoaKx0QcUUnKCkuEjM0NTYrLS8BbCJFTxFf/EABoBAQADAQEBAAAAAAAAAAAAAAACAwQFAQb/xAAvEQACAQIEAwYHAQEBAAAAAAAAAQIDEQQSITFBUXETImGBsfAFFDKRocHh0fFC/9oADAMBAAIRAxEAPwDswAAAAAAAAAAAAAAABqco5ew9C6lPSkvUh1pX4PdHvaIznGCvJ2R7GLk7JXNsDxGKz0qP91SjFcZtzfgrW9prp5z42T1VFHlGnDzTZhn8SoR2u+i/2xpjg6j3sjpAOarOPHL+N406X+JMw+eGIXpxp1F2OMvFO3sEfidB73Xl/jZ68FUXL7/6e+B53AZ14epZTUqMnx60b/eXmkb6E1JJxaaa1NNNNcUzZTqwqK8GmZ505QdpKxkABYQAAAAAAAAAAAAAAAAAAAAAAAAAAABHxWJhSg51JKMY7W/guL5F1etGnGUptRjFNyb2JI51ljKlTGVUkmoJ/s4cP6pf1fD45cVio0I+L2Xv2y+hQdV+BKyznLVrtwpaVOm9WrVUn2tbF2e0g4XJE5a5vRXBa5fobHAZPjTV3Zz3y4ckSpS4eJxJZqjz1XdnRVoLLBEank+lD1U+cut8TLeK2W7kV0CjpntrbIblrlHj7GYamHpz2xi+5JmWUDDOBXJ80SSIVfJi9R25S1rxLcBlLEYSXVbSv1oS1wlztu7UTNNrmi6cIVI2auvamRi7O8HZknqrPVHrcjZZp4mF49WaXXpt9aPNcVzNqcpaqYapGUZNNO8ZL4PzR0HIeVYYmnpK0ZxsqkeEuK5Pd+h28HjO17k/q9f7zRzcRh+z70dvQ2oAN5lAAAAAAAAAAAAAAAAAAAAAABGxmIVKnOo9kIylbjZbPI8btqweRz0yppSWHi+rGzqW9ae2MexLX2tcCJkrB9HHSkuvJfljwNbgoSrVnKXWblKUnxbd/izfzlqtx+B85Ko6s3Vl5e/etzrqKpwUEJSv2F8IFIIkU4lkY3PG7GNQDgSYwKSgWOGhXmIc4GCcSZOJHmimcS2LIc4mC7TuiVNEaaMk0XRM04RnBp7H4pkHJeMlhMQnrsnacV60Ht+a7CRQnZ8mYcrUtSmt2p9m7/eZKM3pOO6DivpezOlU5qUVKLTUldPc01dMyHnMzcb0mHcG7yoytz0Hrj/2XcejPp6VRVIKa4nFqQcJOL4AAFhAAAAAAAAAAAAAAAAAAAHns9K+jhHH+ZOMe5Xl5I9CeQz9fUoLjKb8EvmZsZK1CfS330/Zdh1erE02RIWjKXGVu5L9Se3eTIuSf3Uebl8WZ4M4EXaKOo92SqZKpkOmyRCRqgymSJkS2oYlMSmX5lYrsY5kaoZpyI82ZpstiR6hGqEibI02Y6hoiYyTVjp05LjF+P8A9IxKoeiu/wCJGnvY9kX5kVtHEShuqU5av6otNezSPfnNM13bG0fvVF7kzpZ3vhkr0Lcm/wBP9nMxqtUv4AAHQMgAAAAAAAAAAAAAAAAAAPJ59w/ZUZcJyX5o3/6nrDSZ14bpMJUsruDjNdkX1n+VyM+Ki5UZJci2hLLUizymSZ/s1ycvjfzM0XZ95AyRU9KPY18H5E2pql2nzifdR12tWSYyM0JkKMzLGZbGZBxJamHIjKYcyztCOUyzkYZyLZTMMpFUpE1ETkRpMvlIsM0nctSKEujqiu9kVIzYyehTl2WXfqJU+LPJGPNSOljaT4dI3+SS+LR0k8PmLh71atTdGCivvSd/gvae4O98Njahfm2/1+jmYx3q25JAAHQMgAAAAAAAAAAAAAAAAAAMdWClGUZK8ZJprimrNGQAHK8RRlhsRKLv1JNfei9j700zZTWlFNa965lc+cbhY1qcHNfWG9FwjrtB646b9V32La9I1+TsVbqS2eq+HI+bxOHdCpkez1XT+bfnidijV7WGZbrfr71JMZGVTKVqW9d6MFzK24vUuVmSekDqEbSGkM4ymeUzE5FlwRcrkrFSgMlKnpdhFK4bsX4env8AAg5Ur3korZHb94mYzEqEbL0muquHMszawcK+JtOUXoJTlByWnPXq6u1xvtfdvNMKTnJU47+9Sqc1FOcj2WbeB6DDwTXXn158U5bF3Ky7jcFI7Cp9PCChFRWyONKTk23xAAJEQAAAAAAAAAAAAAAAAAAc5z0z66Jzw+DknUV1UrqzUHvhT3OXGWxc3st+kLPBwcsJhZ2nsr1YvXDjSg/tcXu2bb28TkrJiaU6i1epDza4cjbQoK2efkjNVq/+YkbDZNnUvUm5aMm2223Obettt8eL2m9oV1dU2+tbVtbaXF8TFi8Ta8Y7d74GvoaqkW9719+rzJYzBwxVPLPyfFP3uuJDD4mVCd4/bn74cvun67B5QtaNTZul8yfKEZa1v3rYzzCquO3WvaS8NipR9CXatvij47E4Orhnaorx5rb+dH5XPoqGIp1voevLj/fI20qMlz7DG0+BZTyn9qPfF+TM8co03va7YvyMeWL4mi7LCsacnu8dRe8fT+0/yyMM8pw9WLfbZIZI8WMz5EqFBb9fLcYcVjYw1RtKXDcu35GvxGOnJa3ox4bPFkKVX7OvnuNGHoVKzy0Y38eC6v2/Aqq1YUleo/L+GTEV3rlJ3k/98DzFSeIo1lWVSUZqV4VIOzT4LlbVbZY3GPqOEY22uW/ektfxRdScKkGmr8YvcfW/DsBHCxvvJ7v9Lwv9+JwMXi5Yh8ktl+34+h77MvPKGNSpVrQxUVsWqFZJa5Q4PjHvWq9vYnzvi8LOhOM4SkrSThOLalCSd1rWxridYzGzrWNp9FVajiaa17Eq0Fq6SK48VzvsdlZiKGXvR29CNKrfuy3PYAAyGgAAAAAAAAAAAAAAAHlM/M4vqWH0ab/8itpKnv0I+tUtyvZc2tyZ6epUjCMpSajGKblJ6kkldtnBstZQnlHGzqa1GctGmn6lCN9FeF5PnJl+HpZ5XeyKq08sdN2Ysk4LpJdJO7im9utznvbb2+bNpjMTbqx273w5F9WUacEo6rK0V5mtudRa6swN8CqKSiVRcWEDZwWnBS4rX27zX5Qbgurqk9jWppcSTgK6i9GXoy38JEbKMb1JcrJd3+so7PvWLM2h6PJNKGJoQqW666tTRduutrts1qz7zNLJPCXirmvzJxGjXlSl6NWPV+/BNrxjpeCPcSwvI4mJwFBTacFz5eh1aGLquH1P31PLRyS/te7+pIhkqCV5XaSbd3ZJLa9R6FYXkanO2p0ODnbVKo1Tj+L0vdUiqngMPdJQWvPX1uTniqqTbl6L0Rzz6651pSeqE5PRi72jG/V1btVrm6pUjz8aZvVilChCW2co2iuadtJ+B3+zUUlFaHIc222yBlOelUstkFbv3/LuIsJOLunZoq2WsttZWIGzhKNWDTW30lwNNerha8J05OEoSUqc158d6a3psz0qrhJNd64rgT8VRjVp6tu2D4Mg9OhNO51nNnLcMdho1Y2jL0atO99Colrj2a00+DRuTh+Y2XHgsWlN2o1mqdZPZF36k/wt6+UpHcDmV6XZy02N1KeeIABSWAAAAAAAAAAAAHjfpLyn0OBdOLtPEzVPn0fpVO5paP4zm2QqFlKo9r1R7Ft9vwN/9LOL0sXSpbqVDS7Jzm7+ynA1lFdHRjxjBfma+bOlQjlpLx1MVV3m/AjYurpTfBal5mFFqLkzWjMy5FUzGmXXJHheVb4llxc9Bmw1d06kJx9KE4yXNxd7eR2OloVIRnF3jOMZRfGLV18Ti1zpmZuN6TBwTd5UpSpvsWuPuyS7jDjYXipe9f76mrCy1cT0Cpo8H9IuJTqUaS2QhKcvvTdo+Ci/zHudM5RnNi+lxdeV7pVHCPZDqavyt95nwcb1L8i3EytC3M1hRso2UbOoYSjKMMtZ4AyZgKutwe/Wu3eiEVjNxaa2p3IvVEkymWcPaeklqnt+8dfzDyv9awNOUnepS/ZVHtblBK0nzcXF9rZzDKFNTpNrclJf72G9+ibHuOJr0G+rVpqceGnCVnbm1P3TNiI5qXQvou07czrAAOabQAAAAAAAAAUbKmGrIA4pn/NyypiU9idGK5Loafm2XY59R9q+Jjz8g45SxD+06Ml2dFBfGLL8drpvuftOtD6YdEc+e8vM1qYlKxbcsTuy5lVjNAvuY0ytz08L7i5bcXALrnrMwsVadam36UIziucXZ/3LwPI3Nnm3idDF0nulJwfPTTS9rRXXjmptE6TtNM6ZicUoQqVHshCUn+GLfkchlJvW9betvi950LOnE6GEqcZ6MV+KSv7EznVzPg13W+b9P+l2KfeSLrlrYLbmwzAMoUbPD0t0tdirMdZ2sysJ3Ikjb4R6VNJ8GjHmRXdPKWFey9SUHzU6co28Wi7J/ofiZFyBf/8AQw1v/apeHSK/sK39MujJrdHfk7lSPRkSDknQAAAAAAAAABFxDJRGxCAOT/SdhNHEUqttVSm4PhpU5X+E14Gtwk+kox5x0X2rV+p77PPJTxOFnGKvOm+kpre5RTvFdsXJdrRzDI+JtJweyeuP3v18jo0JZqfQxVlafUsqtrVvvb5iBIyjS62ktmq/J8SOjQnfUpasX3Fy25W5MiXXBbcXB4XXLqdRwlGS2xlFrtTuvgY7i4B7HPXEJ0qEU9VSUprsjGy/vPH3NllrF6cMIr30MPFP72lKL/sRq7lOHjlppdfUuqvNNsrcXLbi5bcrsVuWti5bc8BSsrxZGhMlMwYWjeV3si/F8CE3bUnFX0N5QehSTe6Lb7dpZmXQdTKOH4QlOcuSjCTT8dHxImNxPUUN8nr7D1v0Z5Nf7XESW39nT5pNOo/FRXcyucstJvmThG80jpWHZMIeHRMOYbgAAAAAAAAAY6sboyAA1deByjPfILw9V16SfQ1JXlb+HVb1rkm9a53XA7HVpGsxuEhUhKE4qcJpqUZK6knuZbSqunK6IVIKascfwGKVRaMradtaeyS4lK+Ca1w1rhvXzNlnDmdVoSdTDqVWle+irurT7tslzWvjxNJh8qTjqmtO2/ZL9Towaks0DFJNO0i2UWtqa7VYpc2EMpUntbjylF+Vy76xQfrU++3mSzPkRsa24ubLpqHGn7g6ahxp+4M3gMprbi5sulocafujpaHGn7ozeAsa5y9mwpc2XS0ONP3R0tDjT90ZvAZTWXKXNp0tDjT90p0tDjS90ZvAZTWXLoQlLYm+xGy+s0V60O63kY55SprY3LsXzF3yFiyjgHtm7clt8TDiJxg5Lm7JdpZXypN6orQXHayVkXN3E4uScYuFN7a1RPRt/Sts32auaIySteT0JLlEi5JybVxdeNOnteuc7XjCnvk/Jb3Y7RkvAwo06dOmrQpxSit/Nvi27t82Rcg5DpYSmqdOO2znOWudSXFvy2I31GkYK9btHpsa6VPJ1MlKJmKJFSgtAAAAAAAAAAAABhqUrmYAGsq4c0OVc28LiG3UpRc3/EjeFTvlHb33PXuKZhnh0z1Np3R40nucwxeYMNfR1pw5ThGa9mia2pmNWWytTfbCcfmdYqYUjTwvIuWJqriVujB8DlMszMQvXo+//iWPNCv/ADKXv/4nUZ4TkYJYTke/NVef4HYQOZvNKv8Abpe/8in/ABSv9ul7/wAjpMsHyLXg+Q+aq8/wedhA5x/xSv8Abpe/8iqzTr/zKXv/ACOjfU+RcsHyHzVXn+B2EDnKzRr/AG6Xv/IvjmbiH/Eo+/8A4nRo4TkZ4YTkPmqvP8HvYQObwzIrvbVpLsU35In4bMC/7zESa4QpqL8ZN/A6BDC8iVTwvI8eJqvj+EOxhyPL5MzQwlJpqlpyVutWem78dF9VPsR6Wjh+RMhh7GeMUimUnJ3bLEktEYqdGxmSKg8PQAAAAAAAAAAAAAAAAAAAAAWOCZeADC6CLHhUSQAQ3hC36oTgAQfqhcsITAARlhUXRoIzgAsUEi4qAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD//2Q==" alt="Card image cap">
                                <div class="card-body">

                                <?php
                                $rollno = $_SESSION['RollNo'];
                                $sql="select * from MYLMS.user where RollNo='$rollno'";
                                $result=$conn->query($sql);
                                $row=$result->fetch_assoc();

                                $name=$row['Name'];
                                $Gender=$row['Gender'];
                                $email=$row['EmailId'];
                                $mobno=$row['MobNo'];
                                ?>    
                                    <i>
                                    <h1 class="card-title"><center><?php echo $name ?></center></h1>
                                    <br>
                                    <p><b>Email ID: </b><?php echo $email ?></p>
                                    <br>
                                    <p><b>Mobile number: </b><?php echo $mobno ?></p>
                                    </b>
                                </i>

                                </div>
                            </div>
                        <br>
                        <a href="edit_admin_details.php" class="btn btn-primary">Edit Details</a>
                        </center>               
                    </div>
                    
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
<div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2023 Library Management System </b>All rights reserved.
            </div>
        </div>
        
        <!--/.wrapper-->
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>

</html>


<?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>