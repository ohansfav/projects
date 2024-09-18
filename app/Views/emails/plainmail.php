<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0," />
    <title>LitCloud</title>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css' />

    <style type="text/css">
        html {
            width: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            -webkit-text-size-adjust: none;
            -ms-text-size-adjust: none;
        }



        .ReadMsgBody {
            width: 100%;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        .images {
            display: block !important;
            width: 100% !important;
        }

        .MsoNormal {
            font-family: Roboto, Arial, Helvetica Neue, Helvetica, sans-serif !important;
        }

        p {
            margin: 0 !important;
            padding: 0 !important;
        }

        a {
            font-family: Roboto, Arial, Helvetica Neue, Helvetica, sans-serif !important;
        }

        .button td,
        .button a,
        button.button {
            font-family: Roboto, Arial, Helvetica Neue, Helvetica, sans-serif !important;
        }

        .button a:hover {
            text-decoration: none !important;
        }

        /* MEDIA QUIRES */
        @media only screen and (max-width:640px) {
            body {
                width: auto !important;
            }

            table[class=display-width] {
                width: 100% !important;
            }
        }

        @media only screen and (max-width:480px) {
            table[class=display-width] table {
                width: 100% !important;
            }

            table[class=display-width] .button-width .button {
                width: auto !important;
            }

            .hide {
                display: none !important;
            }
        }

        .gradient_one {
            background: #fc7455;
            /* Old browsers */
            background: -moz-linear-gradient(top, #fc9a55 0%, #fc7455 75%);
            /* FF3.6-15 */
            background: -webkit-linear-gradient(top, #fc9a55 0%, #fc7455 75%);
            /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to right bottom, #fc9a55 0%, #fc7455 75%);
            /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fc9a55', endColorstr='#fc7455', GradientType=0);
            /* IE6-9 */
        }

        .gradient_two {
            background: #4fccbb;
            /* Old browsers */
            background: -moz-linear-gradient(top, #53e4c0 0%, #4fccbb 40%);
            /* FF3.6-15 */
            background: -webkit-linear-gradient(top, #53e4c0 0%, #4fccbb 40%);
            /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to left bottom, #53e4c0 0%, #4fccbb 40%);
            /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#53e4c0', endColorstr='#4fccbb', GradientType=0);
            /* IE6-9 */
        }
    </style>
</head>

<body>
    <!-- DIFFERENT APPROACH STARTS -->
    <table align="center" bgcolor="#264E36" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
            <tr>
                <td align="center">
                    <br><br>
                    <div style="text-align:center; margin:0px auto;width:auto;">
                        <!--  <img  src='<?= base_url() ?>/splash/images/logofmcsite.png' height="auto" width="100px" /> -->
                    </div>
                    <!--SECTION TABLE-700-->
                    <table align="center" border="0" bgcolor="#ffffff" cellpadding="0" cellspacing="0" class="display-width" width="700" style="border-bottom:1px solid #eeeeee;border-top-left-radius:15px;border-top-right-radius:15px">
                        <tbody>
                            <tr>
                                <td height="50" style="padding:20px;line-height:50px;">
                                    <p style="text-align:center">
                                        <img src= images\logo.webp' alt="Logo" title="Logo" height='auto' width='150' />
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" style="padding:0 10px;">
                                    <!--SECTION TABLE-600-->
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="display-width" width="600">
                                        <tbody>
                                            <tr>
                                                <!--SECTION TITLE-->
                                                <td align="center" class="MsoNormal" style="color:#555555; font-family:Segoe UI, Arial, Verdana, Trebuchet MS, sans-serif; font-size:30px; font-weight:500; letter-spacing:1px;">
                                                <?= $subject ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20" style="line-height:20px;"></td>
                                            </tr>
                                            <tr>
                                                <td align="" valign="middle" class="MsoNormal" style="color:#555555; font-family:Segoe UI, Arial, Verdana, Trebuchet MS, sans-serif; font-size:16px; font-weight:300; line-height:24px; letter-spacing:1px;">
                                                    <p><?= greet() ?> <?php echo $toname; ?>,</p>
                                                    <p><?= $message ?></p>
                                                     <p>If you feel you are not the rightful recipient of this email, kindly delete it and accept our deepest apologies for this inconvenience. Thank you.</p>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <!--SECTION TABLE-600 ENDS-->
                                </td>
                            </tr>
                            <tr>
                                <td height="50" style="line-height:50px;"></td>
                            </tr>
                        </tbody>
                    </table>
                    <!--SECTION TABLE-700 ENDS-->
                </td>
            </tr>
        </tbody>
    </table>
    <!-- DIFFERENT APPROACH ENDS -->

    <!-- FOOTER STARTS -->
    <table align="center" bgcolor="#264E36" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
            <tr>
                <td align="center">
                    <!--SECTION TABLE-700-->
                    <table align="center" border="0" bgcolor="#ffffff" cellpadding="0" cellspacing="0" class="display-width" width="700" style="border-radius: 0 0 5px 5px;">
                        <tbody>
                            <tr>
                                <td align="center" style="padding:0 10px;">
                                    <!--SECTION TABLE-600-->
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="display-width" width="600">
                                        <tbody>
                                            <tr>
                                                <td height="50" style="line-height:50px;"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--TABLE LEFT-->
                                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style=" border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width:auto;">
                                                        <tbody>

                                                            <tr>
                                                                <td align="center" class="MsoNormal" style="color:#666666; font-family:Segoe UI, Arial, Verdana, Trebuchet MS, sans-serif; font-size:14px; font-weight:300; line-height:24px; letter-spacing:1px;">
                                                                    &copy; <?= "2021" . (date("Y") > 2021 ? "-" . date("Y") : "") ?> , All Rights Reserved.
                                                                </td>
                                                            </tr>
                                                            <tr>

                                                                <td align="center" class="MsoNormal" style="color:#666666; font-family:Segoe UI, Arial, Verdana, Trebuchet MS, sans-serif; font-size:14px; font-weight:300;  line-height:24px; letter-spacing:1px;">
                                                                    <a href="<?php echo base_url(); ?>" style="color:#666666; text-decoration:none;"> Home</a>
                                                                </td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="50" style="line-height:50px;"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--SECTION TABLE-600 ENDS-->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--SECTION TABLE-700 ENDS-->
                </td>
            </tr>
            <tr>
                <td height="50" style="line-height:50px;"></td>
            </tr>
        </tbody>
    </table>
    <!-- FOOTER ENDS -->

</body>

</html>