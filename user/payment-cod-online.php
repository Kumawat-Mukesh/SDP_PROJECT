<?php
session_start();
require './admin_db.php';


if (isset($_POST['payment_now'])) {
    $user_id = $_SESSION['user_id'];
    $ngo_id = $_GET['ngo_id'];
    $method = $_POST['payment_method'];
    $amount = $_POST['amount'];
    $type = "online";
    //Null nai chale
    $q = mysqli_query($connection, "insert into tbl_donation(ngo_id,user_id,donation_method,donation_type,donation_amount) values('{$ngo_id}','{$user_id}','{$method}','{$type}','{$amount}')");

    header("location:thank_you.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/sweetalert2/sweetalert2.min.css">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/toastr/toastr.min.css">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0">
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box" style="width: 800px;">
        <div class="card" style="height: 580px;">
            <div class="card-body login-card-body">
                <div class="row">
                    <div class="col-5 col-sm-3">
                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <!-- <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Cash On Delivery</a> -->
                            <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">UPI</a>
                            <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Bank Transaction </a>
                            <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false"> Credit / Debit</a>
                        </div>
                    </div>

                    <div class="col-7 col-sm-9">
                        <div class="tab-content" id="vert-tabs-tabContent">
                            <!-- <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab" style="padding: 20px;">
                                <p style="color: green;">Cash On Delivery is Safe Transaction.</p>
                                <form name="myForm1" id="myForm1" method="POST" action="">
                                    <p><b>Payment Amount : </b>Rs.300</p>
                                    <input hidden name="payment_method" value="Cash Payment" hidden>
                                    <input hidden name="payment_status" value="Pending" hidden>
                                    <button class="btn btn-primary form-control" type="submit" name="payment_now">Payment Now</button>
                                </form>
                            </div> -->
                            <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel" aria-labelledby="vert-tabs-settings-tab" style="padding: 20px;">
                                <center>
                                    <form name="myForm2" id="myForm2" method="POST" action="">
                                        <p><b>Payment Amount :</b>Rs.<?php echo $_POST['amount']; ?> <br />
                                            <input type="hidden" name="amount" value="<?php echo $_POST['amount']; ?>">
                                            <img src="https://miro.medium.com/max/1168/1*X4FqGngbIt9AxuRlSaAFJw.png" style="width: 200px;">
                                        <p>UPI Id: abc@icici</p>
                                        <input hidden name="payment_method" value="UPI" hidden>
                                        <input hidden name="payment_status" value="Pending" hidden>
                                        <button class="btn btn-primary form-control" type="submit" name="payment_now">Click Here After Pay</button>
                                    </form>
                                </center>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                                <form name="myForm3" id="myForm3" method="POST" action="">
                                    <p><b>Payment Amount : </b>Rs.<?php echo $_POST['amount'] ?>
                                        <input type="hidden" name="amount" value="<?php echo $_POST['amount'] ?>" />
                                    <table class="table table-borderless" style="width: 100%;">
                                        <input hidden name="payment_method" value="Bank-Transfer">
                                        <input hidden name="payment_status" value="Completed">
                                        <tr>
                                            <td>Bank Name</td>
                                            <td>Bank Holder Name</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" class="form-control" placeholder="Bank Name" name="name" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');"></td>
                                            <td><input type="text" class="form-control" placeholder="Holder name" name="holder_Name" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">IFSC Code</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><input type="text" class="form-control" placeholder="Enter IFSC Code" name="ifsc_code"> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <button class="btn btn-primary form-control" type="submit" name="payment_now">Payment Now</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
                                <form name="myForm4" id="myForm4" method="POST" action="">
                                    <p><b>Payment Amount : </b>Rs.<?php echo $_POST['amount'] ?></p>
                                    <input type="hidden" name="amount" value="<?php echo $_POST['amount'] ?>" />
                                    <table class="table table-borderless" style="width: 500px;">
                                        <input hidden name="payment_method" value="Credit-Debit">
                                        <input hidden name="payment_status" value="Completed">
                                        <tr>
                                            <td colspan="2">Card Owner Name <span class="float-right"><b></b></span></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><input type="text" class="form-control" placeholder="Enter First Name" name="holder_name" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');"></td>
                                        </tr>
                                        <tr>
                                            <td>Card Number</td>
                                            <td>CVV </td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" class="form-control" placeholder="**************" name="c_number" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
                                            </td>
                                            <td><input type="text" class="form-control" placeholder="***" name="cvv_number" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"> </td>
                                        </tr>
                                    </table>
                                    <table class="table table-borderless" style="width: 500px;">
                                        <tr>
                                            <td colspan="3">
                                                <i class="fa fa-credit-card" aria-hidden="true" style="padding-left: 10px;padding-right: 10px;"></i>
                                                <i class="fab fa-paypal" style="padding-right: 22px;"></i>
                                                <i class=" fab fa-google-pay" style="padding-right: 22px;"></i>
                                                <i class="fab fa-amazon-pay" style="padding-right: 22px;"></i>
                                                <i class="fab fa-cc-paypal" style="padding-right: 22px;"></i>
                                                <i class="fab fa-cc-visa" style="padding-right: 22px;"></i>
                                                <i class="fab fa-cc-amex" style="padding-right: 22px;"></i>
                                                <i class="fab fa-cc-discover" style="padding-right: 22px;"></i>
                                                <i class="fab fa-cc-mastercard"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Valid until</td>
                                            <td>
                                                <select style="width: 120px;" name="month" class="form-control">
                                                    <option value="">Month</option>
                                                    <option value="January">January</option>
                                                    <option value="February">February</option>
                                                    <option value="March">March</option>
                                                    <option value="April">April</option>
                                                    <option value="May">May</option>
                                                    <option value="June">June</option>
                                                    <option value="July">July</option>
                                                    <option value="August">August</option>
                                                    <option value="September">September</option>
                                                    <option value="October">October</option>
                                                    <option value="November">November</option>
                                                    <option value="December">December</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select style="width: 120px;" name="year" class="form-control">
                                                    <option value="">Year</option>
                                                    <option value="2030">2030</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2022">2022</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <button class="btn btn-primary form-control" type="submit" name="payment_now">Payment Now</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</body>

<script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>

<script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js?v=3.2.0"></script>

<!-- <script src="https://adminlte.io/themes/v3/dist/js/demo.js"></script> -->
<!-- Start Jquery Validation -->
<!-- <script src="https://jqueryvalidation.org/files/lib/jquery.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script>
    $(document).ready(function() {
        $("#myForm3").validate({
            rules: {
                'name': {
                    required: true,
                },
                'holder_Name': {
                    required: true,
                },
                'ifsc_code': {
                    required: true,
                    minlength: 14,
                    maxlength: 14
                },
            },
            messages: {
                name: {
                    required: "Please Enter Bank Name",
                },
                holder_Name: {
                    required: "Please Enter Card Holder Name",
                },
                ifsc_code: {
                    required: "Please Enter IFSC Code",
                },
            },
        });
        $("#myForm4").validate({
            rules: {
                'name': {
                    required: true,
                },
                'holder_Name': {
                    required: true,
                },
                'ifsc_code': {
                    required: true,
                    minlength: 14,
                    maxlength: 14
                },
                'holder_name': {
                    required: true,
                },
                'c_number': {
                    required: true,
                    minlength: 16,
                    maxlength: 16
                },
                'cvv_number': {
                    required: true,
                    minlength: 3,
                    maxlength: 3
                },
                'month': {
                    required: true,
                },
                'year': {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "Please Enter Bank Name",
                },
                holder_Name: {
                    required: "Please Enter Card Holder Name",
                },
                ifsc_code: {
                    required: "Please Enter IFSC Code",
                },
                holder_name: {
                    required: "Please Enter Card Holder Name",
                },
                c_number: {
                    required: "Please Enter Card Number",
                },
                cvv_number: {
                    required: "Please Enter CVV Number",
                },
                month: {
                    required: "Please Select Month",
                },
                year: {
                    required: "Please Select Year",
                },
            },
        });
    });
</script>

</html>