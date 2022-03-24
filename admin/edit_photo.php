<?php include("includes/header.php"); ?>


<!-- if is not log in -->
<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>  


<?php

// $photos = Photo::find_all(); /* this will return array of objects */

?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
           
            <?php include("includes/top_nav.php"); ?>

          <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
          
          <?php include("includes/side_nav.php"); ?>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">

                 <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                               Photos
                                <small>Subheading</small>
                            </h1>
                           
                           <div class="col-md-12">

                               <div class="form-group">
                                 <input type="text" name="title" class="form-control">
                               </div>

                               <div class="form-group">
                                 <label for="caption">Caption</label>
                                 <input type="text" name="caption" class="form-control">
                               </div>

                               <div class="form-group">
                               <label for="caption">Alternate Text</label>
                                 <input type="text" name="alternate_text" class="form-control">
                               </div>

                               <div class="form-group">
                               <label for="caption">Description</label>
                               <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                               </div>
                              
                           </div>


                        </div>
                    </div>
                    <!-- /.row -->

                </div>
    <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>