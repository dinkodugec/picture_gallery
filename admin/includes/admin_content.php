<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Blank Page
            <small>Subheading</small>
        </h1>
              <?php
               /*   $user = new User();
                $user->username = "Ljuba";
                $user->password = "evajuremarin";
                $user->first_name = "Ljubica";
                $user->last_name = "Dugec";

                $user->create();  */
 
               $user = User:: find_user_by_id(18);
               $user->username = "Eva";
               $user->password = "evajuremarin";
               $user->first_name = "Eva";
               $user->last_name = "Dugec";
               $user->update();  

             /*  $user = User:: find_user_by_id(16);
              $user->delete();  */
 
                      /*   $user = User:: find_user_by_id(6);
                        $user->username = "WHATEVER";
                        $user->save(); */
               
             /*   $user = new User();
               $user->username = "Fedor del nasi";
               $user->save() 
          */
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