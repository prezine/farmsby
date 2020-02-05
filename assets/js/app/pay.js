function payWithPaystack(){
  let amt = $("#amount").val();
  let customers_email = $("#customers_email").val(); 
  let fm = $('input[name="type"]:checked').val();
  let monthcycle = $("div.btn-group button").text();
  monthcycle = monthcycle.split(' ')[0];
  var handler = PaystackPop.setup({
    key: 'pk_live_bb08343f497bceda1118df60cf1f7c7b19361bd4',
    //key: 'pk_test_74963e52603344b43f8934b561582606cd070f62',
    email: customers_email,
    amount: amt + '00',
    currency: "NGN",
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    metadata: {
       custom_fields: [
          {
              display_name: "Mobile Number",
              variable_name: "mobile_number",
              value: "+2348179685649"
          }
       ]
    },
    callback: function(response){
      $.ajax({
        url: "./app/model/invest",
        method: "POST",
        data: {amount:amt, farmMode:fm, cycle:monthcycle, ref:response.reference, is_approved:1},
        success:function(res) {
          if (res == 200) {
            window.location.replace("./success");
          } else {
            $(".errno").html('<div class="alert alert-danger" role="alert">'+ res +'</div>');
          }
        },
        error:function(res) {
          $(".errno").html('<div class="alert alert-danger" role="alert">'+ res +'</div>');
        }
      });
    },
    onClose: function(){
        alert('window closed');
    }
  });
  let investmentOption = $("input[type='radio']:checked").val();
  if (investmentOption == 'Standard Investment')
    if (amt < 5000 || amt > 500000) {
      alert('Try an amount between 50,000 NGN to 500,000 NGN');
    } else {
      handler.openIframe();
    }
  else if (investmentOption == 'Joint Venture')
    if (amt < 500000) {
      alert('Try an amount above 500,000 NGN');
    } else {
      handler.openIframe();
    }
  else
    return false;
}

function payWithBank() {
  let amount = $("#amount").val();
  if (amount == "") { alert("Enter a valid investment amount"); }
  else { $("#transferCard").toggleClass('hide'); }
}

$(".submitPaywithTransfer").on('click', function (e) {
  e.preventDefault();
  let amt = $("#amount").val();
  let customers_email = $("#customers_email").val(); 
  let fm = $('input[name="type"]:checked').val();
  let monthcycle = $("div.btn-group button").text();
  let randref = Math.floor((Math.random() * 1000000000) + 1);
  monthcycle = monthcycle.split(' ')[0];
  $.ajax({
      url: "./app/model/invest",
      method: "POST",
      data: {amount:amt, farmMode:fm, cycle:monthcycle, ref:randref, is_approved:0},
      success:function(res) {
        if (res == 200) {
          window.location.replace("./success");
        } else {
          $(".errno").html('<div class="alert alert-danger" role="alert">'+ res +'</div>');
        }
      },
      error:function(res) {
        $(".errno").html('<div class="alert alert-danger" role="alert">'+ res +'</div>');
      }
    });
});