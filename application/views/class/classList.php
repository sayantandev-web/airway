<?php $currency_symbol = $this->customlib->getSchoolCurrencyFormat(); ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-mortar-board"></i> <?php echo $this->lang->line('academics'); ?>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <?php if ($this->rbac->hasPrivilege('class', 'can_add')) { ?>
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $this->lang->line('add_course'); ?></h3>
                    </div>
                    <form id="form1" action="<?php echo site_url('classes'); ?>" method="post" accept-charset="utf-8">
                        <div class="box-body">
                            <?php
                            if ($this->session->flashdata('msg')) {
                                echo $this->session->flashdata('msg');
                                $this->session->unset_userdata('msg');
                            }
                            if (isset($error_message)) {
                                echo "<div class='alert alert-danger'>" . $error_message . "</div>";
                            }
                            ?>
                            <?php echo $this->customlib->getCSRF(); ?>
                            <div class="form-group">
                                <label for="exampleInputEmail1"><?php echo $this->lang->line('course'); ?></label><small
                                    class="req"> *</small>
                                <input autofocus="" id="class" name="class" placeholder="" type="text"
                                    class="form-control" value="<?php echo set_value('class'); ?>" />
                                <span class="text-danger"><?php echo form_error('class'); ?></span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right"><?php echo $this->lang->line('save'); ?></button>
                        </div>
                    </form>
                </div>
            </div>
            <?php } ?>
            <div class="col-md-<?php if ($this->rbac->hasPrivilege('class', 'can_add')) { echo "8"; } else { echo "12"; } ?>">
                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"><?php echo $this->lang->line('course_list'); ?></h3>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive mailbox-messages overflow-visible">
                            <div class="download_label"><?php echo $this->lang->line('course_list'); ?></div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th><?php echo $this->lang->line('course'); ?></th>
                                        <th class="text-right noExport"><?php echo $this->lang->line('action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($vehroutelist as $vehroute) { ?>
                                    <tr>
                                        <td class="mailbox-name">
                                            <?php echo $vehroute->class; ?>
                                        </td>
                                        <td class="mailbox-date pull-right">
                                            <?php if ($this->rbac->hasPrivilege('class', 'can_edit')) { ?>
                                            <a href="<?php echo base_url(); ?>classes/edit/<?php echo $vehroute->id; ?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="<?php echo $this->lang->line('edit'); ?>"> <i class="fa fa-pencil"></i></a>
                                            <?php }
                                            if ($this->rbac->hasPrivilege('class', 'can_delete')) { ?>
                                            <a href="<?php echo base_url(); ?>classes/delete/<?php echo $vehroute->id; ?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="<?php echo $this->lang->line('delete'); ?>" onclick="return confirm('<?php echo $this->lang->line('deleting_course'); ?>');"><i class="fa fa-remove"></i>
                                            </a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"></div>
        </div>
    </section>
</div>