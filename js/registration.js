//Checking data in registration form and opening start page
document.getElementById('accept_btn').addEventListener('click', function(){
	var correct=true;
	
	var login=document.getElementById('uname_reg').value;
	var email=document.getElementById('email_reg').value;
	var pswd=document.getElementById('pswd_reg').value;	
	
	if(document.getElementById('uname_reg').value==''){
		$('#uname_reg').css('background-color','red');
		correct=false;
	}else{
		$('#uname_reg').css('background-color','white');
	}
	if(document.getElementById('email_reg').value==''||validateEmail(document.getElementById('email_reg').value)){
		$('#email_reg').css('background-color','red');
		correct=false;
	}
	else{
		$('#email_reg').css('background-color','white');
	}
	if(document.getElementById('pswd_reg').value==''||document.getElementById('pswd_reg').value!=document.getElementById('rpswd_reg').value){
		$('#pswd_reg').css('background-color','red');
		$('#rpswd_reg').css('background-color','red');
		correct=false;
	}else{
		$('#pswd_reg').css('background-color','white');
		$('#rpswd_reg').css('background-color','white');
	}
	if(correct==true){
		
		var request=new XMLHttpRequest();
		var url="newuser.php";
		params="login="+login+"&email="+email+"&password="+pswd;
		request.open('POST',url,true);
		request.onreadystatechange=function(){
			if((request.readyState==4) && (request.status==200)){
				if(request.responseText=='ok'){
					window.open("index.php", '_self');
				}
			}
			document.getElementById("alrm").innerText =request.responseText ;
		}
		request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		request.send(params);
	}else{
		alert('Incorrect data');
	}
});
document.getElementById('csl_btn').addEventListener('click', function(){
	window.open("index.php", '_self');
});
//validation email
function validateEmail(testingLine){
	var mascMail = /^[\w]{1}[\w-\.]*@[\w-]+\.[a-z]{2,4}$/i;
	return !testingLine.match(mascMail);
}