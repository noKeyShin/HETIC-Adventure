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
var mca1_1, mca1_2, mca1_3, mca1_4, mca1_5,
    mcou1_1, mcou1_2,
    mcou2_1, mcou2_2,
    mcaf2_1, mcaf2_2, mcaf2_3,
    mcou3_1,
    mcour1, mcour2, mcour3, mcour4, mcour5,
    mcou6_1, mcou6_2, mcou6_3, mcou6_4, mcou6_5, mcou6_6, mcou6_7, mcou6_8, mcou6_9, mcou6_10, mcou6_11,
    mcaf3_1, mcaf3_2, mcaf3_3, mcaf3_4, mcaf3_5, mcaf3_6, mcaf3_7,
    msalle2_2_1, msalle2_2_2, msalle2_2_3,
    mfoyer1, mfoyer2, mfoyer3,
    ma106_1, ma106_2, ma106_3, ma106_4, ma106_5, ma106_6;

function startGame() {
    myGamePiece = new component(40, 40, "red", 10, 120);
//width height color position-x position-y
    mca1_1 = new component(15, 550, "green", 0, 2115);
    mca1_2 = new component(730, 15, "green", 0, 2665); 
    mca1_3 = new component(730, 15, "green", 0, 2100);
    mca1_4 = new component(15, 150, "green", 715, 2100);
    mca1_5 = new component(15, 150, "green", 715, 2515);
    mcou1_1 = new component(500, 15, "green", 715, 2250);
    mcou1_2 = new component(500, 15, "green", 715, 2515); 
    mcou2_1 = new component(15, 1550, "green", 1200, 715); 
    mcou2_2 = new component(15, 1550, "green", 1450, 15);
    mcou2_3 = new component(280, 15, "green", 1200, 2665); 
    mcou2_4 = new component(15, 150, "green", 1200, 2515); 
    mcaf2_1 = new component(300, 15, "green", 900, 715);
    mcaf2_2 = new component(15, 700, "green", 900, 15);
    mcaf2_3 = new component(550, 15, "green", 900, 15);
    mcou3_1 = new component(950, 15, "green", 1450, 1550);
    mcour1 = new component(15, 650, "green", 2400, 1815);
    mcour2 = new component(780, 15, "green", 2400, 2465);
    mcour3 = new component(15, 475, "green", 3165, 1990);
    mcour4 = new component(15, 375, "green", 3165, 1465);
    mcour5 = new component(15, 100, "green", 2400, 1465);
    mcou6_1 = new component(850, 15, "green", 1850, 1465);
    mcou6_2 = new component(15, 250, "green", 1850, 1215);
    mcou6_3 = new component(100, 15, "green", 1850, 1200);
    mcou6_4 = new component(1050, 15, "green", 2215, 1200);
    mcou6_5 = new component(15, 1200, "green", 3250, 15);
    mcou6_6 = new component(280, 15, "green", 3250, 0);
    mcou6_7 = new component(15, 350, "green", 3515, 15);
    mcou6_8 = new component(15, 700, "green", 3515, 515);
    mcou6_9 = new component(265, 15, "green", 3515, 1200);
    mcou6_10 = new component(15,250 , "green", 3765, 1215);
    mcou6_11 = new component(915,15 , "green", 2865, 1465);
    mcaf3_1 = new component(15, 250, "green", 1950, 965);
    mcaf3_2 = new component(150, 15, "green", 1815, 965);
    mcaf3_3 = new component(15, 700, "green", 1800, 280);
    mcaf3_4 = new component(550, 15, "green", 1800, 280);
    mcaf3_5 = new component(15, 700, "green", 2350, 280);
    mcaf3_6 = new component(150, 15, "green", 2215, 965);
    mcaf3_7 = new component(15, 250, "green", 2215, 965);
    msalle2_2_1 = new component(700, 15, "green", 3520, 150);
    msalle2_2_2 = new component(15, 550, "green", 4215, 150);
    msalle2_2_3 = new component(715, 15, "green", 3515, 700);
    mfoyer1 = new component(515, 15, "green", 3165, 1600);
    mfoyer2 = new component(15, 600, "green", 3665, 1615);
    mfoyer3 = new component(515, 15, "green", 3165, 2215);
    ma106_1= new component(100, 15, "green", 1465, 1815);
    ma106_2= new component(700, 15, "green", 1715, 1815);
    ma106_3= new component(15, 500, "green", 1465, 1815);
    ma106_4= new component(15, 700, "green", 2015, 1815);
    ma106_5= new component(565, 15, "green", 1465, 2515);
    ma106_6= new component(15, 215, "green", 1465, 2450);


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
    mca1_1.update(), mca1_2.update(), mca1_3.update(), mca1_4.update(), mca1_5.update(),
    mcou1_1.update(), mcou1_2.update(), mcou2_1.update(), mcou2_2.update(), mcou2_3.update(), mcou2_4.update(),
    mcaf2_1.update(), mcaf2_2.update(), mcaf2_3.update(),
    mcou3_1.update(),
    mcour1.update(), mcour2.update(), mcour3.update(), mcour4.update(), mcour5.update(),
    mcou6_1.update(), mcou6_2.update(), mcou6_3.update(), mcou6_4.update(), mcou6_5.update(), mcou6_6.update(), mcou6_7.update(), mcou6_8.update(), mcou6_9.update(), mcou6_10.update(), mcou6_11.update(),
    mcaf3_1.update(), mcaf3_2.update(), mcaf3_3.update(), mcaf3_4.update(), mcaf3_5.update(), mcaf3_6.update(), mcaf3_7.update(),
    msalle2_2_1.update(), msalle2_2_2.update(), msalle2_2_3.update(),
    mfoyer1.update(), mfoyer2.update(), mfoyer3.update(),
    ma106_1.update(), ma106_2.update(), ma106_3.update(), ma106_4.update(), ma106_5.update(), ma106_6.update();
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
