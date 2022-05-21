<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php include 'header.php';?>

        <?php include 'siderbar.php';?>
  <table id="tbl">
    <tr>
        <td><input type="text" name="links" /></td>
        <td><input type="text" name="keywords" /></td> 
        <td><input type="text" name="violationtype" /></td>   
        <td><input type="submit" class="button" value="Add another line" onclick="addField(this);" /></td>          
    </tr>
</table>
<script type="text/javascript">
//   $(function(){
//     // $("#addButton").click(function(){
//     //     $(this).closest("tr").clone(true).appendTo("#myTable");
//     // });

//     $("#deleteButton").click(function(){
// //      var x = document.getElementById("myTable").rows.length;
//         var x = $('#myTable tr').length;
//         if(x == 2){

//         } else {
//              $(this).closest("tr").remove();
//         }

//     });
// });

function addField(n)
{
    var tr = n.parentNode.parentNode.cloneNode(true);
    document.getElementById('tbl').appendChild(tr);
}
</script>

</body>
</html>