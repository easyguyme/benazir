<?php
/**
 * Created by PhpStorm.
 * User: Imran
 * Date: 2/3/2017
 * Time: 5:56 PM
 */
include ('header.php');

include ('recover_password_class.php');

$RecoverPassword = new RecoverPassword($conn);

?>
<div class="row">
    <div class="col-md-12"></div>
</div>
<div class="row">
    <div class="col-md-4"></div>

    <div class="col-md-4">

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Reset Password</h3>
            </div>
            <form  method="post">
                <div class="box-body">

                    <div class="form-group col-sm-10">
                        <label>Email:</label>
                        <div class="input-group  col-sm-12">
                            <input id = "email" name = "email" class="form-control" />                                           
                        </div>
                        <div id="error_email"></div>

                    </div>





                    <!-- /.input group -->


                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button  name="recover_button" class="btn btn-danger" type="submit"">RESET</button>
                </div>
                <!-- /.box-footer -->
            </form>


        </div>


    </div>

    <div class="col-md-4"></div>
</div>
