$(document).ready(function(){
  $("#mng_btn").click(function(){
    var name=$("#exampleInputEmail1").val();
    var password=$("#exampleInputPassword1").val();
    $("#spinner_one").html('<img width="90" src="img/loading.gif" alt="" />');
    setTimeout(function(){
      $.ajax({
        url:"check_admin_login.php",
        method:"POST",
        data:{uname:name,pwd:password},
        success:function(data){
          $("#spinner_one img").remove();
          if(data=="match"){
            window.location.href = "management.php";
          }
          else{
            $("#msg").html(data);
          }

        }
      });
    },2000);
  });
});
