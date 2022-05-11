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
    ma106_1, ma106_2, ma106_3, ma106_4, ma106_5, ma106_6,
    tdt, murfoyerinterieur, bbf,
    bureaua106, tablea106_1, tablea106_2, tablea106_3, tablea106_4, tablea106_5, tablea106_6,
    mocafet1_1, mocafet1_2, tablecafet1_1, tablecafet1_2,tablecafet1_3, tablecafet1_4,
    tablecafet2_1, tablecafet2_2, tablecafet2_3, tablecafet2_4, mocafet2,
    mocaf3_1, mocaf3_2, tablecafet3_1, tablecafet3_2, tablecafet3_3, tablecafet3_4,
    tablesalle_1, tablesalle_2, tablesalle_3, tablesalle_4, tablesalle_5, tablesalle_6, bureausalle;

function startGame() {
    myGamePiece = new component(40, 40, "red", 3000, 2400);
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
    mcou6_3 = new component(115, 15, "green", 1850, 1200);
    mcou6_4 = new component(1050, 15, "green", 2215, 1200);
    mcou6_5 = new component(15, 1200, "green", 3250, 15);
    mcou6_6 = new component(280, 15, "green", 3250, 0);
    mcou6_7 = new component(15, 350, "green", 3515, 15);
    mcou6_8 = new component(15, 700, "green", 3515, 515);
    mcou6_9 = new component(265, 15, "green", 3515, 1200);
    mcou6_10 = new component(15,250 , "green", 3765, 1215);
    mcou6_11 = new component(915,15 , "green", 2865, 1465);
    mcaf3_1 = new component(15, 250, "green", 1950, 950);
    mcaf3_2 = new component(150, 15, "green", 1815, 935);
    mcaf3_3 = new component(15, 700, "green", 1800, 250);
    mcaf3_4 = new component(550, 15, "green", 1815, 250);
    mcaf3_5 = new component(15, 700, "green", 2365, 250);
    mcaf3_6 = new component(150, 15, "green", 2215, 935);
    mcaf3_7 = new component(15, 265, "green", 2215, 950);
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
    tcour1 = new component(150, 50, "blue", 2565, 2130);
    tcour2 = new component(150, 50, "blue", 2915, 1730);
    tdt = new component(250, 100, "blue", 3300, 1700);
    murfoyerinterieur = new component(350, 50, "blue", 3250, 1950);
    bbf = new component(150, 75, "blue", 3350, 2075);
    bureaua106 = new component(150, 50, "blue", 1750, 2415);
    tablea106_1 = new component(150, 50, "blue", 1550, 2315);
    tablea106_2 = new component(150, 50, "blue", 1815, 2315);
    tablea106_3 = new component(150, 50, "blue", 1815, 2115);
    tablea106_4 = new component(150, 50, "blue", 1550, 2115);
    tablea106_5 = new component(150, 50, "blue", 1550, 1915);
    tablea106_6 = new component(150, 50, "blue", 1815, 1915);
    mocafet1_1 = new component(50, 150, "blue", 15, 2315);
    mocafet1_2 = new component(150, 50, "blue", 265, 2115);
    tablecafet1_1 = new component(50, 150, "blue", 165, 2465);
    tablecafet1_2 = new component(50, 150, "blue", 165, 2215);
    tablecafet1_3 = new component(50, 150, "blue", 465, 2215);
    tablecafet1_4 = new component(50, 150, "blue", 465, 2465);
    tablecafet2_1 = new component(150, 50, "blue", 965, 165);
    tablecafet2_2 = new component(150, 50, "blue", 1265, 165);
    tablecafet2_3 = new component(150, 50, "blue", 1265, 415);
    tablecafet2_4 = new component(150, 50, "blue", 965, 415);
    mocafet2 = new component(150, 50, "yellow", 915, 665);
    mocaf3_1 = new component(150, 50, "blue", 2015, 265);
    mocaf3_2 = new component(50, 150, "blue", 1815, 785);
    tablecafet3_1 = new component(150, 50, "blue", 1865, 415);
    tablecafet3_2 = new component(150, 50, "blue", 2165, 415);
    tablecafet3_3 = new component(150, 50, "blue", 2165, 665);
    tablecafet3_4 = new component(150, 50, "blue", 1865, 665);
    tablesalle_1 = new component(50, 150, "blue", 3615, 215);
    tablesalle_2 = new component(50, 150, "blue", 3815, 215);
    tablesalle_3 = new component(50, 150, "blue", 4015, 215);
    tablesalle_4 = new component(50, 150, "blue", 4015, 515);
    tablesalle_5 = new component(50, 150, "blue", 3815, 515);
    tablesalle_6 = new component(50, 150, "blue", 3615, 515);
    bureausalle = new component(50, 150, "blue", 4115, 265);

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
    ma106_1.update(), ma106_2.update(), ma106_3.update(), ma106_4.update(), ma106_5.update(), ma106_6.update(),
    tcour1.update(), tcour2.update();
    tdt.update(), murfoyerinterieur.update(), bbf.update();
    bureaua106.update(), tablea106_1.update(), tablea106_2.update(), tablea106_3.update(), tablea106_4.update(), tablea106_5.update(), tablea106_6.update(),
    mocafet1_1.update(), mocafet1_2.update(), tablecafet1_1.update(), tablecafet1_2.update(),tablecafet1_3.update(), tablecafet1_4.update(),
    tablecafet2_1.update(), tablecafet2_2.update(), tablecafet2_3.update(), tablecafet2_4.update(), mocafet2.update(),
    mocaf3_1.update(), mocaf3_2.update(), tablecafet3_1.update(), tablecafet3_2.update(), tablecafet3_3.update(), tablecafet3_4.update(),
    tablesalle_1.update(), tablesalle_2.update(), tablesalle_3.update(), tablesalle_4.update(), tablesalle_5.update(), tablesalle_6.update(), bureausalle.update();
    myGamePiece.newPos();   
    myGamePiece.update();




if(myGamePiece.x < mcour4.x + mcour4.width &&
    myGamePiece.x + myGamePiece.width > mcour4.x &&
    myGamePiece.height + myGamePiece.y > mcour4.y &&
    myGamePiece.height + myGamePiece.y < mcour4.y + mcour4.height) {
    console.log("collision");
    if (myGamePiece.x > mcour4.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
    }

 if(myGamePiece.x < mcour3.x + mcour3.width &&
    myGamePiece.x + myGamePiece.width > mcour3.x &&
    myGamePiece.height + myGamePiece.y > mcour3.y &&
    myGamePiece.height + myGamePiece.y < mcour3.y+mcour3.height) {
    console.log("collision");
    if (myGamePiece.x > mcour3.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < mcour1.x + mcour1.width &&
    myGamePiece.x + myGamePiece.width > mcour1.x &&
    myGamePiece.height + myGamePiece.y > mcour1.y &&
    myGamePiece.height + myGamePiece.y < mcour1.y+mcour1.height) {
    console.log("collision");
    if (myGamePiece.x > mcour1.x)
    {
    myGamePiece.x += 10;
    }
}

if(myGamePiece.x < mcour5.x + mcour5.width &&
    myGamePiece.x + myGamePiece.width > mcour5.x &&
    myGamePiece.height + myGamePiece.y > mcour5.y &&
    myGamePiece.height + myGamePiece.y < mcour5.y+mcour5.height) {
    console.log("collision");
    if (myGamePiece.x > mcour5.x)
    {
    myGamePiece.x += 10;
    }
}

if(myGamePiece.x < mfoyer2.x + mfoyer2.width &&
    myGamePiece.x + myGamePiece.width > mfoyer2.x &&
    myGamePiece.height + myGamePiece.y > mfoyer2.y &&
    myGamePiece.height + myGamePiece.y < mfoyer2.y+mfoyer2.height) {
    console.log("collision");
    if (myGamePiece.x < mfoyer2.x)
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < ma106_4.x + ma106_4.width &&
    myGamePiece.x + myGamePiece.width > ma106_4.x &&
    myGamePiece.height + myGamePiece.y > ma106_4.y &&
    myGamePiece.height + myGamePiece.y < ma106_4.y+ma106_4.height) {
    console.log("collision");
    if (myGamePiece.x < ma106_4.x)
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < ma106_3.x + ma106_3.width &&
    myGamePiece.x + myGamePiece.width > ma106_3.x &&
    myGamePiece.height + myGamePiece.y > ma106_3.y &&
    myGamePiece.height + myGamePiece.y < ma106_3.y+ma106_3.height) {
    console.log("collision");
    if (myGamePiece.x > ma106_3.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < ma106_6.x + ma106_6.width &&
    myGamePiece.x + myGamePiece.width > ma106_6.x &&
    myGamePiece.height + myGamePiece.y > ma106_6.y &&
    myGamePiece.height + myGamePiece.y < ma106_6.y+ma106_6.height) {
    console.log("collision");
    if (myGamePiece.x > ma106_6.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < mcou2_4.x + mcou2_4.width &&
    myGamePiece.x + myGamePiece.width > mcou2_4.x &&
    myGamePiece.height + myGamePiece.y > mcou2_4.y &&
    myGamePiece.height + myGamePiece.y < mcou2_4.y+mcou2_4.height) {
    console.log("collision");
    if (myGamePiece.x > mcou2_4.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < mcou2_1.x + mcou2_1.width &&
    myGamePiece.x + myGamePiece.width > mcou2_1.x &&
    myGamePiece.height + myGamePiece.y > mcou2_1.y &&
    myGamePiece.height + myGamePiece.y < mcou2_1.y+mcou2_1.height) {
    console.log("collision");
    if (myGamePiece.x > mcou2_1.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < mca1_5.x + mca1_5.width &&
    myGamePiece.x + myGamePiece.width > mca1_5.x &&
    myGamePiece.height + myGamePiece.y > mca1_5.y &&
    myGamePiece.height + myGamePiece.y < mca1_5.y+mcou2_4.height) {
    console.log("collision");
    if (myGamePiece.x < mca1_5.x)
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < mca1_4.x + mca1_4.width &&
    myGamePiece.x + myGamePiece.width > mca1_4.x &&
    myGamePiece.height + myGamePiece.y > mca1_4.y &&
    myGamePiece.height + myGamePiece.y < mca1_4.y+mca1_4.height) {
    console.log("collision");
    if (myGamePiece.x < mca1_4.x)
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < mca1_1.x + mca1_1.width &&
    myGamePiece.x + myGamePiece.width > mca1_1.x &&
    myGamePiece.height + myGamePiece.y > mca1_1.y &&
    myGamePiece.height + myGamePiece.y < mca1_1.y+mca1_1.height) {
    console.log("collision");
    if (myGamePiece.x > mca1_1.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < mcou2_2.x + mcou2_2.width &&
    myGamePiece.x + myGamePiece.width > mcou2_2.x &&
    myGamePiece.height + myGamePiece.y > mcou2_2.y &&
    myGamePiece.height + myGamePiece.y < mcou2_2.y+mcou2_2.height) {
    console.log("collision");
    if (myGamePiece.x > mcou2_2.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < mcaf2_2.x + mcaf2_2.width &&
    myGamePiece.x + myGamePiece.width > mcaf2_2.x &&
    myGamePiece.height + myGamePiece.y > mcaf2_2.y &&
    myGamePiece.height + myGamePiece.y < mcaf2_2.y+mcaf2_2.height) {
    console.log("collision");
    if (myGamePiece.x > mcaf2_2.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < mcaf3_3.x + mcaf3_3.width &&
    myGamePiece.x + myGamePiece.width > mcaf3_3.x &&
    myGamePiece.height + myGamePiece.y > mcaf3_3.y &&
    myGamePiece.height + myGamePiece.y < mcaf3_3.y+mcaf3_3.height) {
    console.log("collision");
    if (myGamePiece.x > mcaf3_3.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < mcaf3_5.x + mcaf3_5.width &&
    myGamePiece.x + myGamePiece.width > mcaf3_5.x &&
    myGamePiece.height + myGamePiece.y > mcaf3_5.y &&
    myGamePiece.height + myGamePiece.y < mcaf3_5.y+mcaf3_5.height) {
    console.log("collision");
    if (myGamePiece.x > mcaf3_5.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < mcou6_2.x + mcou6_2.width &&
    myGamePiece.x + myGamePiece.width > mcou6_2.x &&
    myGamePiece.height + myGamePiece.y > mcou6_2.y &&
    myGamePiece.height + myGamePiece.y < mcou6_2.y+mcou6_2.height) {
    console.log("collision");
    if (myGamePiece.x > mcou6_2.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < mcaf3_1.x + mcaf3_1.width &&
    myGamePiece.x + myGamePiece.width > mcaf3_1.x &&
    myGamePiece.height + myGamePiece.y > mcaf3_1.y &&
    myGamePiece.height + myGamePiece.y < mcaf3_1.y+mcaf3_1.height) {
    console.log("collision");
    if (myGamePiece.x > mcaf3_1.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < mcaf3_7.x + mcaf3_7.width &&
    myGamePiece.x + myGamePiece.width > mcaf3_7.x &&
    myGamePiece.height + myGamePiece.y > mcaf3_7.y &&
    myGamePiece.height + myGamePiece.y < mcaf3_7.y+mcaf3_7.height) {
    console.log("collision");
    if (myGamePiece.x > mcaf3_7.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < mcou6_5.x + mcou6_5.width &&
    myGamePiece.x + myGamePiece.width > mcou6_5.x &&
    myGamePiece.height + myGamePiece.y > mcou6_5.y &&
    myGamePiece.height + myGamePiece.y < mcou6_5.y+mcou6_5.height) {
    console.log("collision");
    if (myGamePiece.x > mcou6_5.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < mcou6_7.x + mcou6_7.width &&
    myGamePiece.x + myGamePiece.width > mcou6_7.x &&
    myGamePiece.height + myGamePiece.y > mcou6_7.y &&
    myGamePiece.height + myGamePiece.y < mcou6_7.y+mcou6_7.height) {
    console.log("collision");
    if (myGamePiece.x > mcou6_7.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < mcou6_8.x + mcou6_8.width &&
    myGamePiece.x + myGamePiece.width > mcou6_8.x &&
    myGamePiece.height + myGamePiece.y > mcou6_8.y &&
    myGamePiece.height + myGamePiece.y < mcou6_8.y+mcou6_8.height) {
    console.log("collision");
    if (myGamePiece.x > mcou6_8.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < mcou6_8.x + mcou6_8.width &&
    myGamePiece.x + myGamePiece.width > mcou6_8.x &&
    myGamePiece.height + myGamePiece.y > mcou6_8.y &&
    myGamePiece.height + myGamePiece.y < mcou6_8.y+mcou6_8.height) {
    console.log("collision");
    if (myGamePiece.x > mcou6_8.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < mcou6_10.x + mcou6_10.width &&
    myGamePiece.x + myGamePiece.width > mcou6_10.x &&
    myGamePiece.height + myGamePiece.y > mcou6_10.y &&
    myGamePiece.height + myGamePiece.y < mcou6_10.y+mcou6_10.height) {
    console.log("collision");
    if (myGamePiece.x > mcou6_10.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < msalle2_2_2.x + msalle2_2_2.width &&
    myGamePiece.x + myGamePiece.width > msalle2_2_2.x &&
    myGamePiece.height + myGamePiece.y > msalle2_2_2.y &&
    myGamePiece.height + myGamePiece.y < msalle2_2_2.y+msalle2_2_2.height) {
    console.log("collision");
    if (myGamePiece.x > msalle2_2_2.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.x < msalle2_2_2.x + msalle2_2_2.width &&
    myGamePiece.x + myGamePiece.width > msalle2_2_2.x &&
    myGamePiece.height + myGamePiece.y > msalle2_2_2.y &&
    myGamePiece.height + myGamePiece.y < msalle2_2_2.y+msalle2_2_2.height) {
    console.log("collision");
    if (myGamePiece.x > msalle2_2_2.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.y < mcour2.y + mcour2.height &&
    myGamePiece.y + myGamePiece.height > mcour2.y &&
    myGamePiece.width + myGamePiece.x > mcour2.x &&
    myGamePiece.width + myGamePiece.x < mcour2.x+mcour2.width) {
    console.log("collision");
    if (myGamePiece.y > mcour2.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mfoyer3.y + mfoyer3.height &&
    myGamePiece.y + myGamePiece.height > mfoyer3.y &&
    myGamePiece.width + myGamePiece.x > mfoyer3.x &&
    myGamePiece.width + myGamePiece.x < mfoyer3.x+mfoyer3.width) {
    console.log("collision");
    if (myGamePiece.y > mfoyer3.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mfoyer1.y + mfoyer1.height &&
    myGamePiece.y + myGamePiece.height > mfoyer1.y &&
    myGamePiece.width + myGamePiece.x > mfoyer1.x &&
    myGamePiece.width + myGamePiece.x < mfoyer1.x+mfoyer1.width) {
    console.log("collision");
    if (myGamePiece.y > mfoyer1.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mcou6_11.y + mcou6_11.height &&
    myGamePiece.y + myGamePiece.height > mcou6_11.y &&
    myGamePiece.width + myGamePiece.x > mcou6_11.x &&
    myGamePiece.width + myGamePiece.x < mcou6_11.x+mcou6_11.width) {
    console.log("collision");
    if (myGamePiece.y > mcou6_11.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mcou6_1.y + mcou6_1.height &&
    myGamePiece.y + myGamePiece.height > mcou6_1.y &&
    myGamePiece.width + myGamePiece.x > mcou6_1.x &&
    myGamePiece.width + myGamePiece.x < mcou6_1.x+mcou6_1.width) {
    console.log("collision");
    if (myGamePiece.y > mcou6_1.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mcou6_4.y + mcou6_4.height &&
    myGamePiece.y + myGamePiece.height > mcou6_4.y &&
    myGamePiece.width + myGamePiece.x > mcou6_4.x &&
    myGamePiece.width + myGamePiece.x < mcou6_4.x+mcou6_4.width) {
    console.log("collision");
    if (myGamePiece.y > mcou6_4.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < msalle2_2_3.y + msalle2_2_3.height &&
    myGamePiece.y + myGamePiece.height > msalle2_2_3.y &&
    myGamePiece.width + myGamePiece.x > msalle2_2_3.x &&
    myGamePiece.width + myGamePiece.x < msalle2_2_3.x+msalle2_2_3.width) {
    console.log("collision");
    if (myGamePiece.y > msalle2_2_3.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < msalle2_2_1.y + msalle2_2_1.height &&
    myGamePiece.y + myGamePiece.height > msalle2_2_1.y &&
    myGamePiece.width + myGamePiece.x > msalle2_2_1.x &&
    myGamePiece.width + myGamePiece.x < msalle2_2_1.x+msalle2_2_1.width) {
    console.log("collision");
    if (myGamePiece.y > msalle2_2_1.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mcou6_9.y + mcou6_9.height &&
    myGamePiece.y + myGamePiece.height > mcou6_9.y &&
    myGamePiece.width + myGamePiece.x > mcou6_9.x &&
    myGamePiece.width + myGamePiece.x < mcou6_9.x+mcou6_9.width) {
    console.log("collision");
    if (myGamePiece.y > mcou6_9.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mcou6_3.y + mcou6_3.height &&
    myGamePiece.y + myGamePiece.height > mcou6_3.y &&
    myGamePiece.width + myGamePiece.x > mcou6_3.x &&
    myGamePiece.width + myGamePiece.x < mcou6_3.x+mcou6_3.width) {
    console.log("collision");
    if (myGamePiece.y > mcou6_3.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mcaf3_6.y + mcaf3_6.height &&
    myGamePiece.y + myGamePiece.height > mcaf3_6.y &&
    myGamePiece.width + myGamePiece.x > mcaf3_6.x &&
    myGamePiece.width + myGamePiece.x < mcaf3_6.x+mcaf3_6.width) {
    console.log("collision");
    if (myGamePiece.y > mcaf3_6.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mcaf3_2.y + mcaf3_2.height &&
    myGamePiece.y + myGamePiece.height > mcaf3_2.y &&
    myGamePiece.width + myGamePiece.x > mcaf3_2.x &&
    myGamePiece.width + myGamePiece.x < mcaf3_2.x+mcaf3_2.width) {
    console.log("collision");
    if (myGamePiece.y > mcaf3_2.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mcaf3_4.y + mcaf3_4.height &&
    myGamePiece.y + myGamePiece.height > mcaf3_4.y &&
    myGamePiece.width + myGamePiece.x > mcaf3_4.x &&
    myGamePiece.width + myGamePiece.x < mcaf3_4.x+mcaf3_4.width) {
    console.log("collision");
    if (myGamePiece.y > mcaf3_4.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mcou6_6.y + mcou6_6.height &&
    myGamePiece.y + myGamePiece.height > mcou6_6.y &&
    myGamePiece.width + myGamePiece.x > mcou6_6.x &&
    myGamePiece.width + myGamePiece.x < mcou6_6.x+mcou6_6.width) {
    console.log("collision");
    if (myGamePiece.y > mcou6_6.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mcaf2_3.y + mcaf2_3.height &&
    myGamePiece.y + myGamePiece.height > mcaf2_3.y &&
    myGamePiece.width + myGamePiece.x > mcaf2_3.x &&
    myGamePiece.width + myGamePiece.x < mcaf2_3.x+mcaf2_3.width) {
    console.log("collision");
    if (myGamePiece.y > mcaf2_3.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mcaf2_1.y + mcaf2_1.height &&
    myGamePiece.y + myGamePiece.height > mcaf2_1.y &&
    myGamePiece.width + myGamePiece.x > mcaf2_1.x &&
    myGamePiece.width + myGamePiece.x < mcaf2_1.x+mcaf2_1.width) {
    console.log("collision");
    if (myGamePiece.y > mcaf2_1.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < ma106_1.y + ma106_1.height &&
    myGamePiece.y + myGamePiece.height > ma106_1.y &&
    myGamePiece.width + myGamePiece.x > ma106_1.x &&
    myGamePiece.width + myGamePiece.x < ma106_1.x+ma106_1.width) {
    console.log("collision");
    if (myGamePiece.y > ma106_1.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < ma106_2.y + ma106_2.height &&
    myGamePiece.y + myGamePiece.height > ma106_2.y &&
    myGamePiece.width + myGamePiece.x > ma106_2.x &&
    myGamePiece.width + myGamePiece.x < ma106_2.x+ma106_2.width) {
    console.log("collision");
    if (myGamePiece.y > ma106_2.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < ma106_5.y + ma106_5.height &&
    myGamePiece.y + myGamePiece.height > ma106_5.y &&
    myGamePiece.width + myGamePiece.x > ma106_5.x &&
    myGamePiece.width + myGamePiece.x < ma106_5.x+ma106_5.width) {
    console.log("collision");
    if (myGamePiece.y > ma106_5.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mcou2_3.y + mcou2_3.height &&
    myGamePiece.y + myGamePiece.height > mcou2_3.y &&
    myGamePiece.width + myGamePiece.x > mcou2_3.x &&
    myGamePiece.width + myGamePiece.x < mcou2_3.x+mcou2_3.width) {
    console.log("collision");
    if (myGamePiece.y > mcou2_3.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mcou1_1.y + mcou1_1.height &&
    myGamePiece.y + myGamePiece.height > mcou1_1.y &&
    myGamePiece.width + myGamePiece.x > mcou1_1.x &&
    myGamePiece.width + myGamePiece.x < mcou1_1.x+mcou1_1.width) {
    console.log("collision");
    if (myGamePiece.y > mcou1_1.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mcou1_2.y + mcou1_2.height &&
    myGamePiece.y + myGamePiece.height > mcou1_2.y &&
    myGamePiece.width + myGamePiece.x > mcou1_2.x &&
    myGamePiece.width + myGamePiece.x < mcou1_2.x+mcou1_2.width) {
    console.log("collision");
    if (myGamePiece.y > mcou1_2.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mca1_3.y + mca1_3.height &&
    myGamePiece.y + myGamePiece.height > mca1_3.y &&
    myGamePiece.width + myGamePiece.x > mca1_3.x &&
    myGamePiece.width + myGamePiece.x < mca1_3.x+mca1_3.width) {
    console.log("collision");
    if (myGamePiece.y > mca1_3.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mca1_2.y + mca1_2.height &&
    myGamePiece.y + myGamePiece.height > mca1_2.y &&
    myGamePiece.width + myGamePiece.x > mca1_2.x &&
    myGamePiece.width + myGamePiece.x < mca1_2.x+mca1_2.width) {
    console.log("collision");
    if (myGamePiece.y > mca1_2.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.y < mcou3_1.y + mcou3_1.height &&
    myGamePiece.y + myGamePiece.height > mcou3_1.y &&
    myGamePiece.width + myGamePiece.x > mcou3_1.x &&
    myGamePiece.width + myGamePiece.x < mcou3_1.x+mcou3_1.width) {
    console.log("collision");
    if (myGamePiece.y > mcou3_1.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}









if(myGamePiece.y < tcour1.y + tcour1.height &&
    myGamePiece.y + myGamePiece.height > tcour1.y &&
    myGamePiece.width + myGamePiece.x > tcour1.x &&
    myGamePiece.width + myGamePiece.x < tcour1.x+tcour1.width) {
    console.log("collision");
    if (myGamePiece.y > tcour1.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.x < tcour1.x + tcour1.width &&
    myGamePiece.x + myGamePiece.width > tcour1.x &&
    myGamePiece.height + myGamePiece.y > tcour1.y &&
    myGamePiece.height + myGamePiece.y < tcour1.y+tcour1.height) {
    console.log("collision");
    if (myGamePiece.x > tcour1.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}

if(myGamePiece.y < tcour2.y + tcour2.height &&
    myGamePiece.y + myGamePiece.height > tcour2.y &&
    myGamePiece.width + myGamePiece.x > tcour2.x &&
    myGamePiece.width + myGamePiece.x < tcour2.x+tcour2.width) {
    console.log("collision");
    if (myGamePiece.y > tcour2.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}

if(myGamePiece.x < tcour2.x + tcour2.width &&
    myGamePiece.x + myGamePiece.width > tcour2.x &&
    myGamePiece.height + myGamePiece.y > tcour2.y &&
    myGamePiece.height + myGamePiece.y < tcour2.y+tcour2.height) {
    console.log("collision");
    if (myGamePiece.x > tcour2.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
}


}


function moveup() {
    myGamePiece.speedY = -10; 
}

function movedown() {
    myGamePiece.speedY = 10; 
}

function moveleft() {
    myGamePiece.speedX = -10; 
}

function moveright() {
    myGamePiece.speedX = 10; 
}

function clearmove() {
    myGamePiece.speedX = 0; 
    myGamePiece.speedY = 0; 
}




</script>

</body>
<script src="script.js"></script>
</html>
