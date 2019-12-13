//Checking log in form
document.getElementById('login_btn').addEventListener('click', function (){
	var correct=true;
	var login=document.getElementById('uname_fld').value;
	var pswd=document.getElementById('pswd_fld').value;
	
	if(login==''){
		$('#uname_fld').css('background-color','red');
		correct=false;
	}else{
		$('#uname_fld').css('background-color','white');
	}
	if(pswd==''){
		$('#pswd_fld').css('background-color','red');
		correct=false;
	}else{
		$('#pswd_fld').css('background-color','white');
	}
	if(correct==true){

		var request=new XMLHttpRequest();
		var url="checkreg.php";
		params="uname="+login+"&pswd="+pswd;
		request.open('POST',url,true);
		request.onreadystatechange=function(){
			if((request.readyState==4) && (request.status==200)){
				if(request.responseText=='test!!!'){
					window.open("mainpage.php", '_self');
				}else{
					document.getElementById('alrm').innerText="Login or password incorrect.";
				}
			}
		}
		request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		request.send(params);
	}else{
		document.getElementById('alrm').innerText="Enter full data.";
	}
});
//Opening registration page
document.getElementById('reg_btn').addEventListener('click', function (){
	window.open("registration.php", '_self');
});