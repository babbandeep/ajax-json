<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<script type="text/javascript">
	$(document).ready(function(){
		$('button').click(function(){
			var info = $(this).data('id');
			$.ajax({
				url: 'ajaxdatacall.php',
				data: 'fetchda='+info
			}).done(function(html){
				$('#demo').html(html);
			});
		});

		$('select').on('change', function(){
			var valu = $(this).val();
			$.ajax({
				url: 'ajaxdatacall.php',
				data: 'fetchda='+valu
			}).done(function(html){
				$('#seldemo').html(html);
			});
		});
	});
</script>
<body>
<button data-id="developer">developer</button>
<button data-id="webdeveloper">webdeveloper</button>
<button data-id="seniordeveloper">seniordeveloper</button>
<button data-id="trainee">trainee</button>
<div id="demo"></div>
</br>
<select>
<option value="">Select option</option>
<option value="developer">developer</option>
<option value="webdeveloper">webdeveloper</option>
<option value="seniordeveloper">seniordeveloper</option>
<option value="trainee">trainee</option>
</select>
<div id="seldemo"></div>
</body>
</html>
