<link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="css/fullcalendar.css"/>
    <link rel="stylesheet" href="css/matrix-style.css"/>
    <link rel="stylesheet" href="css/matrix-media.css"/>
    <link rel='stylesheet' href="css/manageProduct.css">
    
    <!--Font-Awesome  -->

    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/jquery.gritter.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>   
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


<?php 
include "header.php";
?>

<!--main-container-part-->
<div id="content">
    
      <!--Linker  -->
        <div id="content-header">
        <div id="breadcrumb"><a href="manageProduct.php" class="tip-bottom"><i class="icon-home"></i>
            ManageProduct</a></div>
    </div>

    

    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">



    <!--SEARCH BAR  -->
       
    
    
    
    <!-- MANAGE PRODUCT TABLE  -->
        
        <table class="table table-responsive container text-center" >
        <thead style="background-color: rgba(214, 221, 221, 0.256);">
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Availibility</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>yes</td>
            <td>
              <div class="row">
                <div class="col-6 ">
                  <button class="action-type-button">
                  <i class="fa fa-trash " aria-hidden="true"></i>
                </button>
               
                </div>
                <div class="col-6">
                  <button class="action-type-button">
                  <i class="fa fa-pencil "></i>
                </button>
                </div>
              </div>
            </td>
          </tr>
             
        </tbody>
      </table>
        </div>

    </div> 
    
</div>
<!--end-main-container-part-->

<!--Footer-part-->

<?php

include "footer.php";
?>