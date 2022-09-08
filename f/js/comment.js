
function Comments(id,name, email ,comment)
{
	this.id = id;
	this.name = name;
	this.email = email;
	this.comment = comment;
}
$(document).ready(function(){
$("#comment").on("submit",function(e){
	e.preventDefault();
	var arr = $(this).serializeArray();
	var str = /[A-Za-z]{2,50}/;
	var email=/[A-Za-z0-9]{3,150}\@[A-Za-z]{3,30}\.[A-Za-z]{3,20}/;

	if (!str.test(arr[1].value))
	{
		$("#comment .name").text("The name should be text and 3 or mor character");
	}
	else if (!email.test(arr[2].value))
	{
		$("#comment .email").text("Email must be vaild");
	}
	else
	{
		comments=new Comments(arr[0].value,arr[1].value,arr[2].value,arr[3].value);
		$.ajax({
			"type":"POST",
			"url":"server.php",
			"data":{"comments":JSON.stringify(comments)},
			"success":function(response){           
               if(response == '1')
                    {
                    $("#comment h3").text("تم حفظ تعليقك شكرا لك");
                    $("#comment input,#comment textarea").val('');
                    }
                else{
                    $("#comment h3").text("Something error try agin !");
                }
			}
		});
	}
});
});