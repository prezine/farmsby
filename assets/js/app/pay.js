function payWithRave() {
  let amt = $("#amount").val();
  let fm = $('input[name="type"]:checked').val();
  let monthcycle = $("div.btn-group button").text();
  monthcycle = monthcycle.split(' ')[0];
  let API_publicKey = "FLWPUBK_TEST-65299f2cdf8b85a67eaa1fde8fa6f793-X";
    var x = getpaidSetup({
        PBFPubKey: API_publicKey,
        customer_email: "tomprezine@gmail.com",
        amount: amt,
        customer_phone: "23408179685649",
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

function payWithPaystack(){
  let amt = $("#amount").val();
  let fm = $('input[name="type"]:checked').val();
  let monthcycle = $("div.btn-group button").text();
  monthcycle = monthcycle.split(' ')[0];
  var handler = PaystackPop.setup({
    key: 'pk_test_58b1d0bd712f043fd0941bdb21bd03936458dbe9',
    email: 'tomprezine@gmail.com',
    amount: amt + '00',
    currency: "NGN",
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    metadata: {
       custom_fields: [
          {
              display_name: "Mobile Number",
              variable_name: "mobile_number",
              value: "+2348012345678"
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
  handler.openIframe();
}