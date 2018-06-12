<?php
session_start();
if(!isset($_SESSION['iname'])){
    header('location:admin_login.php');
}
require_once('../database.php');
// print_r($_SESSION);
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['doner_id'])){
    $doner_id = filter_input(INPUT_POST, 'doner_id');
    $qty = filter_input(INPUT_POST, 'qty');
    $sql = "INSERT INTO `doner_history`(`doner_history_id`, `doner_id`, `qty`) 
            VALUES (null,$doner_id, $qty);";
    $result = mysqli_query($conn, $sql);
    $sql = "INSERT INTO `doner_history`(`doner_history_id`, `doner_id`, `qty`) 
            VALUES (null,$doner_id, $qty);";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Donation Updated!";
    }else{
        echo "Donation Rejected!";
    }
}
$sql = "SELECT `d_id`, `d_name` FROM `donor_info` ORDER BY `d_name`;";
$result = mysqli_query($conn, $sql);?>
<form action="" method="post">
<?php
echo "Select Doner : <select name='doner_id' onchange='update_d_data(this.value)'>";
foreach ($result as $key => $value) {
    echo "<option value='" . $value['d_id'] . "'>" . $value['d_name'] . "</option>";
}
echo "</select>";
?>

<script>
    function update_d_data(id){
        var ajax = new XMLHttpRequest();
        ajax.open('GET', 'getDONORbyid.php?id=' + id,true);
        ajax.send();
        ajax.onreadystatechange = function(){
            if(ajax.readyState == 4){
                var responds = ajax.responseText;
                var responds_array = JSON.parse(responds);
                document.getElementById('b_name').innerHTML = responds_array['d_blood_grp'];
            }
        }
    }
</script>
<div>Blood Group : <span id="b_name"></span></div>
<label for="qty">Add Quantity Donated:</label><br>
<input type="number" name="qty" id="qty"><br>
<input type="submit" value='Save Data!'>
</form>