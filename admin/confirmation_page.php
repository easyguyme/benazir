<?PHP
include('header.php');
include("dbcon.php");
include("php_form_validator.php");

$RegistrationValidator				= new RegistrationValidator($conn);
$is_user_ip_banned					= $RegistrationValidator->is_user_ip_banned();

?>
<?PHP if(!$is_user_ip_banned): ?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="box-body">
            <div class="alert alert-danger alert-dismissible">

                <h4><i class="icon fa fa-info"></i> Alert!</h4>
               <p style="text-align: center"><?PHP   $RegistrationValidator->confirm_account($conn); ?></p>
            </div>


        </div></div>
    <div class="col-md-2"></div>
</div>




<?PHP endif; ?>