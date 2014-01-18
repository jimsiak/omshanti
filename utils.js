var greek_months = new Array("Ιανουαρίου", "Φεβρουαρίου", "Μαρτίου", 
                             "Απριλίου", "Μαΐου", "Ιουνίου", "Ιουλίου",
                             "Αυγούστου", "Σεπτεμβρίου", "Οκτωβρίου", 
                             "Νοεμβρίου", "Δεκεμβρίου"); 
function get_greek_date()
{
	var d = new Date();
	var curr_date = d.getDate();
	var curr_month = d.getMonth() + 1; //Months are zero based
	var curr_year = d.getFullYear();
	//document.write(curr_date + " " + greek_months[curr_month-1] + " " + curr_year);
	return curr_date + " " + greek_months[curr_month-1] + " " + curr_year;
}
