<!DOCTYPE html>
<html>

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Tokopaedi</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1,
        h3,
        h5 {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center text-success mt-5">Tokopaedi</h1>
        <div class="container"><br>
            <div class="bg-success py-5">
                <h5 class="text-center">Transaction Date :</h5>
                <h3 class="text-center text-success">
                    <b>
                        <?php
                        date_default_timezone_set('Asia/Jakarta');
                        echo date('l, j-F-Y  H:i:s'); ?>
                    </b>
                </h3>
            </div>
            <br>

            <div class="bg-success py-5">
                <h5 class="text-center">Transaction Code :</h5>
                <h3 class="text-center text-success">
                    <b>
                        <?php

                        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

                        function generate_string($input, $strength = 16)
                        {
                            $input_length = strlen($input);
                            $random_string = '';
                            for ($i = 0; $i < $strength; $i++) {
                                $random_character = $input[mt_rand(0, $input_length - 1)];
                                $random_string .= $random_character;
                            }

                            return $random_string;
                        }
                        echo generate_string($permitted_chars, 20);
                        ?>
                    </b>
                </h3>
            </div><br>

            <div class="bg-success py-5">
                <h5 class="text-center">
                    Transfer to :
                </h5>
                <h3 class="text-center text-success">
                    765374578 <br> (BNI) <br> ALVIN IRWANTO <br>
                </h3>
            </div><br>
        </div>
    </div>

</body>

</html>