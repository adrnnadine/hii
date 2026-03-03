<?php
session_start();

// check if user is logged in
if (!isset($_SESSION['username'])) {
    // redirect to login page if not logged in
    header(header: "Location: login.php");
    exit();
}

$name = $_SESSION['username'];
?>

<html>
    <head>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <style>
            body {
                overflow-x: hidder;
            }
            .sidebar{
                height:100vh;
                background-color: grey;
            }
            .sidebar a{
                color: white;
                text-decoration: none;
                display: block;
                padding: 15px;
            }
            .sidebar a:hover{
                background-color: lightblue;
            }
            .content{
                padding :20px;
            }
            </style>
</head>
<body>
    <div class='container-fluid">
    <div class="row">
        <!-- ini untuk sidebar -->
    <div class="col-md-2 sidebar p-0">
        <a href="#">dashboard</a>
        <a href="#">profile</a>
        <a href="#">logout</a>
    </div>
        <!-- akhir dari sidebar -->
         <!-- ini untuk main content -->
          <div class="col-md-10 content">
            <?php
            echo " selamat datang " . $username ;
            ?>
            </div>
            <!--akhir dari main content -->

     </div>
   </div>
</body>
</html>