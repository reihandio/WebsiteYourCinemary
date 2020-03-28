<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title?></title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
</head>
<body>



<div class="container" style="margin-top: 20px">
    <div class="col-md-12">
        <h2 style="text-align: center;margin-bottom: 30px"> Data Question </h2>
        <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th> ID Question </th>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Phone </th>
                    <th> Question </th>
                    <th> Date </th>
                    <th style="width: 125px;"><p>Action</p></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data_question as $question) {
                ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $question->name; ?></td>
                    <td><?php echo $question->email; ?></td>
                    <td><?php echo $question->phone; ?></td>
                    <td><?php echo $question->question; ?></td>
                    <td><?php echo $question->date; ?></td>
                    <td style="text-align: center;">
                        <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $question->id_question; ?>)"><i class="glyphicon glyphcion-pencil"></i></button>
                        <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $question->id_question; ?>)"><i class="glyphicon glyphcion-pencil"></i></button>
                    </td>   
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>







<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
     $('#table_id').DataTable();
 });
 </script>
 </body>
 </html>