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
                <h2> Account F</h2>
            </div>
            <div class="col-md-12" style="padding-left: 100px; margin-top: 15px;">

                <label class="control-label">Account Id : </label>
                <input id="accountAutoId" type="text" placeholder="Account Auto Id" readonly 
                       class="form-control" style="width: 300px;">   
                <br/>

                <label class="control-label">Account Owner's Name : </label>
                <input id="accountOwnerName" type="text" placeholder="Account Owner's Name" readonly 
                       class="form-control" style="width: 500px;">    
                <br/>
                <br/>

                <label class="control-label">Naya Dima : </label>                
                <br/>
                <br/>                             

                <table id="" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Naya Mudala(Rs.)</th>
                            <th>Warika Ganana</th>
                            <th>Poli Anupathaya % </th>
                            <th>Naya Warikaya</th>
                            <th>Poli Masika Warikaya </th>
                            <th>Masika Warikaya </th>
                            <th>Gewim Receipt Number </th>
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
                        </tr>  
                        <tr style="height:100px;">
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

                <div style="float: left; display: inline-block;">
                    <input class="btn btn-small btn-info" type="button" value="Warika Gewima" style="width: 200px;">
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
