<?php
/**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 6/17/2019
 * Time: 11:11 AM
 */

?>
<?php



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



    <style>
        .atbName{
            text-align: left;
        }
    </style>

</head>
<body>

<form action="customerController.php" method="post" id="form" >


    <table>
        <tr>
            <th class="atbName" >Customer ID</th>
            <th><input type="text" name="cid" placeholder="Enter your ID" id="txtcid"></th>
        </tr>
        <tr>
            <th class="atbName" >Customer Name</th>
            <th><input type="text" name="name" placeholder="Enter your name" id="txtname"></th>
        </tr>
        <tr>
            <th class="atbName">Customer mobileNO.</th>
            <th><input type="text" name="mobile" placeholder="Enter your mobile No." id="txttel"></th>
        </tr>
        <tr>
            <th class="atbName" >Customer Salary</th>
            <th><input type="text" name="salary" placeholder="Enter your Salary" id="txtsal"></th>
        </tr>

    </table>
<!--    <button id="btnadd" >Add</button>-->
    <button id="btnadd" value="add">ADD</button>
    <button type="reset" value="Reset">Reset</button>
</form>
<script src="js/jquery-3.4.1.min.js"></script>
<script>
    //Validation for Phone Number
    if (
        $("#btnadd").click(function () {
            var value = $("#txttel").val();
            var regEx = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
            var result = regEx.test(value);
            if (!result) {
                alert(" Telephone Number is Invalid");
            }
        })) ;
    //Validation for Name
    if (
        $("#btnadd").click(function () {
            var value = $("#txtname").val();
            var regEx = /^[a-zA-Z]*$/;
            var result = regEx.test(value);
            if (!result) {
                alert("Name Is Invalide..Please Input Only Letters");
            }
        })
    ) ;
    //validation for salary
    if (
        $("#btnadd").click(function () {
            var value = $("#txtsal").val();
            var regEx = /^\d{1,6}\.\d{1,6}$/;
            var result = regEx.test(value);
            if (!result) {
                alert("Please input Salary Like : 0000.00");
            }
        })
    ) ;
    $("#btnadd").click(function () {
        var cid=$("#txtcid").val();
        var regEx ="/C-\d{3}/";
        var result=regEx.test(cid);
        if (!result) {
            alert("ID is Invalid")
        }
    });
    $("#txtcid").keyup(function () {
        if($("#txtcid").val().length>4){
            alert("plz input valid id")
        }
    })

    //Validation For Customer ID

    //Validate Empty Space

    </script>
</body>


</html>

<?php
?>