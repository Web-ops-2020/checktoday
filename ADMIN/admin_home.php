<?php
ob_start();
session_start();
if(!isset($_SESSION['iname'])){
    header('location:admin_login.php');
}
// print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GetBlood_Admin</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="hompage style fresh.css">



</head>
<body>
    <?php 
        if(isset($_GET['action']) && $_GET['action'] == 'logout'){
            unset($_SESSION['iname']);
            header('location:admin_login.php');
        }

        echo '<center><h1>WELCOME!</h1><br>Admin: ' .$_SESSION['iname'];
        echo '</center>';
    ?>

    <hr><br><br>
    <center>

        <div>
            <h3>Blood Inventory</h3>
        </div>
        <br>
        <table border="3">
            <thead>
                <tr>
                    <th>AB+</th>
                    <th>AB-</th>
                    <th>A+</th>
                    <th>A-</th>
                    <th>B+</th>
                    <th>B-</th>
                    <th>O+</th>
                    <th>O-</th>
                    <th>CONTROL</th>
                </tr>
            </thead>

            <tbody id="ad_i_lists"></tbody>
        </table>
        <hr><br><br>
                
        <div>
            <h3>Donor List</h3>
        </div>
        <br>
        <div id="ad_d_lists">  
        </div>
        <!-- <input type="button" value='Donate Blood!' onclick="location.href='donate_blood.php'"/> -->
        <hr><br><br>

        <div>
            <h3>Recipient List</h3>
        </div>
        <br>
        <div id="ad_r_lists">  
        </div>
        <hr><br><br>

        <a href="?action=logout" class="logout">logout</a> 
    
        <br><br><br>

        <div class="sitename">
            <a href="../bbms%20homepage%20fresh.php">
                <img class="titleimg" src="getblood_title.png" alt="GetBlood">
            </a>
        </div>
    
        <div class="sitesubname">
            Become a blood donor, find blood for patients and many more!!!!
        </div>


        <br>

        <!-- copyright -->
        <div class="col-sm-12 col-md-12 col-lg-12">
            <hr>
            <center><strong>Copyright | 2018</strong></center>
        </div>
    </center>



    <!-- hotline -->
    <div class="hotline">
        hotline: <strong>012345</strong>
    </div>




    <!-- dialog box inventory -->
    <div id="dialog_i" title="Update Wizard">
        <fieldset>
            <legend>Update Inventory Data</legend>

            <label for="i_id">ID</label><br>
            <input type="text" id='i_id' readonly /><br>
            
            <label for="ab1">AB+</label><br>
            <input type="text" id='ab1' /><br>

            <label for="ab2">AB-</label><br>
            <input type="text" id="ab2"><br>

            <label for="a1">A+</label><br>
            <input type="text" id="a1"><br>

            <label for="a2">A-</label><br>
            <input type="text" id="a2"><br>
            
            <label for="b1">B+</label><br>
            <input type="text" id="b1"><br>
            
            <label for="b2">B-</label><br>
            <input type="text" id="b2"><br>

            <label for="o1">O+</label><br>
            <input type="text" id="o1"><br>

            <label for="o2">O-</label><br>
            <input type="text" id="o2"><br><br>


            <input type="button" value="Update" onclick="update_i_data_final()">
    
        </fieldset>
    </div>

    <!-- dialog box donor-->
    <div id="dialog_d" title="Update Wizard">
        <fieldset>
            <legend>Update Donor Data</legend>

            <label for="d_id">ID</label><br>
            <input type="text" id='d_id'readonly /><br>

            <label for="d_name">NAME</label><br>
            <input type="text" id="d_name"><br>

            <label for="d_dob">DATE OF BIRTH</label><br>
            <input type="text" id="d_dob"><br>

            <label for="d_blood_grp">BLOOD GROUP</label><br>
            <input type="text" id="d_blood_grp"><br>

            <label for="d_last_donation">LAST DONATION</label><br>
            <input type="text" id="d_last_donation"><br>

            <label for="d_donation_history">DONATION HISTORY</label><br>
            <input type="text" id="d_donation_history"><br>

            <label for="d_district">DISTRICT</label><br>
            <input type="text" id="d_district"><br>

            <label for="d_phone">CONTACT</label><br>
            <input type="text" id="d_phone"><br>

            <label for="d_phone2">CONTACT (optional)</label><br>
            <input type="text" id="d_phone2"><br>

            <label for="d_email">EMAIL</label><br>
            <input type="text" id="d_email"><br>

            <label for="d_password">PASSWORD</label><br>
            <input type="text" id="d_password"><br><br>


            <input type="button" value="Update" onclick="update_d_data_final()">
    
        </fieldset>
    </div>

    <!-- dialog box recipient-->
    <div id="dialog_r" title="Update Wizard">
        <fieldset>
            <legend>Update Donor Data</legend>

            <label for="r_id">ID</label><br>
            <input type="text" id='r_id'readonly /><br>

            <label for="r_name">NAME</label><br>
            <input type="text" id="r_name"><br>

            <label for="r_dob">DATE OF BIRTH</label><br>
            <input type="text" id="r_dob"><br>

            <label for="r_history">HISTORY</label><br>
            <input type="text" id="r_history"><br>
            
            <label for="r_district">DISTRICT</label><br>
            <input type="text" id="r_district"><br>
            
            <label for="r_nid">NID no.</label><br>
            <input type="text" id="r_nid"><br>

            <label for="r_phone">CONTACT</label><br>
            <input type="text" id="r_phone"><br>

            <label for="r_phone2">CONTACT (optional)</label><br>
            <input type="text" id="r_phone2"><br>

            <label for="r_email">EMAIL</label><br>
            <input type="text" id="r_email"><br>

            <label for="r_password">PASSWORD</label><br>
            <input type="text" id="r_password"><br><br>


            <input type="button" value="Update" onclick="update_r_data_final()">
    
        </fieldset>
    </div>











        <!-- inventory script -->
    <script>

        function show_i_data(){
            var ajax = new XMLHttpRequest();
            ajax.open('get', 'ad_show_inventory_data.php', true);
            ajax.send();

            ajax.onreadystatechange = function(){

                if(ajax.readyState == 4){
                    var responds = ajax.responseText;
                    var responds_array = JSON.parse(responds);

                    var html_table = '';

                    responds_array['data'].forEach(function(element) {

                        html_table += "<tr><td>" + element['AB1'] + "</td><td>" + element['AB2'] + "</td><td>" + element['A1'] + "</td><td>" + element['A2'] + "</td><td>" + element['B1'] + "</td><td>" + element['B2'] + "</td><td>" + element['O1'] + "</td><td>" + element['O2'] + "</td><td><input type='button' value='Update' class='updt' onclick='update_i_data(" + element['i_id'] + ")'/></td></tr>";
                        
                    }, this);

                    document.getElementById('ad_i_lists').innerHTML = html_table;
                }
            }
        }
        show_i_data();

        function update_i_data(id){
            var ajax = new XMLHttpRequest();

            ajax.open('GET', 'getINVENTORY.php?id=' + id,true);
            ajax.send();
            
            ajax.onreadystatechange = function(){
                if(ajax.readyState == 4){
                    var responds = ajax.responseText;
                    var responds_array = JSON.parse(responds);

                    document.getElementById('i_id').value = responds_array['i_id'];
                    document.getElementById('ab1').value = responds_array['AB1'];
                    document.getElementById('ab2').value = responds_array['AB2'];
                    document.getElementById('a1').value = responds_array['A1'];
                    document.getElementById('a2').value = responds_array['A2'];
                    document.getElementById('b1').value = responds_array['B1'];
                    document.getElementById('b2').value = responds_array['B2'];
                    document.getElementById('o1').value = responds_array['O1'];
                    document.getElementById('o2').value = responds_array['O2'];

                    $( "#dialog_i" ).dialog( "open" );
                }
            }
        }

        function update_i_data_final(){

            var i_id = document.getElementById('i_id').value;
            var i_ab1 = document.getElementById('ab1').value;
            var i_ab2 = document.getElementById('ab2').value;
            var i_a1 = document.getElementById('a1').value;
            var i_a2 = document.getElementById('a2').value;
            var i_b1 = document.getElementById('b1').value;
            var i_b2 = document.getElementById('b2').value;
            var i_o1 = document.getElementById('o1').value;
            var i_o2 = document.getElementById('o2').value;


            var ajax = new XMLHttpRequest();
            
            ajax.open("GET", 'update_i_data.php?i_id=' + i_id + '&i_ab1=' + i_ab1 + '&i_ab2=' + i_ab2 + '&i_a1=' + i_a1 + '&i_a2=' + i_a2 + '&i_b1=' + i_b1 + '&i_b2=' + i_b2 + '&i_o1=' + i_o1 + '&i_o2=' + i_o2, true);

            ajax.send();
            console.log(ajax);

            $('#dialog_i').dialog('close');
            alert('Data updated!');
            show_i_data();
        }
    </script>


        <!-- donor script -->
    <script>
        function show_d_data(){
            var ajax = new XMLHttpRequest();
            ajax.open('GET', 'ad_show_donor_data.php', true);
            ajax.send();

            ajax.onreadystatechange = function(){
                if(ajax.readyState == 4){
                    var responds = ajax.responseText;
                    var responds_array = JSON.parse(responds);
 
                    var donor_table = '<table border="3" style="text-align: center; background-color: rgba(255, 255, 255, 0.226);"><tr><th>ID</th><th>NAME</th><th>DATE OF BIRTH</th><th>BLOOD GROUP</th><th>LAST DONATION</th><th>DONATION HISTORY</th><th>DISTRICT</th><th>CONTACT</th><th>CONTACT (optional)</th><th>EMAIL</th><th>PASSWORD</th><th>UPDATE</th><th>DELETE</th></tr>';

                    responds_array['data'].forEach(function(element) {
                        donor_table += "<tr><td>" + element['d_id'] + "</td><td>" + element['d_name'] + "</td><td>" + element['d_dob'] + "</td><td>" + element['d_blood_grp'] + "</td><td>" + element['d_last_donation'] + "</td><td>" + element['d_donation_history'] + "</td><td>" + element['d_district'] + "</td><td>" + element['d_phone'] + "</td><td>" + element['d_phone2'] + "</td><td>" + element['d_email'] + "</td><td>" + element['d_password'] + "</td><td><input type='button' value='Update' class='updt' onclick='update_d_data(" + element['d_id'] + ")'/></td><td><input type='button' value='X' class='del' onclick='delete_d_data(" + element['d_id'] + ")'</td></tr>";
                    }, this);
                    

                        donor_table +="</table>";

                    document.getElementById('ad_d_lists').innerHTML = donor_table;
                }
            }
        }
        show_d_data();

        function update_d_data(id){
            var ajax = new XMLHttpRequest();

            ajax.open('GET', 'getDONORbyid.php?id=' + id,true);
            ajax.send();
            ajax.onreadystatechange = function(){
                if(ajax.readyState == 4){
                    var responds = ajax.responseText;
                    var responds_array = JSON.parse(responds);

                    document.getElementById('d_id').value = responds_array['d_id'];
                    document.getElementById('d_name').value = responds_array['d_name'];
                    document.getElementById('d_dob').value = responds_array['d_dob'];
                    document.getElementById('d_blood_grp').value = responds_array['d_blood_grp'];
                    document.getElementById('d_last_donation').value = responds_array['d_last_donation'];
                    document.getElementById('d_donation_history').value = responds_array['d_donation_history'];
                    document.getElementById('d_district').value = responds_array['d_district'];
                    document.getElementById('d_phone').value = responds_array['d_phone'];
                    document.getElementById('d_phone2').value = responds_array['d_phone2'];
                    document.getElementById('d_email').value = responds_array['d_email'];
                    document.getElementById('d_password').value = responds_array['d_password'];

                    $( "#dialog_d" ).dialog( "open" );
                }
            }
        }

        function update_d_data_final(){

            var dn_id = document.getElementById('d_id').value;
            var dn_name = document.getElementById('d_name').value;
            var dn_dob = document.getElementById('d_dob').value;
            var dn_blood_grp = document.getElementById('d_blood_grp').value;
            var dn_last_donation = document.getElementById('d_last_donation').value;
            var dn_donation_history = document.getElementById('d_donation_history').value;
            var dn_district = document.getElementById('d_district').value;
            var dn_phone = document.getElementById('d_phone').value;
            var dn_phone2 = document.getElementById('d_phone2').value;
            var dn_email = document.getElementById('d_email').value;
            var dn_password = document.getElementById('d_password').value;


            var ajax = new XMLHttpRequest();
            ajax.open("GET", 'update_d_data.php?dn_id=' + dn_id + '&dn_name=' + dn_name + '&dn_dob=' + dn_dob + '&dn_blood_grp=' + dn_blood_grp + '&dn_last_donation=' + dn_last_donation + '&dn_donation_history=' + dn_donation_history + '&dn_district=' + dn_district + '&dn_phone=' + dn_phone + '&dn_phone2=' + dn_phone2 + '&dn_email=' + dn_email + '&dn_password=' + dn_password, true);

            ajax.send();

            $('#dialog_d').dialog('close');
            alert('Data updated!');
            show_d_data();
        }

        function delete_d_data(id){
            var ajax = new XMLHttpRequest();
            ajax.open('GET', 'delete_d_data.php?id=' + id, true);
            ajax.send();

            alert('Data Deleted!');
            show_d_data();
        }

    </script>


        <!-- Recipient script -->
    <script>
        function show_r_data(){
            var ajax = new XMLHttpRequest();
            ajax.open('GET', 'ad_show_recipient_data.php', true);
            ajax.send();

            ajax.onreadystatechange = function(){
                if(ajax.readyState == 4){
                    var responds = ajax.responseText;
                    var responds_array = JSON.parse(responds);
 
                    var recipient_table = '<table border="3" style="text-align: center; background-color: rgba(255, 255, 255, 0.226);"><tr><th>ID</th><th>NAME</th><th>DATE OF BIRTH</th><th>HISTORY</th><th>DISTRICT</th><th>NID no.</th><th>CONTACT</th><th>CONTACT (optional)</th><th>EMAIL</th><th>PASSWORD</th><th>UPDATE</th><th>DELETE</th></tr>';

                    responds_array['data'].forEach(function(element) {
                        recipient_table += "<tr><td>" + element['r_id'] + "</td><td>" + element['r_name'] + "</td><td>" + element['r_dob'] + "</td><td>" + element['r_history'] + "</td><td>" + element['r_district'] + "</td><td>" + element['r_nid'] + "</td><td>" + element['r_phone'] + "</td><td>" + element['r_phone2'] + "</td><td>" + element['r_email'] + "</td><td>" + element['r_password'] + "</td><td><input type='button' value='Update' class='updt' onclick='update_r_data(" + element['r_id'] + ")'/></td><td><input type='button' value='X' class='del' onclick='delete_r_data(" + element['r_id'] + ")'</td></tr>";
                    }, this);
                    

                        recipient_table +="</table>";

                    document.getElementById('ad_r_lists').innerHTML = recipient_table;
                }
            }
        }
        show_r_data();
    
        function update_r_data(id){
            var ajax = new XMLHttpRequest();

            ajax.open('GET', 'getRECIPIENTbyid.php?id=' + id,true);
            ajax.send();
            
            ajax.onreadystatechange = function(){
                if(ajax.readyState == 4){
                    var responds = ajax.responseText;
                    var responds_array = JSON.parse(responds);

                    document.getElementById('r_id').value = responds_array['r_id'];
                    document.getElementById('r_name').value = responds_array['r_name'];
                    document.getElementById('r_dob').value = responds_array['r_dob'];
                    document.getElementById('r_history').value = responds_array['r_history'];
                    document.getElementById('r_district').value = responds_array['r_district'];
                    document.getElementById('r_nid').value = responds_array['r_nid'];
                    document.getElementById('r_phone').value = responds_array['r_phone'];
                    document.getElementById('r_phone2').value = responds_array['r_phone2'];
                    document.getElementById('r_email').value = responds_array['r_email'];
                    document.getElementById('r_password').value = responds_array['r_password'];

                    $( "#dialog_r" ).dialog( "open" );
                }
            }
        }

        function update_r_data_final(){

            var re_id = document.getElementById('r_id').value;
            var re_name = document.getElementById('r_name').value;
            var re_dob = document.getElementById('r_dob').value;
            var re_history = document.getElementById('r_history').value;
            var re_district = document.getElementById('r_district').value;
            var re_nid = document.getElementById('r_nid').value;
            var re_phone = document.getElementById('r_phone').value;
            var re_phone2 = document.getElementById('r_phone2').value;
            var re_email = document.getElementById('r_email').value;
            var re_password = document.getElementById('r_password').value;


            var ajax = new XMLHttpRequest();
            ajax.open("GET", 'update_r_data.php?re_id=' + re_id + '&re_name=' + re_name + '&re_dob=' + re_dob + '&re_history=' + re_history + '&re_district=' + re_district + '&re_nid=' + re_nid + '&re_phone=' + re_phone + '&re_phone2=' + re_phone2 + '&re_email=' + re_email + '&re_password=' + re_password, true);

            ajax.send();

            $('#dialog_r').dialog('close');
            alert('Data updated!');
            show_r_data();
        }

        function delete_r_data(id){
            var ajax = new XMLHttpRequest();
            ajax.open('GET', 'delete_r_data.php?id=' + id, true);
            ajax.send();

            alert('Data Deleted!');
            show_r_data();
        }
    </script>



    <!-- JQUERY UI Script -->
    <script>
        $(document).ready(function(){
            $( "#dialog_d" ).dialog({
                autoOpen: false,
                modal:true
            });

            $( "#dialog_r" ).dialog({
                autoOpen: false,
                modal:true
            });

            $( "#dialog_i" ).dialog({
                autoOpen: false,
                modal:true
            });
           

            // setInterval(function(){showData()},2000);
        });

    </script>

    <style>
        th,td{
            text-align: center;
            padding: 10px 10px;
        }

        th{
            background-color: rgba(236, 10, 48, 0.815);
            color: whitesmoke;
        }
        
        #ad_i_lists{
            font-size: 20px;
        }
    </style>
</body>
</html>
