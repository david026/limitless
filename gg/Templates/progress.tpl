<!DOCTYPE HTML>
<html>
<head>
<title>let's try!</title>
<link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
nickname is {$name}!
<div class="progress-bar green stripes" id="progress">
    <span style="width: 0%"></span>
        <label>0px</label>
</div>
<p>Set above to:
	<a href="#" class="quarter">25%</a> /
	<a href="#" class="half">50%</a> /
	<a href="#" class="three-quarters">75%</a> /
	<a href="#" class="full">100%</a>
</p>
<div>
</div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
	$(document).ready(function(){ 
		$('.quarter').click(function(){
			$(this).parent().prev().children('span').css('width','25%');
			});
		$('.half').click(function(){
			$(this).parent().prev().children('span').css('width','50%');
			});
		$('.three-quarters').click(function(){
			$(this).parent().prev().children('span').css('width','75%');
			});
		$('.full').click(function(){
			$(this).parent().prev().children('span').css('width','100%');
			});	
 
		$start = 0; 
		$.extend({ 
		a:function(t){ 
			$index = t; 
			$('#progress').children('span').css('width',$index+"%");
			$('#progress').children('label').text($index+"%");
			
			if($start<100){
				$start++;
			}else{
				window.clearInterval($int);
			}
		} 
		}); 
		$int  = setInterval("$.a($start)",200); 

		
	});
	</script>
</body>
</html>