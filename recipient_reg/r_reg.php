<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="hompage style fresh.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


    <style>
        body{
            background-image: url("b517380049copy.jpg");
            background-size: 100%;
        }

        #recp_reg{
            text-align: right;
            background-color: rgba(61, 169, 231, 0.288);
            width: 350px;
            border: solid 3px rgb(26, 26, 26);
            padding: 10px 20px;
            margin: 10px;
        }

        legend{
            text-align: center;
            font-weight: bolder;
            font-size: 28px;
            color: rgb(0, 0, 0);
        }

        .sitesubname{
            text-align: center;
            font-weight: bold;
        }
    </style>

</head>
<body>
       <!-- reg form -->

    <center>
        <div id="recp_reg" title="Create new user">
            <br><br>
            
            <form action="javascript:void(0)" id='recipient_form'>
            <fieldset>
                <legend>Recipient Registration Window</legend>
               
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required><br><br>
        
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob" required><br><br>
        
                <label for="district">District</label>
                <input type="text" name="district" id="district" required><br><br>

                <label for="nid">NID no</label>
                <input type="text" name="nid" id="nid" required><br><br>
        
                <label for="phone">Contact</label>
                <input type="text" name="phone" id="phone" required><br><br>
                
                <label for="phone2">Contact (optional)</label>
                <input type="text" name="phone2" id="phone2" placeholder="write N/A if not available"><br><br>
        
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required><br><br>
        
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required><br><br>
        
                <input type="button" value='Sign Up' class="btn" id="s_up" >
            </fieldset>
        </div>


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
</body>




<script>
    function add_data(){
        var username = document.getElementById('username').value;
        var dob = document.getElementById('dob').value;
        var district = document.getElementById('district').value;
        var nid = document.getElementById('nid').value;
        var phone = document.getElementById('phone').value;
        var phone2 = document.getElementById('phone2').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
    
        
        var ajax = new XMLHttpRequest();

        ajax.open('GET', 'r_add_data.php?username=' + username + '&dob=' + dob + '&district=' + district + '&nid=' + nid + '&phone=' + phone + '&phone2=' + phone2 + '&email=' + email + '&password=' + password, true);

        ajax.send();
        console.log(ajax);

        ajax.onreadystatechange = function(){
            if(ajax.readyState == 4){
                alert(ajax.responseText);
            }
        }
    }

    $(document).ready(function(){

        $('#s_up').click(function(){
            var flag = true;
            $('input').each(function(){
                if(this.value == ''){
                    flag = false;
                }
            });


            if(flag == true){
                add_data();
            }
            
            else{
                alert('fill the Form!');
            }
        });
    });
</script>
</html>



