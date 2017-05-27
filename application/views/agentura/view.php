<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $header ?>
            <small><?php echo $header2 ?></small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <div id="container">
                    <?php echo form_open('Agentura/insertAgency'); ?>
                    <h1>Insert new data into Agency</h1><hr/>
                    <?php if (isset($message)) { ?>
                        <CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
                    <?php } ?>
                    <?php echo form_label('Name of agency :'); ?> <?php echo form_error('dname'); ?><br />
                    <?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?><br />

                    <?php echo form_label('Agency address :'); ?> <?php echo form_error('daddress'); ?><br />
                    <?php echo form_input(array('id' => 'daddress', 'name' => 'daddress')); ?> <br /><br />

                    <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
                    <?php echo form_close(); ?><br/>
                    <div id="fugo">

                    </div>
                </div>
