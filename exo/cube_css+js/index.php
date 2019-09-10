<!DOCTYPE html>
<html>
<head>

    <title>ma page</title>

    <style>


    .conteneur{
        
        background-color:bisque;
        margin: auto;
        display: flex;
        width: 800px;
        height: 800px;
        justify-content: space-between;
        flex-wrap: wrap;


    }
    .carre{
        justify-content: center;
        align-items: center;
        border:1px solid red;
        color:black;
        background-color:red;
        margin: auto;
        display: flex;
        width: 200px;
        height: 200px;
    }
    #canva{
        display:flex;
        margin: auto;
        width:600px;
        height:300px;
    }
    </style>

    
</head>
<body>

<div class="conteneur"></div>
<canvas id="canva"></canvas>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){

        for(let i = 0 ; i < 6 ; i++)
            $('.conteneur').append('<div class="carre">Je suis centrée</div>');
            
        });
            let canvas = document.getElementById("canva");
            let ctx = canvas.getContext("2d");
            let ballRadius = 10;
            let x = canvas.width/2;
            let y = canvas.height-30;
            let dx = 2;
            let dy = 11;
        

            function drawBall() {
                ctx.beginPath();
                ctx.arc(x,y,ballRadius, 0 , Math.PI*2);
                ctx.fillStyle = "#0095DD";
                ctx.fill();
                ctx.closePath();
            }

            function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    drawBall();
    
    if(x + dx > canvas.width-ballRadius || x + dx < ballRadius) {
        dx = -dx;
    }
    if(y + dy > canvas.height-ballRadius || y + dy < ballRadius) {
        dy = -dy;
    }
    
    x += dx;
    y += dy;
}
            setInterval(draw,40);

    </script>
</body>


</html>