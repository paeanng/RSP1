<?php require 'layout/_header.php'; ?>

<?php require 'user/layout/_nav.php'; ?>



<h1>EDIT</h1>



<div class="container">
    <div class="row">
       
            
            <form name="update" action="edit" method="post" >
                
                   <div class="form-group">

                        <label for="fname">First Name</label>

                        <input type="text" class="form-control"  name="fname" id="fname" placeholder="<?=$fname?>" value="<?=$fname?>" >

                    </div>
                
                    <div class="form-group">

                        <label for="lname">Last Name</label>

                        <input type="text" class="form-control" name="lname" id="lname" placeholder="<?=$lname?>" value="<?=$lname?>" >

                    </div>
                
                    <div class="form-group">

                        <label for="lname">Email</label>

                        <input type="text" class="form-control" name="email" id="email" placeholder="<?=$email?>" value="<?=$email?>" >

                    </div>

                    <button type="submit" name="update" id="update" class="btn btn-default">Update</button>
                
            </form>
    
    </div>
</div>
    

<?php require 'layout/_footer.php'; ?>