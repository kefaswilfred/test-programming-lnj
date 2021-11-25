<!doctype html>
<html class="no-js" lang="en">

<?php $this->load->view('template/head_datatable'); ?>
<style type="text/css">
    .swal2-popup {
      font-size: 1.6rem !important;
  }
</style>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <?php $this->load->view('template/menu'); ?>

    <!-- Mobile Menu start -->
    <!-- Mobile Menu end -->

    <!-- Breadcome start-->
    <div class="breadcome-area mg-t-40 mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="breadcome-heading">
                            <h2>Data Table</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><span class="bread-slash">Data /</span>
                            </li>
                            <li><span class="bread-blod">Data Table</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->

    <?php 
        if($this->session->flashdata('success'))
        {
    ?>
            <div class="container">
                <div class="alert alert-success alert-success-style1">
                    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                        <span class="icon-sc-cl" aria-hidden="true">×</span>
                    </button>
                    <span class="adminpro-icon adminpro-checked-pro admin-check-sucess"></span>
                    <p><strong>Berhasil!</strong> Berhasil menambah data</p>
                </div>
            </div>
    <?php
        } 
    ?>
    <div class="container">
        <div class="row">  
            <div class="col-lg-3">
                <div class="income-dashone-total shadow-reset nt-mg-b-30 res-mg-t-30">
                    <div class="income-title" style="background-color: #EB8FA6">
                        <div class="main-income-head">
                            <h2>Draft</h2>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter" id="draft">0</span></h3>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="income-dashone-total shadow-reset nt-mg-b-30 res-mg-t-30">
                    <div class="income-title" style="background-color: #FAA6A0">
                        <div class="main-income-head">
                            <h2>Submitted</h2>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter" id="submitted">0</span></h3>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="income-dashone-total shadow-reset nt-mg-b-30 res-mg-t-30">
                    <div class="income-title" style="background-color: #FFF1DA">
                        <div class="main-income-head">
                            <h2>Open</h2>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter" id="open">0</span></h3>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="income-dashone-total shadow-reset nt-mg-b-30 res-mg-t-30">
                    <div class="income-title" style="background-color: #B0E5C6">
                        <div class="main-income-head">
                            <h2>Responded</h2>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter" id="responded">0</span></h3>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="income-dashone-total shadow-reset nt-mg-b-30 res-mg-t-30">
                    <div class="income-title" style="background-color: #907ECD">
                        <div class="main-income-head">
                            <h2>Verified</h2>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter" id="verified">0</span></h3>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="income-dashone-total shadow-reset nt-mg-b-30 res-mg-t-30">
                    <div class="income-title" style="background-color: #B991D9">
                        <div class="main-income-head">
                            <h2>Closed</h2>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter" id="closed">0</span></h3>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="income-dashone-total shadow-reset nt-mg-b-30 res-mg-t-30">
                    <div class="income-title" style="background-color: #B9EBFA">
                        <div class="main-income-head">
                            <h2>Re-Open</h2>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter" id="re-open">0</span></h3>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="income-dashone-total shadow-reset nt-mg-b-30 res-mg-t-30">
                    <div class="income-title" style="background-color: #ADD3FA">
                        <div class="main-income-head">
                            <h2>Voided</h2>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter" id="voided">0</span></h3>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div id="pie"></div>
        </div>
        <div class="col-lg-6">
            <div id="column"></div>
        </div>
    </div>
    <hr>
    <!-- Static Table Start -->
    <div class="data-table-area mg-b-40">
        <div class="container" style="background-color: white;">
            <div class="row">
                <div class="col-lg-12" style="margin-top: 1%;">       
                    <table id="example" class="table table-striped" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>CARP Code</th>
                                <th>Category</th>
                                <th>Initiator Div</th>
                                <th>Recipient Div</th>
                                <th>Due Date</th>
                                <th>Stage</th>
                                <th>Status</th>
                                <th style="text-align: center; width: 15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->
    <div id="data_input_modal" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header header-color-modal bg-color-1">
                    <h4 class="modal-title">Edit Data</h4>
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                </div>
                <form id="data_input_form_modal" method="POST" enctype="multipart/form-data">
                    <div class="modal-body" style="text-align: left">
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="login2 pull-left pull-left-pro">Carp Code</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="carp_code" id="carp_code" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="login2 pull-left pull-left-pro">Category</label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="chosen-select-single mg-b-20">
                                        <select class="select2_demo_3 form-control" name="category" id="category" style="width:100%">
                                            <?php
                                                foreach ($master_category as $category) 
                                                {
                                            ?>
                                                    <option value="<?= $category->id_category ?>"><?= $category->nama_category ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="login2 pull-left pull-left-pro">Initiator</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="initiator" id="initiator" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="login2 pull-left pull-left-pro">Initiator Div</label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="chosen-select-single mg-b-20">
                                        <select class="select2_demo_3 form-control" name="initiator_div" id="initiator_div" style="width:100%">
                                            <?php
                                                foreach ($master_initiator_div as $initiator_div) 
                                                {
                                            ?>
                                                    <option value="<?= $initiator_div->id_initiator_div ?>"><?= $initiator_div->nama_initiator_div ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="login2 pull-left pull-left-pro">Initiator Branch</label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="chosen-select-single mg-b-20">
                                        <select class="select2_demo_3 form-control" name="initiator_branch" id="initiator_branch" style="width:100%">
                                            <option value="SUB">SUB</option>
                                            <option value="JKT">JKT</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="login2 pull-left pull-left-pro">Recipient</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="recipient" id="recipient" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="login2 pull-left pull-left-pro">Recipient Div</label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="chosen-select-single mg-b-20">
                                        <select class="select2_demo_3 form-control" name="recipient_div" id="recipient_div" style="width:100%">
                                            <?php
                                                foreach ($master_recipient_div as $recipient_div) 
                                                {
                                            ?>
                                                    <option value="<?= $recipient_div->id_recipient_div ?>"><?= $recipient_div->nama_recipient_div ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="login2 pull-left pull-left-pro">Recipient Branch</label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="chosen-select-single mg-b-20">
                                        <select class="select2_demo_3 form-control" name="recipient_branch" id="recipient_branch" style="width:100%">
                                            <option value="SUB">SUB</option>
                                            <option value="JKT">JKT</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="login2 pull-left pull-left-pro">Verified By</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="verified_by" id="verified_by" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="login2 pull-left pull-left-pro">Due Date</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="date" class="form-control" name="due_date" id="due_date">
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="login2 pull-left pull-left-pro">Effectiveness</label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="chosen-select-single mg-b-20">
                                        <select class="select2_demo_3 form-control" name="effectiveness" id="effectiveness" style="width:100%">
                                            <option value="Effective">Effective</option>
                                            <option value="Not Effective">Not Effective</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="login2 pull-left pull-left-pro">Status Date</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="date" class="form-control" name="status_date" id="status_date">
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="login2 pull-left pull-left-pro">Stage</label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="chosen-select-single mg-b-20">
                                        <select class="select2_demo_3 form-control" name="stage" id="stage" style="width:100%">
                                             <?php
                                                foreach ($master_stage as $stage) 
                                                {
                                            ?>
                                                    <option value="<?= $stage->id_stage ?>"><?= $stage->nama_stage ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="login2 pull-left pull-left-pro">Status</label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="chosen-select-single mg-b-20">
                                        <select class="select2_demo_3 form-control" name="status" id="status" style="width:100%">
                                            <option value="Open">Open</option>
                                            <option value="Closed">Closed</option>
                                            <option value="Canceled">Canceled</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="login-btn-inner">
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-9">
                                        <div class="login-horizental cancel-wp pull-left">
                                            <a data-dismiss="modal" href="#" class="btn btn-custon-rounded-four btn-danger">Cancel</a>
                                            <button class="btn btn-custon-rounded-four btn-info" type="submit" id="submit_btn">Submit</button>
                                            <input type="hidden" name="id_data" id="id_data">
                                            <input type="hidden" name="action" id="action">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <?php 
        $this->load->view('template/footer');
        $this->load->view('template/js_datatable'); 
    ?>

    <?php $this->load->view('data/datatable_script'); ?>

</body>

</html>