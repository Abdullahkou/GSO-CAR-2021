<html>


<head>
    <title>Raspberry Pi - GSO Camera</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
</head>

<body>
    <span class="text center w100 grey">
        <h1> WELCOME TO GSO-CAR - &shy;Raspberry Pi - GSO Camera</h1>
    </span>
    <center><img src="http://localhost:8000/stream.mjpg" width="100%" height="100%">
</center>
    

    <div class="move">
        <div class="up">
            <button id="up">UP</button>
        </div>
        <div class="left">
            <button id="left">LEFT</button>
        </div>
        <div class="stop">
            <button id="stop">STOP</button>
        </div>
        <div class="right">
            <button id="right">RIGHT</button>
        </div>
        <div class="down">
            <button id="down">DOWN</button>
        </div>
    </div>        

    

    <div class="aufnahme">
        <div class="record">
            <button id="record"> Record</button>
        </div>
        <div class="photo">
            <button id="photo">Photo</button>
        </div>
    <br>
        <div class="stopRecord">
            <button id="stopRecord"> Stop Record</button>
        </div>
    </div>

    <div class="container">
        <div class="upleft">
            <button id="upLeft"> Up-Left</button>
        </div>
        <div class="upright">
            <button id="upRight"> Up-Right</button>
        </div>
        <div class="downleft">
            <button id="downLeft"> Down-Left</button>
        </div>
        <div class="downright">
            <button id="downRight"> Down-Right</button>
        </div>
    </div>

  <br>
        <div class="PiOff">
            <button type="submit" formaction="PiOff.php">PI-Off</button>
        </div>
        <script type="text/javascript">
        $( document ).ready(function() {

            $('#up').on('click',function(){
                $.ajax({
                url: "Up.php",
                }).done(function(data) {
                    console.log(data);
                });
            });

            $('#stop').on('click',function(){
                $.ajax({
                url: "Stop.php",
                }).done(function(data) {
                    console.log(data);
                });
            });
            
            $('#right').on('click',function(){
                $.ajax({
                url: "Right.php",
                }).done(function(data) {
                    console.log(data);
                });
            });
            
            $('#left').on('click',function(){
                $.ajax({
                url: "Left.php",
                }).done(function(data) {
                    console.log(data);
                });
            });

            $('#down').on('click',function(){
                $.ajax({
                url: "Down.php",
                }).done(function(data) {
                    console.log(data);
                });
            });
            
            $('#record').on('click',function(){
                $.ajax({
                url: "StartRecord.php",
                }).done(function(data) {
                    console.log(data);
                });
            });

            $('#stopRecord').on('click',function(){
                $.ajax({
                url: "StopRecord.php",
                }).done(function(data) {
                    console.log(data);
                });
            });
            
            $('#upLeft').on('click',function(){
                $.ajax({
                url: "UpLeft.php",
                }).done(function(data) {
                    console.log(data);
                });
            });

            $('#upRight').on('click',function(){
                $.ajax({
                url: "UpRight.php",
                }).done(function(data) {
                    console.log(data);
                });
            });

            $('#downLeft').on('click',function(){
                $.ajax({
                url: "DownLeft.php",
                }).done(function(data) {
                    console.log(data);
                });
            });
            
            $('#downRight').on('click',function(){
                $.ajax({
                url: "DownRight.php",
                }).done(function(data) {
                    console.log(data);
                });
            });
            
            $('#piOff').on('click',function(){
                $.ajax({
                url: "PiOff.php",
                }).done(function(data) {
                    console.log(data);
                });
            });

            console.log( "ready!" );
        });
        </script>
</body>
</html>
