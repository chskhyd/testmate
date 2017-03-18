
$(".approve").bind("click", deleteTest);


 function deleteTest() {

           var par = $($(this).closest("tr"));  //tr
                    var offerdelete = 'offerdelete';
                    var rid = $(this).data('gid');
                    $('#deleteoffer1').attr("disabled", true);
                    bootbox.confirm("Are you sure you want to Delete this Test Result.?", function (result) {
                        if (result)
                        {
                            if (par) {
                                $.ajax({
                                    url: './adminHome/process',
                                    type: "POST",
                                    async: false,
                                    cache: false,
                                    data: {'gid': rid},
                                    success: function (response) {
                                        //$('#output').html("Your form was submitted!");
                                            window.location = "./adminHome";
                                        
                                        }
                                });
                            }
                        } else {

                        }
                    });

                }
                ;
                ;
                
                
                