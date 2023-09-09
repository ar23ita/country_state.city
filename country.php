<?php
include "ascon.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Country State City</title>
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
            body{
                background: #ccc;
            }
            form{
                background: #fff;
                padding: 30px;
                margin-top: 30px;
            }
            form h3{
                margin-top: 0;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
               

                <form action="" name="frm" method="post">
                    <h3>Country State City Dropdown</h3>
                    <section class="courses-section">
                        <div class="row">
                        <div class="col-md-4">
                     <label for="country">Country</label>
                      <select name="country" id="country" class="form-control">
                               <option>Select Country</option>
                                 <?php 
                         $q = mysqli_query($conn, "SELECT * FROM country"); 
                                 while ($country = mysqli_fetch_assoc($q)) {
                                ?>
                             <option value="<?php echo $country['country_id']; ?>"><?php echo $country['country_name']; ?></option>
                                            <?php
                                             }
                                        ?>
                                 </select>
                              </div>


                            <div class="col-md-4">
                                <label for="state">State</label>
                                <select name="state" id="state"  class="form-control"></select>
                               
                            </div>



                            <div class="col-md-4">
                                <label for="city">City</label>
                                <select name="city" id="city" class="form-control"></select>
                            </div>

                        </div>

                        </div>
                    </section>
                </form>


  


                          
            </div>
        </div>




        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#country").change(function(){
                      var cid = $(this).val(); 
                      $.ajax({
                        url: "state.php",
                        method: "POST",
                        //cid is assign to counid
                        data: {counid: cid},
                        success: function(res){
                            $("#state").html(res);
                        }
                      }) 
                })
                $("#state").change(function(){
                      var sid = $(this).val(); 
                      $.ajax({
                        url: "city.php",
                        method: "POST",
                        //sid is assign to counid
                        data: {stateid: sid},
                        success: function(res){
                            $("#city").html(res);
                        }
                      }) 
                })
            })
            </script>
        </body>
</html>