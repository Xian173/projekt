<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $header ?>
            <small><?php echo $header2 ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
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
                <th>Address</th>
                <th>Operations</th>
            </tr>
            <?php foreach ($agentura as $agentura_item): ?>
            <tr>
                <td><?php echo $agentura_item['ID']; ?></td>
                <td><?php echo $agentura_item['Name']; ?></td>
                <td><?php echo $agentura_item['Address']; ?></td>
                <td><a class="btn btn-warning btn-xs href=<?php echo base_url()."index.php/Agentura/delete_agency_id/".$agentura_item['ID']; ?>" onclick="return confirm('Are you sure you want to delete selected row?')">Delete</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
