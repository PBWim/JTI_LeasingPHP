<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link type="text/css" href="<?php base_url(); ?>assets/style/bootstrap.min.css" media="screen" rel="stylesheet">
        <link type="text/css" href="<?php base_url(); ?>assets/style/bootstrap-theme.min.css" media="screen" rel="stylesheet">
        <link type="text/css" href="<?php base_url(); ?>assets/style/style.css" media="screen" rel="stylesheet">
        <script src="<?php base_url(); ?>assets/scripts/jquery.min.js" type="text/javascript"></script>
        <script src="<?php base_url(); ?>assets/scripts/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php base_url(); ?>assets/scripts/scripts.js" type="text/javascript"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form class="form-horizontal" role="form">
            <div class="col-lg-12">
                <h2>Settlement Accounts Button - 1</h2>
            </div>
            <div class="col-md-12" style="padding-left: 100px; margin-top: 15px;">            
                <label class="control-label">Warika Adaka ta Aduwen Gewu : </label>                
                <br/>                             
                <br/>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Ganan Balana Dinaya </th>
                            <th>Nawa Poliya </th>
                            <th>Naya Mudala Ha Dina ta Poli Mudala </th>
                            <th>Gewu Warika Ganana </th>
                            <th>Inge Hinga Ha Hinga ta Poliya </th>
                            <th>Inge Ithuruwa Thibu </th>
                            <th>Piyawima ta Gewiya Yuthu (Rs.) </th>
                            <th>Gewu Mudala (Rs.) </th>
                            <th>Paid Receipt Number </th>
                            <th>Kapa Hari Mudala (Rs.) </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height:100px;">
                            <td contenteditable='true'></td>
                            <td contenteditable='true'></td>
                            <td contenteditable='true'></td>
                            <td contenteditable='true'></td>
                            <td contenteditable='true'></td>
                            <td contenteditable='true'></td>
                            <td contenteditable='true'></td>
                            <td contenteditable='true'></td>
                            <td contenteditable='true'></td>
                            <td contenteditable='true'></td>
                        </tr>  
                    </tbody>
                </table>
                <br/>
                <br/>

                <div style="float: left; display: inline-block;">
                    <label class="control-label">Arakshitha Lekana : </label>  
                    <input class="btn btn-small btn-success" type="button" value="Muda Hariya Haka" style="width: 200px;">
                    <input class="btn btn-small btn-danger" type="button" value="Muda Hariya Nohakiya" style="width: 200px;">
                </div>

                <div style="float: right; display: inline-block;">
                    <input class="btn btn-small btn-success" type="button" value="Save" style="width: 100px;">
                    <input class="btn btn-small btn-primary" type="button" value="Confirm" style="width: 100px;">
                    <input class="btn btn-small btn-info" type="button" value="Send to Print the Bill" style="width: 200px;">
                </div>
                <br/><br/><br/>

            </div>

        </form>
    </body>
</html>
