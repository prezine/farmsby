$(".toggleWithdraw").on('click', function (e) {
	let grabID = $(this).data('id');
	let profit = $(this).data('profit');
	$(".investID").val(grabID);
	$(".yourProfit").val(profit);
});

$(".withdraw").on('click', function () {
	let withdrawalType = $(this).data('state');
	let baseurl = $(this).data('baseurl');
	let investID = $(".investID").val();
	let profit = $(".yourProfit").val();
	if (withdrawalType == 1) {
		window.location.href = baseurl+'app/model/request_withdrawal?withdrawalType=1&investID='+investID+'&profit='+profit;
	} else {
		window.location.href = baseurl+'app/model/request_withdrawal?withdrawalType=2&investID='+investID+'&profit='+profit;
	}
});