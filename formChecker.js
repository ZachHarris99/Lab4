function check() {
	var user = document.getElementById("user").value;
	var pass = document.getElementById("pass").value;
	var rocks = document.getElementById("rocks").value;
	var shirts = document.getElementById("shirts").value;
	var paintings = document.getElementById("paintings").value;
	var seven = document.getElementById("seven").checked;
	var three = document.getElementById("three").checked;
	var overnight = document.getElementById("overnight").checked;
	if (user == "")
	{
		alert("You left the email field empty!"); //The actual email format should already be taken care of by the input type email in html
		return false;
	}
	else if (pass == "")
	{
		alert("You left the password field empty!");
		return false;
	}
	else if (rocks == "")
	{
		alert("You left the quantity of rocks blank!");
		return false;
	}
	else if (shirts == "")
	{
		alert("You left the quantity of shirts blank!");
		return false;
	}
	else if (paintings == "")
	{
		alert("You left the quantity of paintings blank!");
		return false;
	}
	else if (rocks < 0)
	{
		alert("You cannot order a negative number!");
		return false;
	}
	else if (shirts < 0)
	{
		alert("You cannot order a negative number!");
		return false;
	}
	else if (paintings < 0)
	{
		alert("You cannot order a negative number!");
		return false;
	}
	else if (!seven && !three && !overnight)
	{
		alert("You didn't select a shipping method!");
		return false;
	}
	else
	{
		return true;
	}
}
