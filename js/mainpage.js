window.onload = function() {
	showPage(1);
	document.getElementById('page1t_btn').style='background-color: #333333';
	document.getElementById('page2t_btn').style='background-color: #080000';
	document.getElementById('page3t_btn').style='background-color: #080000';
};
//Filter of team
document.getElementById('search_fld').addEventListener('keyup', function(){
	document.getElementById('page1t_btn').style='background-color: #080000';
	document.getElementById('page2t_btn').style='background-color: #080000';
	document.getElementById('page3t_btn').style='background-color: #080000';
	var filter;
	var item;
	//var info;
	filter=document.getElementById("search_fld").value.toLowerCase();
	item=document.getElementById("main_list").getElementsByTagName('li');
	Array.from(item).forEach((team)=>{
		teamName=team.childNodes[2].innerText;
		if(teamName.toLowerCase().indexOf(filter) !=-1){
			team.style.display='block';
		}
		else{
			team.style.display='none';
		}
	});
});
//paging
document.getElementById('page1t_btn').addEventListener('click', function(){
	showPage(1);
	document.getElementById('page1t_btn').style='background-color: #333333';
	document.getElementById('page2t_btn').style='background-color: #080000';
	document.getElementById('page3t_btn').style='background-color: #080000';
});
document.getElementById('page2t_btn').addEventListener('click', function(){
	showPage(2);
	document.getElementById('page1t_btn').style='background-color: #080000';
	document.getElementById('page2t_btn').style='background-color: #333333';
	document.getElementById('page3t_btn').style='background-color: #080000';
});
document.getElementById('page3t_btn').addEventListener('click', function(){
	showPage(3);
	document.getElementById('page1t_btn').style='background-color: #080000';
	document.getElementById('page2t_btn').style='background-color: #080000';
	document.getElementById('page3t_btn').style='background-color: #333333';
});
//show page
function showPage(num){
	var item;
	item=document.getElementById("main_list").getElementsByTagName('li');
	for(var i=0; i<item.length; i++){
		if(i>=(num-1)*4 && i<num*4){
			item[i].style.display='block';
		}else{
			item[i].style.display='none';
		}
	}
}
//Opening edit page
document.querySelector('#main_list').addEventListener('click',function (e) {
	console.log('click edit');
	if (e.target.className == 'button edit') {
		var li = e.target.parentElement.parentElement;
		//var pict=li.getElementsByTagName('img').src;
		var p=li.getElementsByTagName('p');
		location.href = 'edit.php?idTeam='+p[0].textContent;	
	}
});
document.getElementById('logout_but').addEventListener('click', function(){
	window.open("logout.php", '_self') 
});