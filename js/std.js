$(document).ready(function(){
  $("#std_login").click(function(){
    var std_name=$("#std_user_name").val();
    var std_password=$("#std_password").val();
    $("#spinner_two").html('<img width="90" src="img/loading.gif" alt="" />');
    setTimeout(function(){
      $.ajax({
        url:"check_std_login.php",
        method:"POST",
        data:{u_name:std_name,pass:std_password},
        success:function(data){
          $("#spinner_two img").remove();
          if(data=="match"){
            window.location.href = "std_login.php";
          }
          else{
            $("#msg2").html(data);
          }

        }
      });
    },2000);

  });


});
