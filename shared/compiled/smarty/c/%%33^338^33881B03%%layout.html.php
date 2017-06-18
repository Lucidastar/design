<?php /* Smarty version 2.6.18, created on 2017-06-16 17:57:23
         compiled from layout.html */ ?>

<table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0" id="pm_main_table">
    <tr>
        <td>
            <table width="100%" cellspacing="0" cellpadding="0" border="0" >
                <tr>
                    <td <?php  if (isset($_SESSION["TRACKER_JAVASCRIPT"])) { echo "id=\"trackerContainer\""; }  ?> width="100%" align="center">
                    <?php 
                    global $G_TEMPLATE;
                    if ($G_TEMPLATE != '') G::LoadTemplate($G_TEMPLATE);

                    if (isset($_SESSION["TRACKER_JAVASCRIPT"])) {
                    echo $_SESSION["TRACKER_JAVASCRIPT"];

                    unset($_SESSION["TRACKER_JAVASCRIPT"]);
                    }
                     ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr height="100%">
        <td height="100%">
            <div class="Footer">
                <div class="content"><?php echo $this->_tpl_vars['footer']; ?>
</div>
            </div>
        </td>
    </tr>
</table>
