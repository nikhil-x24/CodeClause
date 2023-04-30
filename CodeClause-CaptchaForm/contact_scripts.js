$(document).ready(function(){

  $("#sendnow").click(function() {

    var email = $('#email').val().trim();   
    var fname = $('#fname').val().trim();
    var category = $('#category').val().trim();
    var mobile = $('#mobile').val().trim();
    var captcha_val=$('#captcha_val').val().trim(); 
    var msg =$('textarea[name="msg"]').val();

    $.ajax({
      method:"POST",
      url: "contact_action.php",
      data:{fname: fname, category: category, mobile: mobile, msg: msg, email: email, captcha_val: captcha_val },
      beforeSend: function() {
          $('#sendnow').hide();
          $('error').hide(); 
          $('#subloader').show();
          $('#subloader').html('<img src="loader.gif" height="100">');
      },

      success: function(data){
        var obj = JSON.parse(data);
        $('#msg').html(obj.errors);
        var status=obj.status ; 
        $('#subloader').hide();
        $('#error').hide();
        $('#subloader').html("");
        $('#sendnow').show(); 
        if(status=='success')
        {
          $('#hide_form').hide();
          $('#error').hide();
        }
        $("#captcha").attr('src','captchaimg.php');       
      }
    });
  });
});

function refreshCaptcha() {
  $("#captcha").attr('src','captchaimg.php');
}