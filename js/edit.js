function getName (str){
	if (str.lastIndexOf('\\')) {
		var i = str.lastIndexOf('\\')+1;
	} else {
		var i = str.lastIndexOf('/')+1;
	}
	var filename = str.slice(i);
	var uploaded = document.getElementById("fileformlabel");
	uploaded.innerHTML = filename;
}
document.getElementById('prv_btn').addEventListener('click', function(){
	var pict=document.getElementById('fileformlabel').innerText;
	var name=document.getElementById('name_edt').value;
	var points=document.getElementById('pnt_edt').value;

	document.getElementById('pct_vw').src='content/'+pict;
	document.getElementById('name_vw').innerText=name;
	document.getElementById('pnt_vwa').innerText=points;
})
document.getElementById('acpt_btn').addEventListener('click', function(){
	var id=document.getElementById('id_fld').innerText;
	var name=document.getElementById('name_edt').value;
	var fName=document.getElementById('fName_edt').value;
	var pict=document.getElementById('fileformlabel').innerText;
	var points=document.getElementById('pnt_edt').value;
	
	var request=new XMLHttpRequest();
	var url="updating.php";
	params="id="+id+"&name="+name+"&fName="+fName+"&pict="+pict+"&points="+points;
	request.open('POST',url,true);
	request.onreadystatechange=function(){
		if((request.readyState==4) && (request.status==200)){
			if(request.responseText=='ok'){
					window.open("mainpage.php", '_self');
				}
		}
	}
	request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	request.send(params);
})
document.getElementById('logout_but').addEventListener('click', function(){
	window.open("logout.php", '_self') 
});