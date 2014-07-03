<script>
	$(document).ready(function() {
		$("#send").click(function(e) {
			e.preventDefault();
			var sender = $("#senderName").val();
			var senderEmail = $("#senderEmail").val();
			var getter = $("#getterName").val();
			var getterEmail = $("#getterEmail").val();
			var rel = $("#relationship").val();
			$("#referalForm").load("packages/core/Scripts/sendReferal.php", 
				{	senderName:sender,
					senderEmail:senderEmail,
					getterName:getter,
					getterEmail:getterEmail,
					relationship:rel
				}
			);
		});
	});
</script>
<div class="cta" id="referalForm">
<h4>Refer a friend, get cash!</h4>
Your name<br>
<input type="text" id="senderName"><br>
Your email<br>
<input type="email" id="senderEmail"><br>
Their name<br>
<input type="text" id="getterName"><br>
Their email<br>
<input type="email" id="getterEmail"><br>
Relationship<br>
<input type="email" id="relationship"><br>
<input type="submit" id="send" class="button" value="Send">
</div>
