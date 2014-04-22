function checkForm(fform) 
	{ 
		if(fform.pwd.value !="" && fform.pwd.value == fform.repwd.value)
		{ 
			if(fform.pwd.value.length < 8)
			{ 
				alert("Password must contain atleast 8 characters!");
				fform.pwd.focus();
				return false;
			}
			}
		else
		{
		 alert("Password and Re-Enter Password do not match!");
		 fform.pwd.focus();
		 return false;
		}
}
