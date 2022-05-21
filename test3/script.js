function add_row()
{
	
	$('tbody').append("<tr class='row_count'><td>"+
		"<div class='custom-select' style='width:200px;'>"+
		"<select name='Qualification[]'><option value='10'>10</option>"+
						"<option value='12'>12</option>"+
						"<option value='degree'>Degree</option></select></div></td>"+
		"<td><input type='number' name='YearOfPass[]''></td><td><input type='text' name='Institution[]'></td>"+
		"<td><button onclick='remove(this)' type='button'>Remove</button></td>"
		);
}
function remove(e)
{
	$(e).closest("tr").remove();
}