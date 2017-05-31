<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $header ?>
            <small><?php echo $header2 ?></small>
            <a style="float: right" class="btn btn-warning" href="<?php echo base_url()."index.php/Lector/insert"; ?>" >Insert new record</a>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo $title ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Operations</th>
                    </tr>
                    <?php foreach ($lector as $lector_item): ?>
                        <tr>
                            <td><?php echo $lector_item['ID']; ?></td>
                            <td><?php echo $lector_item['Name']; ?></td>
                            <td><?php echo $lector_item['Surname']; ?></td>
                            <td><?php echo $lector_item['Phone']; ?></td>
                            <td><?php echo $lector_item['Email']; ?></td>
                            <td><a class="btn btn-default btn-xs" href="<?php echo base_url()."index.php/Lector/show_lector_id/".$lector_item['ID']; ?>" >Edit</a>
                                <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/Lector/delete_lector_id/".$lector_item['ID']; ?>" onclick="confirm('Are you sure you want to delete selected row?')">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
