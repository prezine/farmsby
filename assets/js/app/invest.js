$("input[id='invType']").on('click', function() {
	let investmentOption = $("input[type='radio']:checked").val();
	let monthSelector = [
		'<button type="button" class="btn btn-success mpicker">3 Months</button>\
	    <button type="button" class="btn btn-success mpicker">6 Months</button>\
        <button type="button" class="btn btn-success mpicker">9 Months</button>\
        <button type="button" class="btn btn-success mpicker">12 Months</button>',

	    '<button type="button" class="btn btn-success mpicker">6 Months</button>\
        <button type="button" class="btn btn-success mpicker">12 Months</button>'
	];
    if (investmentOption == 'Standard Investment')
        $("div[role='group']").html(monthSelector[0]);
    else if (investmentOption == 'Joint Venture')
    	$("div[role='group']").html(monthSelector[1]);
    else
    	return false;
});

$(document).on('click', 'div.btn-group button', function(){ 
	$(".mpicker").removeClass('active');
	$(this).addClass('active');
	let activeMonth = $(this).text();
	let amount = $("#amount").val();
	let profit = $("#profit");
	let investmentOption = $('input[name="type"]:checked').val();
	let splitPercetage = (investmentOption == "Standard Investment") ? 50 / 12 : 75 / 12 ;
	if (activeMonth.split(' ')[0] == '3') {
		let calc = ((splitPercetage * 3) / 100) * amount;
		profit.val(parseInt(calc) + parseInt(amount));
	} else if (activeMonth.split(' ')[0] == '6') {
		let calc = ((splitPercetage * 6) / 100) * amount;
		profit.val(parseInt(calc) + parseInt(amount));
	} else if (activeMonth.split(' ')[0] == '9') {
		let calc = ((splitPercetage * 9) / 100) * amount;
		profit.val(parseInt(calc) + parseInt(amount));
	} else {
		let calc = ((splitPercetage * 12) / 100) * amount;
		profit.val(parseInt(calc) + parseInt(amount));
	}
});