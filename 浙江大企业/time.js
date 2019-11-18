var time=function(){
		var t1=document.querySelector(".t1");
		var date=new Date();
		var year=date.getFullYear();
		var month = date.getMonth()+1;
		var dates=date.getDate();
		var arr=['星期日','星期一','星期二','星期三','星期四','星期五','星期六'];
		var day=date.getDay();
		t1.innerHTML=year+'年'+month+'月'+dates+'日 '+arr[day];
		}