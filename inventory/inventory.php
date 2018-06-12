<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="hompage style fresh.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <style>
        body{
            background-image: url("b517380049copy.jpg");
            background-size: 100%;
        }

        h1,p{
            font-weight: bolder;
        }

        table,th,td,tr{
            text-align: center;
            border: solid 3px rgb(32, 32, 32);
        }
        th{
            padding: 10px;
            background-color: rgba(236, 10, 48, 0.815);
            color: whitesmoke;
        }
        td{
            padding: 10px;
            color: brown;
            font-size: 30px;
            font-weight: bolder;
        }
    </style>


</head>



<body>
    <center>
        <h1>Blood Inventory (bags)</h1>
        <p>1 bag = 500ml</p>

        <hr>
    
        <table border="2">
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
                </tr>
            </thead>

            <tbody id="p_list"></tbody>

            <!-- <tfoot>
                <tr> <td colspan="8">Total Products : <span id="p_count"></span></td> </tr>
            </tfoot> -->
        </table>

        <br><br><br><br><br>





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






<script>
    function showData(){
            var ajax = new XMLHttpRequest();
            ajax.open('get', 'show_all_data.php', true);
            ajax.send();

            ajax.onreadystatechange = function(){

                if(ajax.readyState == 4){
                    var responds = ajax.responseText;
                    var responds_array = JSON.parse(responds);

                    var html_table = '';

                    responds_array['data'].forEach(function(element) {

                        html_table += "<tr><td>" + element['AB1'] + "</td><td>" + element['AB2'] + "</td><td>" + element['A1'] + "</td><td>" + element['A2'] + "</td><td>" + element['B1'] + "</td><td>" + element['B2'] + "</td><td>" + element['O1'] + "</td><td>" + element['O2'] + "</td></tr>";
                        
                    }, this);

                    document.getElementById('p_list').innerHTML = html_table;
                }
            }
    }

    showData();
</script>

    
</body>
</html>