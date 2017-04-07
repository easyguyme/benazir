<?PHP

include('header.php');

include("dbcon.php");
include("recover_password_class.php");
?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="box-body">
            <div class="alert alert-danger alert-dismissible">

                <h4><i class="icon fa fa-info"></i> Alert!</h4>
                <p style="text-align: center">
<?PHP
    $RecoverPassword = new RecoverPassword($conn);
$RecoverPassword->generate_new_password();
?>
</p>
</div>


</div></div>
<div class="col-md-2"></div>
</div>

