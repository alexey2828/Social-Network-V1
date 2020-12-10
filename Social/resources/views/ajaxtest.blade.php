<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</head>
<body>
	<label>страна</label>
	<select name="country">
		<option value="0"></option>
		<option value="1">Америка</option>
		<option value="2">Франция</option>
	</select>

	<label>город</label>
	<select name="city">
		<option value="0"></option>
	</select>
</body>
</html>

<script type="text/javascript">
	$(document).ready (function () {
		$("select[name='country']").bind("change", function () {
			$("select[name='city']").empty();
			$.get("/contentajaxtest", {
				country: $("select[name='country']").val()
			}, function (data) {
				data = JSON.parse(data);
				for (var id in data) {
					$("select[name='city']").append($("<option value='"+ id + "'>" + data[id] + "</option>"));
				}
			});
		});
	});
</script>