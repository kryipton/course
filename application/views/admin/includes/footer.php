            </div>
        </div>
    </div>
</div>


<!--/.wrapper-->
<div class="footer" style="position: absolute;width: 21%;">
    <div class="container">
        <b class="copyright">&copy; Admin Panel</b> Bütün Haqları Qorunur.
    </div>
</div>


<script src="<?php echo base_url("public/admin/scripts/")?>jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url("public/admin/scripts/")?>sweetalert.min.js"></script>
<script src="<?php echo base_url("public/admin/scripts/")?>iziToast.min.js"></script>

<script src="<?php echo base_url("public/admin/scripts/")?>popper.min.js"></script>
<script src="<?php echo base_url("public/admin/scripts/")?>/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo base_url("public/admin/scripts/datatables/jquery.dataTables.js")?>"></script>

<!--<script src="--><?php //echo base_url("public/admin/")?><!--scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>-->
<script src="<?php echo base_url("public/admin/")?>scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src="<?php echo base_url("public/admin/")?>scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="<?php echo base_url("public/admin/scripts/")?>materialize.min.js"></script>
<script src="<?php echo base_url("public/admin/scripts/")?>custom.js"></script>

</body>
</html>


<!--melumat alerti-->
<?php if($this->session->flashdata("success")){ ?>
                <script>
                    iziToast.success({
                        icon: 'icon-person',
                        message: '<?php echo $this->session->flashdata("success")?>',
                        position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                        // progressBarColor: 'rgb(0, 255, 184)',
                    });
                </script>
            <?php }?>
<!--melumat alerti-->
<?php if($this->session->flashdata("alert")){ ?>
                <script>
                    iziToast.warning({
                        icon: 'icon-person',
                        message: '<?php echo $this->session->flashdata("alert")?>',
                        position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                        // progressBarColor: 'rgb(0, 255, 184)',
                    });
                </script>
            <?php }?>