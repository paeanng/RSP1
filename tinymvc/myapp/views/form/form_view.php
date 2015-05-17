<?php require 'layout/_header.php'; ?>

<?php require 'user/layout/_nav.php'; ?>

<h1>FORM#FORM</h1>

            
    <form name="update" action="form1" method="post" >

           <div class="form-group">

                <label for="input1">Input One</label>

                <input type="text" class="form-control"  name="input1" id="input1" placeholder="" value="" >

            </div>
        
            <div class="form-group">

                <label for="input2">Input Two</label>

                <input type="text" class="form-control"  name="input2" id="input2" placeholder="" value="" >

            </div>
        
            <div class="form-group">

                <textarea rows="8" class="form-control" name="form1-comment" id="form1-comment"></textarea>

            </div>

            <button type="submit" name="form1" id="form1" class="btn btn-default">Submit</button>

    </form>

<?php require 'layout/_footer.php'; ?>