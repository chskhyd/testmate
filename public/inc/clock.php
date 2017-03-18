<link rel="stylesheet" href="css/flipclock.css">
<script src="js/bootbox.min.js"></script>
 
 <script src="js/jquery.cookie.js"></script>
        <script src="js/flipclock.js"></script>
        <script type="text/javascript">
   

    $(function(){

    countDown = function(){
        var time=10;
        var currentDate = Math.round(new Date() / 1000);

        var clock = $('.clock').FlipClock({
            countdown: true,
            autostart:true,
            callbacks: {
                init: function() {
                    //store end date If it's not yet in cookies
                    if(!$.cookie('endDate')){
                        // end date = current date + 1 minutes
                        var endDate = Date.now() + time*60*1000;// 30 minutes...time to set the time (1 represent second) 

                        // store end date in cookies
                        $.cookie('endDate', Math.round(endDate / 1000)); 
                    }
                },
                stop: function() {
                   $('.message').html('The clock has stopped!');
                    $.removeCookie('endDate'); 
                    bootbox.alert("Hurray!! Time is Up Please click 'OK' to view Result.",function (result) {window.location="./lastPage";});
                  
                },
            }
        });

        /* counter will be at first 1 min if the user refresh the page the counter will 
           be the difference between current and end Date, so like this counter can 
           continue the countdown normally in case of refresh. */
        var counter = $.cookie('endDate')-currentDate;

        clock.setTime(counter);
        clock.setCountdown(true);

        clock.start();
    }

    //reset button
    $('#reset').click(function(){
        $.removeCookie('endDate'); //removing end date from cookies
        countDown(); //launch countdown function
    });
    
    $('#finish').click(function(){
        $.removeCookie('endDate'); //after finshing the exam
    });
     
    //Lanching count down on ready
    countDown();
});
        


 
    </script>
 