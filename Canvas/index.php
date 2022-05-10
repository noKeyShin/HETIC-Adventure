<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
canvas {
    border:1px solid #d3d3d3;
    background-color: #f1f1f1;
}
</style>
</head>
<body onload="startGame()">
<script>

var myGamePiece;
var mca1_1;
var mca1_2;
var mca1_3;
var mca1_4;
var mca1_5;
var mcou1_1;
var mcou1_2;
var mcou2_1;
var mcou2_2;
var mcaf2_1;
var mcaf2_2;
var mcaf2_3;
var mcou3_1;
var mcour5;
var mcou6_1;
var mcou6_2;
var mcou6_3;
var mcou6_4;
var mcou6_5;
var mcou6_6;
var mcou6_7;
var mcou6_8;
var mcou6_9;
var mcou6_10;
var mcou6_11;


function startGame() {
    myGamePiece = new component(40, 40, "red", 10, 120);
//width height color position-x position-y
    mca1_1 = new component(15, 550, "green", 0, 2100);
    mca1_2 = new component(700, 15, "green", 0, 2635); 
    mca1_3 = new component(700, 15, "green", 0, 2100);
    mca1_4 = new component(15, 150, "green", 700, 2100);
    mca1_5 = new component(15, 150, "green", 700, 2500);
    mcou1_1 = new component(500, 15, "green", 700, 2250);
    mcou1_2 = new component(500, 15, "green", 700, 2500); 
    mcou2_1 = new component(15, 1550, "green", 1200, 715); 
    mcou2_2 = new component(15, 1550, "green", 1450, 15);
    mcaf2_1 = new component(300, 15, "green", 900, 715);
    mcaf2_2 = new component(15, 700, "green", 900, 15);
    mcaf2_3 = new component(550, 15, "green", 900, 15);
    mcou3_1 = new component(950, 15, "green", 1450, 1550);
    mcour5 = new component(15, 100, "green", 2400, 1465);
    mcou6_1 = new component(550, 15, "green", 1850, 1465);
    mcou6_2 = new component(15, 250, "green", 1850, 1215);
    mcou6_3 = new component(100, 15, "green", 1850, 1200);
    mcou6_4 = new component(1050, 15, "green", 2215, 1200);
    mcou6_5 = new component(15, 1200, "green", 3250, 15);
    mcou6_6 = new component(280, 15, "green", 3250, 0);
    mcou6_7 = new component(15, 150, "green", 3515, 15);
    mcou6_8 = new component(15, 500, "green", 3515, 715);
    mcou6_9 = new component(265, 15, "green", 3515, 1200);
    mcou6_10 = new component(15,250 , "green", 3765, 1215);
    mcou6_11 = new component(615,15 , "green", 3165, 1465);
  



    myGameArea.start();
}

var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 4250;
        this.canvas.height = 2700;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.interval = setInterval(updateGameArea, 20);
    },
    clear : function() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}

function component(width, height, color, x, y) {
    this.width = width;
    this.height = height;
    this.speedX = 0;
    this.speedY = 0;    
    this.x = x;
    this.y = y;    
    this.update = function() {
        ctx = myGameArea.context;
        ctx.fillStyle = color;
        ctx.fillRect(this.x, this.y, this.width, this.height);
    }
    this.newPos = function() {
        this.x += this.speedX;
        this.y += this.speedY;        
    }    
}

function updateGameArea() {
    myGameArea.clear();
    mca1_1.update();
    mca1_2.update();
    mca1_3.update();
    mca1_4.update();
    mca1_5.update();
    mcou1_1.update();
    mcou1_2.update();
    mcou2_1.update();
    mcou2_2.update();
    mcaf2_1.update();
    mcaf2_2.update();
    mcaf2_3.update();
    mcou3_1.update();
    mcour5.update();
    mcou6_1.update();
    mcou6_2.update();
    mcou6_3.update();
    mcou6_4.update();
    mcou6_5.update();
    mcou6_6.update();
    mcou6_7.update();
    mcou6_8.update();
    mcou6_9.update();
    mcou6_10.update();
    mcou6_11.update();

    myGamePiece.newPos();    
    myGamePiece.update();
}

function moveup() {
    myGamePiece.speedY = -1; 
}

function movedown() {
    myGamePiece.speedY = 1; 
}

function moveleft() {
    myGamePiece.speedX = -1; 
}

function moveright() {
    myGamePiece.speedX = 1; 
}

function clearmove() {
    myGamePiece.speedX = 0; 
    myGamePiece.speedY = 0; 
}
</script>
<!--<div style="text-align:center;width:480px;">
  <button onmousedown="moveup()" onmouseup="clearmove()" ontouchstart="moveup()">UP</button><br><br>
  <button onmousedown="moveleft()" onmouseup="clearmove()" ontouchstart="moveleft()">LEFT</button>
  <button onmousedown="moveright()" onmouseup="clearmove()" ontouchstart="moveright()">RIGHT</button><br><br>
  <button onmousedown="movedown()" onmouseup="clearmove()" ontouchstart="movedown()">DOWN</button>
</div>-->
</body>
<script src="script.js"></script>
</html>
