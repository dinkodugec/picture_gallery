<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Blank Page
            <small>Subheading</small>
        </h1>
              <?php
               /*  $user = new User();
                $user->username = "Ljuba";
                $user->password = "evajuremarin";
                $user->first_name = "Ljubica";
                $user->last_name = "Dugec";

                $user->create(); */

           /*    $user = User:: find_user_by_id(1);
              $user->last_name = "WILLIAMS";
              $user->update(); */

              $user = User:: find_user_by_id(15);
              $user->delete();


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