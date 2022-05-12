<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
canvas {
    border:1px solid #d3d3d3;
    background-color: #f1f1f1;
    top: 1000px;
}
</style>
</head>
<body onload="startGame()">
<script>
function collisionX(myGamePiece,obstacle) {
    if(myGamePiece.x < obstacle.x + obstacle.width &&
    myGamePiece.x + myGamePiece.width > obstacle.x &&
    myGamePiece.height + myGamePiece.y > obstacle.y &&
    myGamePiece.height + myGamePiece.y < obstacle.y+obstacle.height) {
    console.log("collision");

    if (myGamePiece.x > obstacle.x)
    {
    myGamePiece.x += 10;
    }
    else
    {
    myGamePiece.x -= 10;
    }
    } 
}
function collisionY(myGamePiece,obstacle) {
    if(myGamePiece.y < obstacle.y + obstacle.height &&
    myGamePiece.y + myGamePiece.height > obstacle.y &&
    myGamePiece.width + myGamePiece.x > obstacle.x &&
    myGamePiece.width + myGamePiece.x < obstacle.x+obstacle.width) {
    console.log("collision");
    if (myGamePiece.y > obstacle.y)
    {
    myGamePiece.y += 10;
    }
    else
    {
    myGamePiece.y -= 10;
    }
}
}

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
    tcour1, tcour2,
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

    tarik = new component(40, 40, "brown", 2700, 2210);

    myGameArea.start();
    window.scroll(myGamePiece.x-window.innerWidth/2,myGamePiece.y-window.innerHeight/2);


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
    tarik.update();
    myGamePiece.newPos();   
    myGamePiece.update();

    //addeventlistener click
if(myGamePiece.x < tarik.x + tarik.width &&
    myGamePiece.x + myGamePiece.width > tarik.x &&
    myGamePiece.height + myGamePiece.y > tarik.y &&
    myGamePiece.height + myGamePiece.y < tarik.y + tarik.height) {
    console.log("aguencheech");
    }
if(myGamePiece.x < tarik.x + tarik.width &&
    myGamePiece.x + myGamePiece.width > tarik.x &&
    myGamePiece.height + myGamePiece.y > tarik.y &&
    myGamePiece.height + myGamePiece.y < tarik.y+tarik.height) {
    console.log("aguencheech2");
    }

collisionX(myGamePiece,mca1_1);
collisionY(myGamePiece,mca1_2);
collisionY(myGamePiece,mca1_3);
collisionX(myGamePiece,mca1_4);
collisionX(myGamePiece,mca1_5);

collisionY(myGamePiece,mcou1_1);
collisionY(myGamePiece,mcou1_2);

collisionX(myGamePiece,mcou2_1);
collisionX(myGamePiece,mcou2_2);

collisionY(myGamePiece,mcaf2_1);
collisionX(myGamePiece,mcaf2_2);
collisionY(myGamePiece,mcaf2_3);

collisionY(myGamePiece,mcou3_1);

collisionX(myGamePiece,mcour1);
collisionY(myGamePiece,mcour2);
collisionX(myGamePiece,mcour3);
collisionX(myGamePiece,mcour4);
collisionX(myGamePiece,mcour5);

collisionY(myGamePiece,mcou6_1);
collisionX(myGamePiece,mcou6_2);
collisionY(myGamePiece,mcou6_3);
collisionY(myGamePiece,mcou6_4);
collisionX(myGamePiece,mcou6_5);
collisionY(myGamePiece,mcou6_6);
collisionX(myGamePiece,mcou6_7);
collisionX(myGamePiece,mcou6_8);
collisionY(myGamePiece,mcou6_9);
collisionX(myGamePiece,mcou6_10);
collisionY(myGamePiece,mcou6_11);

collisionX(myGamePiece,mcaf3_1);
collisionY(myGamePiece,mcaf3_2);
collisionX(myGamePiece,mcaf3_3);
collisionY(myGamePiece,mcaf3_4);
collisionX(myGamePiece,mcaf3_5);
collisionY(myGamePiece,mcaf3_6);
collisionX(myGamePiece,mcaf3_7);

collisionY(myGamePiece,msalle2_2_1);
collisionX(myGamePiece,msalle2_2_2);
collisionY(myGamePiece,msalle2_2_3);

collisionY(myGamePiece,mfoyer1);
collisionX(myGamePiece,mfoyer2);
collisionY(myGamePiece,mfoyer3);

collisionY(myGamePiece,ma106_1);
collisionY(myGamePiece,ma106_2);
collisionX(myGamePiece,ma106_3);
collisionX(myGamePiece,ma106_4);
collisionY(myGamePiece,ma106_5);
collisionX(myGamePiece,ma106_6);

collisionX(myGamePiece,tcour1), collisionY(myGamePiece,tcour1);
collisionX(myGamePiece,tcour2), collisionY(myGamePiece,tcour2);

collisionX(myGamePiece,tdt), collisionY(myGamePiece,tdt);

collisionX(myGamePiece,murfoyerinterieur), collisionY(myGamePiece,murfoyerinterieur);

collisionX(myGamePiece,bbf), collisionY(myGamePiece,bbf);

collisionX(myGamePiece,bureaua106), collisionY(myGamePiece,bureaua106);

collisionX(myGamePiece,tablea106_1), collisionY(myGamePiece,tablea106_1);
collisionX(myGamePiece,tablea106_2), collisionY(myGamePiece,tablea106_2);
collisionX(myGamePiece,tablea106_3), collisionY(myGamePiece,tablea106_3);
collisionX(myGamePiece,tablea106_4), collisionY(myGamePiece,tablea106_4);
collisionX(myGamePiece,tablea106_5), collisionY(myGamePiece,tablea106_5);
collisionX(myGamePiece,tablea106_6), collisionY(myGamePiece,tablea106_6);

collisionX(myGamePiece,mocafet1_1), collisionY(myGamePiece,mocafet1_1);
collisionX(myGamePiece,mocafet1_2), collisionY(myGamePiece,mocafet1_2);

collisionX(myGamePiece,tablecafet1_1), collisionY(myGamePiece,tablecafet1_1);
collisionX(myGamePiece,tablecafet1_2), collisionY(myGamePiece,tablecafet1_2);
collisionX(myGamePiece,tablecafet1_3), collisionY(myGamePiece,tablecafet1_3);
collisionX(myGamePiece,tablecafet1_4), collisionY(myGamePiece,tablecafet1_4);

collisionX(myGamePiece,tablecafet2_1), collisionY(myGamePiece,tablecafet2_1);
collisionX(myGamePiece,tablecafet2_2), collisionY(myGamePiece,tablecafet2_2);
collisionX(myGamePiece,tablecafet2_3), collisionY(myGamePiece,tablecafet2_3);
collisionX(myGamePiece,tablecafet2_4), collisionY(myGamePiece,tablecafet2_4);

collisionX(myGamePiece,mocafet2), collisionY(myGamePiece,mocafet2);

collisionX(myGamePiece,mocaf3_1), collisionY(myGamePiece,mocaf3_1);
collisionX(myGamePiece,mocaf3_2), collisionY(myGamePiece,mocaf3_2);

collisionX(myGamePiece,tablecafet3_1), collisionY(myGamePiece,tablecafet3_1);
collisionX(myGamePiece,tablecafet3_2), collisionY(myGamePiece,tablecafet3_2);
collisionX(myGamePiece,tablecafet3_3), collisionY(myGamePiece,tablecafet3_3);
collisionX(myGamePiece,tablecafet3_4), collisionY(myGamePiece,tablecafet3_4);

collisionX(myGamePiece,tablesalle_1), collisionY(myGamePiece,tablesalle_1);
collisionX(myGamePiece,tablesalle_2), collisionY(myGamePiece,tablesalle_2);
collisionX(myGamePiece,tablesalle_3), collisionY(myGamePiece,tablesalle_3);
collisionX(myGamePiece,tablesalle_4), collisionY(myGamePiece,tablesalle_4);
collisionX(myGamePiece,tablesalle_5), collisionY(myGamePiece,tablesalle_5);
collisionX(myGamePiece,tablesalle_6), collisionY(myGamePiece,tablesalle_6);
collisionX(myGamePiece,bureausalle), collisionY(myGamePiece,bureausalle);

}


function moveup() {
  myGamePiece.speedY = -10;
   // myGamePiece.speedY = -5;
 window.scroll(myGamePiece.x-window.innerWidth/2,myGamePiece.y-window.innerHeight/2);
 window.scroll({behavior: 'smooth'});
}

function movedown() {
    myGamePiece.speedY = 10;
   // myGamePiece.speedY = 5;
window.scroll(myGamePiece.x-window.innerWidth/2,myGamePiece.y-window.innerHeight/2);
window.scroll({behavior: 'smooth'});
}

function moveleft() {
    myGamePiece.speedX = -10; 
  //  myGamePiece.speedX = -5;
window.scroll(myGamePiece.x-window.innerWidth/2,myGamePiece.y-window.innerHeight/2);
window.scroll({behavior: 'smooth'});
}

function moveright() {
    myGamePiece.speedX = 10; 
 //   myGamePiece.speedX = 5;
window.scroll(myGamePiece.x-window.innerWidth/2,myGamePiece.y-window.innerHeight/2);
window.scroll({behavior: 'smooth'});
}

function clearmove() {
    myGamePiece.speedX = 0; 
    myGamePiece.speedY = 0; 
}

</script>

</body>
<script src="script.js"></script>
</html>