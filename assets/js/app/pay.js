function payWithRave() {
  let amt = $("#amount").val();
  let customers_email = $("#customers_email").val(); 
  let fm = $('input[name="type"]:checked').val();
  let monthcycle = $("div.btn-group button").text();
  monthcycle = monthcycle.split(' ')[0];
  let API_publicKey = "FLWPUBK-972d48161a316ca44f7c41dec8acb671-X";
  let investmentOption = $("input[type='radio']:checked").val();
  if (investmentOption == 'Standard Investment')
    if (amt < 5000 || amt > 500000) {
      alert('Try an amount between 50,000 NGN to 500,000 NGN');
    } else {
      var x = getpaidSetup({
          PBFPubKey: API_publicKey,
          customer_email: customers_email,
          amount: amt,
          customer_phone: "2348179685649",
          currency: "NGN",
          txref: "rave-123456",
          meta: [{
              metaname: "flightID",
              metavalue: "AP1234"
          }],
          onclose: function() {},
          callback: function(response) {
              var txref = response.tx.txRef; // collect txRef returned and pass to a          server page to complete status check.
              console.log("This is the response returned after a charge", response);
              if (
                  response.tx.chargeResponseCode == "00" ||
                  response.tx.chargeResponseCode == "0"
              ) {
                  $.ajax({
                    url: "./app/model/invest",
                    method: "POST",
                    data: {amount:amt, farmMode:fm, cycle:monthcycle, ref:txref},
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
              } else {
                  // redirect to a failure page.
              }

              x.close(); // use this to close the modal immediately after payment.
          }
      });
    }
  else if (investmentOption == 'Joint Venture')
    if (amt < 500000) {
      alert('Try an amount above 500,000 NGN');
    } else {
      var x = getpaidSetup({
          PBFPubKey: API_publicKey,
          customer_email: customers_email,
          amount: amt,
          customer_phone: "2348179685649",
          currency: "NGN",
          txref: "rave-123456",
          meta: [{
              metaname: "flightID",
              metavalue: "AP1234"
          }],
          onclose: function() {},
          callback: function(response) {
              var txref = response.tx.txRef; // collect txRef returned and pass to a          server page to complete status check.
              console.log("This is the response returned after a charge", response);
              if (
                  response.tx.chargeResponseCode == "00" ||
                  response.tx.chargeResponseCode == "0"
              ) {
                  $.ajax({
                    url: "./app/model/invest",
                    method: "POST",
                    data: {amount:amt, farmMode:fm, cycle:monthcycle, ref:txref},
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
              } else {
                  // redirect to a failure page.
              }

              x.close(); // use this to close the modal immediately after payment.
          }
      });
    }
  else
    return false;
}

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
        data: {amount:amt, farmMode:fm, cycle:monthcycle, ref:response.reference},
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