$(document).ready(
	function()
	{
		$('#menuEspaceClient').hide();

		$('#btnEspaceClient').mouseenter(
			function()
			{
				$('#menuEspaceClient').stop(true, true).delay(200).slideDown();
				$('#btnEspaceClient').css('background', '#1d933c');
			});
		$('#btnEspaceClient').mouseleave(
			function()
			{
				$('#menuEspaceClient').stop(true, true).delay(200).slideUp();
				$('#btnEspaceClient').css('background', '#4aaf67');
			});
	});