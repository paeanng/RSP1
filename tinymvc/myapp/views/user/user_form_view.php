<?php require 'layout/_header.php'; ?>

<?php require 'user/layout/_nav.php'; ?>



<h1>USER#FORM</h1>

<h1><?=$email?></h1>

<h1><?=$fname?></h1>


<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="edit" method="post" >
                
                   <div class="form-group">

                        <label for="email">Email</label>

                        <input type="email" class="form-control" id="email" placeholder="email" value="" >

                    </div>

                    <div class="form-group">

                        <label for="pwd">Password</label>

                        <input type="password" class="form-control" id="pwd" placeholder="Password" value="" >

                    </div>

                    <button type="submit" class="btn btn-default">Update</button>
                
            </form>
        </div>
    </div>
</div>
    

<?php require 'layout/_footer.php'; ?>