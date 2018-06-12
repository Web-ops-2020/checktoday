$(document).ready(function(){
    $( "#dialog_signin" ).dialog({
        autoOpen: false,
        modal:true
    });
    // setInterval(function(){showData()},2000);
});

function signin(){
    $('#dialog_signin').dialog('open');
}






$(document).ready(function(){
    $( "#dialog_reg" ).dialog({
        autoOpen: false,
        modal:true
    });
    // setInterval(function(){showData()},2000);
});

function signup(){
    $('#dialog_reg').dialog('open');
}

function adddata(){
    var d_name = document.getElementById('username').value;
    var d_bg = document.getElementById('bloodgroup').value;
    var d_dob = document.getElementById('dob').value;
    var d_lastdonation = document.getElementById('lastdonation').value;
    var d_address = document.getElementById('address').value;
    var d_district = document.getElementById('district').value;
    var d_phone = document.getElementById('phone').value;
    var d_email = document.getElementById('email').value;
    var d_password = document.getElementById('password').value;


    var ajax = new XMLHttpRequest();
    ajax.open('GET', 'add_data.php?p_name=' + p_name + '&p_price=' + p_price, true);
    ajax.send();
    console.log(ajax);
    alert('Data Added To The Product List');
}

