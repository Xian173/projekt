<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $header ?>
            <small><?php echo $header2 ?></small>
            <a style="float: right" class="btn btn-warning" href="<?php echo base_url()."index.php/Courses/insert"; ?>" >Insert new record</a>
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
                        <th>Prize</th>
                        <th>Start of course</th>
                        <th>End of course</th>
                        <th>Operations</th>
                    </tr>
                    <?php foreach ($course as $course_item): ?>
                        <tr>
                            <td><?php echo $course_item['ID']; ?></td>
                            <td><?php echo $course_item['Name']; ?></td>
                            <td><?php echo $course_item['Prize']; ?></td>
                            <td><?php echo $course_item['Start_Date']; ?></td>
                            <td><?php echo $course_item['End_Date']; ?></td>
                            <td><a class="btn btn-default btn-xs" href="<?php echo base_url()."index.php/Courses/show_course_id/".$course_item['ID']; ?>" >Edit</a>
                                <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/Courses/delete_course_id/".$course_item['ID']; ?>" onclick="confirm('Are you sure you want to delete selected row?')">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
