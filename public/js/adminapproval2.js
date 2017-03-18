/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$(".approve").bind("click", deleteQue);
$(".deletegrab1").bind("click", update);

 function deleteQue() {

           var par = $($(this).closest("tr"));  //tr
                    var offerdelete = 'offerdelete';
                    var rid = $(this).data('gid');
                    $('#deleteoffer1').attr("disabled", true);
                    bootbox.confirm("Are you sure you want to Delete this Question.?", function (result) {
                        if (result) {

                            if (par) {
                                $.ajax({
                                    url:'./allques/process',
                                    type: "POST",
                                    async: false,
                                    cache: false,
                                    data: {'gid': rid},
                                    success: function (response) {
                                        //$('#output').html("Your form was submitted!");
                                            window.location= "./allques";
                                        
                                        }
                                });
                            }
                        } else {

                        }
                    });

                }
                ;
                ;
                
                
                var gid1;
                var q;
             
                function update() {

                   
                    gid1 = $(this).data('gid');
                     console.log(gid1);
                     
                     
                     q= $(this).data('q');
                     $('#ques').val(q);
                     q=$(this).data('o1');
                     $('#opt1').val(q);
                     q=$(this).data('o2');
                     $('#opt2').val(q);
                     q=$(this).data('o3');
                     $('#opt3').val(q);
                     q=$(this).data('o4'); 
                     $('#opt4').val(q);
                     q=$(this).data('ans');
                     $('#ans').val(q).change();
                                     
                }
                ;
    
    $('#basicchnge').click(function (e){
     
        var ques = $('#ques').val();
        var opt1 = $('#opt1').val();
        var opt2 = $('#opt2').val();
        var opt3 = $('#opt3').val();
        var opt4 = $('#opt4').val();
        var ans = $('#ans').val();

   
    
    if(ques!='' && opt1!=''&& opt2!=''&& opt3!=''&& opt4!='' && ans !='')
    {  
        
           $.ajax({
                                    url: './allques/update',
                                    type: "POST",
                                    async: false,
                                    cache: false,
                                    data: {'gid': gid1,'ques':ques,'opt1':opt1,'opt2': opt2,'opt3': opt3,'opt4': opt4,'ans': ans},
                                    success: function (response) {
                                        //$('#output').html("Your form was submitted!");

                                        
                                                
                                              window.location = "./allques";
                                        
                                    }
                                });
                            }
                            
                        
       
    });
    