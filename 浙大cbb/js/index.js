	$(function() {
			
				
				
				var timer;
				function sport() {
					var i = 0;
					timer = setInterval(function() {
						if(i == 4) {
							i = 0;
						}
						$(".lunbo img").attr("src","image/" + i + ".jpg" );
						i++;
					},2000);
				}
				sport();
				
				
				var myDate = new Date();
				//console.log(myDate.toLocaleString());
				//$('.loding').html(myDate.toLocaleString())
				//myDate.toLocaleString()
				var xingqi = Math.ceil(myDate.getTime()/1000/3600/24)%7;
				
				console.log( Math.ceil(myDate.getTime()/1000/3600/24)%7)
				// console.log(myDate.getTime())
				// console.log(Math.ceil(myDate.getTime()/1000/3600/24));
				// console.log(18167%7)
				var menth = myDate.getMonth()+1;
				var day = myDate.getDate();
				var arr= ["三","四","五","六","日","一","二"];
				$('.loding').html(myDate.getFullYear()+"年"+menth+"月"+day+"日" +"&nbsp;&nbsp;"+ "星期"+arr[xingqi] + "<a href='denglu.html'>登录</a>");
				
			})