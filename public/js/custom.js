function accordionToggle(id) {
	$("#faq-" + id + "-").toggleClass("hidden");
}

function checkIfOpen() {
	token = token_for_js.value;
	console.log(token);

	// make reqeust to server /entrance/is_token_user post and pass token
	$.post(
		"/entrance/is_token_user",
		{
			token: token,
		},
		function (data, status) {
			console.log(data);
			if (!data) {
				window.location.href = "/open_door";
			}
		}
	);
}
