<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Blank Page
            <small>Subheading</small>
        </h1>
              <!-- <?php
              if($database->connection){           /*  if connection is ok echo true */
                 echo "true";
              }
              ?> -->
   
             <?php
             
                $sql = "SELECT * FROM users WHERE id=1";
                $result = $database->query($sql);                   /* Fetch data from database */
                $user_find = mysqli_fetch_array($result);

                echo $user_find['username'];


             ?>

        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Blank Page
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

</div>