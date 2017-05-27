<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $header ?>
            <small><?php echo $header2 ?></small>
            <a style="float: right" class="btn btn-warning" href="<?php echo base_url()."index.php/Customer/insert"; ?>" >Insert new record</a>
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
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Operations</th>
                    </tr>
                    <?php foreach ($customer as $customer_item): ?>
                        <tr>
                            <td><?php echo $customer_item['ID']; ?></td>
                            <td><?php echo $customer_item['Name']; ?></td>
                            <td><?php echo $customer_item['Surname']; ?></td>
                            <td><?php echo $customer_item['Address']; ?></td>
                            <td><?php echo $customer_item['Phone']; ?></td>
                            <td><a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/Customer/delete_customer_id/".$customer_item['ID']; ?>" onclick="confirm('Are you sure you want to delete selected row?')">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
