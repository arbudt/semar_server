<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?php echo!empty($content['title']) ? $content['title'] : ''; ?>
        <small><?php echo!empty($content['title_desc']) ? $content['title_desc'] : ''; ?></small>
    </h1>
    <ol class="breadcrumb">
        <?php
        if (!empty($content['bread_crumb'])) {
            $i = 0;
            while ($i < count($content['bread_crumb'])) {

                if ($i == count($content['bread_crumb']) - 1) {
                    echo '<li class="active">' . $content['bread_crumb'] [$i]['label'] . '</li>';
                } else {
                    echo '<li><a href="' . $content['bread_crumb'] [$i]['link'] . '"><i class="fa fa-dashboard"></i> ' . $content['bread_crumb'] [$i]['label'] . '</a></li>';
                }
                $i++;
            }
        }
        ?>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <?php
        if (!empty($page)) {
            $this->load->view($page);
        } else {
            
        }
    ?>
</section><!-- /.content -->