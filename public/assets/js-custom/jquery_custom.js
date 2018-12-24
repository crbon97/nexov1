function numberFormat(num, ext) {
  ext = (!ext) ? '' : ext;
  return ext+ num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") ;
}

$(document).ready(function() {
  //validate
  $("#formbooking").validate({
    rules: {
      "content": {
        required: !0
      },
      "termDate": {
        required: !0
      },
    

    
    },
    invalidHandler: function(e, r) {
      swal({
        title: "",
        text: "Các trường thông tin cần nhập bị sai. Xin vui lòng kiểm tra lại.",
        type: "error",
        confirmButtonClass: "btn btn-secondary m-btn m-btn--wide"
      })
    },
    submitHandler: function(e) {
    
      $.ajax({
        url: PATH + "insertbook",
        type: "post",
        dataType: "json",
        data: {
          Coin_ID : $("#idCoin").val(),
          User_ID :2,
          Total_coin: $("#bitcoin").val(),
          Total_usd: $('#firstPrice').text(),
          Price_usd: $('#priceUSD').val(),
          Loan_limit:$('#ussd').val(),
          Percent:$('#percentC').val(),
          Status:1,
          Term : $('#termDate').val(),
          Content: $('#content').val()
        },
        success: function(response) {
          var res = (typeof response === 'object') ? response : JSON.parse(response);
          if (res.status == true) {
            swal({
              title: "",
              text: res.message,
              type: "success",
              confirmButtonClass: "btn btn-secondary m-btn m-btn--wide"
            })
          } else {
            swal({
              title: "",
              text: "Gửi thất bại",
              type: "error",
              confirmButtonClass: "btn btn-secondary m-btn m-btn--wide"
            })
          }
        }
      });
    }
  });
  
  //end-validate
  //coppy
  $('.js-tooltip').tooltip();
  $('.js-copy').click(function() {
    var text = $("#wallet_coin").val();
    var el = $(this);
    copyToClipboard(text, el);
    $("#wallet_coin").select();
  });
    //end-coppy

  $('.DayPickerInput input').datepicker({
    format: 'yyyy/mm/dd',
  
  });
});
//decimal
function round(value, exp) {
  if (typeof exp === 'undefined' || +exp === 0)
    return Math.round(value);

  value = +value;
  exp = +exp;

  if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0))
    return NaN;

  value = value.toString().split('e');
  value = Math.round(+(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp)));

  value = value.toString().split('e');
  return +(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp));
}
//end - decimal
// coppytext
function copyToClipboard(text, el) {
  var copyTest = document.queryCommandSupported('copy');
  var elOriginalText = el.attr('data-original-title');

  if (copyTest === true) {
    var copyTextArea = document.createElement("textarea");
    copyTextArea.value = text;
    document.body.appendChild(copyTextArea);
    copyTextArea.select();
    try {
      var successful = document.execCommand('copy');
      var msg = successful ? 'Copied!' : 'Whoops, not copied!';
      el.attr('data-original-title', msg).tooltip('show');
    } catch (err) {
      console.log('Oops, unable to copy');
    }
    document.body.removeChild(copyTextArea);
    el.attr('data-original-title', elOriginalText);
  } else {
    // Fallback if browser doesn't support .execCommand('copy')
    window.prompt("Copy to clipboard: Ctrl+C or Command+C, Enter", text);
  }
}
// end-coppytext
