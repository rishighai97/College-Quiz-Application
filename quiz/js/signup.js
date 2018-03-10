$(document).ready(function(){

        $("#signup").fadeIn(3000);
        $("#h1").fadeIn(5000);

var  validator = $("#form").validate({
        rules: {
        		 fname: {
                     		required: true
               			},
         		 mname: {
                     		required: true
               			},
         		 lname: {
                     		required: true
               			},
         		  roll: {
                     		roll:true
               			},
         		  email: {
                     		required: true,
                     		email:true
               			 },
         		  password: { 
         			 		required: true
         	  			 },
         		  retype_password: { 
         					equalTo: '#password'
         	   			 }
        		},
        messages: {
         		  fname: {
                    		 required: "Enter your first name"
               			 },
         		  mname: {
                     		  required: "Enter your middle name"
                         },
         		  lname: {
                     		  required: "Enter your last name"
               			 },
         		  roll: {
                     		  roll:"Enter your 7 digit roll number"
               			},
         		  email: {
                     		  required: "Enter your Email ID",
                     		  email:"Email ID is invalid. The correct format is abc@somaiya.edu"
               			},
         		  password: { 
         			 		  required: "Enter the password",	 
         	   			},
         		  retype_password: { 
         					  equalTo:"The passwords do not match"
         	   			}
         		}
 });



$('#submit').click(function() {
        $("#form").valid();
    });

$.validator.addMethod("roll",
function(value,element) {
   return /^[0-9]{7,7}$/.test(value);
});


});
