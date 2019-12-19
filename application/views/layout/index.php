<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    </head>
    <body>
        <?php 
            // echo "<pre>";
            // print_r($getdata);
            // echo "</pre>";
         ?>
        <h1>Hellow Codeigniter</h1>
        <table width="80%" border="2" style="text-align: center;">
            <tr>
                <th>User Id</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Password</th>
                <th>Delete Data</th>
                <th>Edit Data</th>
            </tr>
            <?php   
            foreach($getdata as $showdata){
                $id = $showdata->User_id;


             ?>
           <tr>
                    <td><?= $showdata->User_id ?></td>
                    <td><?= $showdata->User_Name ?></td>
                    <td><?= $showdata->User_Email?></td>
                    <td><?= $showdata->User_Password?></td>
                    <td><a href="index.php/mycontroller/delete/<?= $id ?>" class="btn btn-danger">Delete</a></td>
                    <td><a href="index.php/mycontroller/edit/<?= $id ?>" class="btn btn-primary">Edit</a></td>
            </tr>
            <?php   } ?>
        </table>
    </body>
</html>