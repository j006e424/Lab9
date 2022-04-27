function validate()
{
	let Qpop = document.getElementById("pop").value;
	let Qmilk = document.getElementById("milk").value;
	let Qdough = document.getElementById("dough").value;
	let sFree = document.getElementById("f").checked;
	let sOver = document.getElementById("o").checked;
	let sThree = document.getElementById("t").checked;
	let pass = document.getElementById("passW").value;
	let mail = document.getElementById("user").value;
	let mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	
	let val = true;
	if(Qpop == "" || Qpop < 0)
	{
		alert("Invalid Popcorn Ball Quantity");
		val = false;
	}
	if(Qmilk == "" || Qmilk < 0)
	{
		alert("Invalid Milk Chocolate Caramel Clusters Quantity");
		val = false;
	}
	if(Qdough == "" || Qdough < 0)
	{
		alert("Invalid Chocolate Chip Cookie Dough Quantity");
		val = false;
	}
	if(sFree == false && sOver == false && sThree == false)
	{
		alert("You must select a shipping option");
		val = false;
	}
	if(pass == "")
	{
		alert("You must enter a password");		
		val = false;
	}
	if(!mail.match(mailformat))
	{
		alert("Invalid email address");
		val = false;
	}
	return val;
}
