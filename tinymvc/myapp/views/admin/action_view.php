<?php require 'layout/_header.php'; ?>

<?php require 'admin/layout/_nav.php'; ?>


    <table class="table">

        <thead>

            <tr>

                <th>Row</th>

                <th>First Name</th>

                <th>Last Name</th>

                <th>Email</th>

            </tr>
            
            
            <?php for($i=0;$i<count($result);$i++) : ?>
                 <tr>
                     

                    <td><?=$result[$i]['empno'];?></td>

                    <td><?=$result[$i]['status'];?></td>

                    <td><?=$result[$i]['input1'];?></td>

                </tr>
            <?php endfor; ?>

        </thead>

        <tbody>
            
        </tbody>

        
    </table>


<?php require 'layout/_footer.php'; ?>