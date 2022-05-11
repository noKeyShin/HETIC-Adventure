/*function moveup() {
    myGamePiece.speedY = -20; 
}

function movedown() {
    myGamePiece.speedY = 20; 
}

function moveleft() {
    myGamePiece.speedX = -20; 
}

function moveright() {
    myGamePiece.speedX = 20; 
}

function clearmove() {
    myGamePiece.speedX = 0; 
    myGamePiece.speedY = 0; 
}*/










const keys = {
    z: {
      pressed: false
    },
    q: {
      pressed: false
    },
    s: {
      pressed: false
    },
    d: {
      pressed: false
    }
  }




  window.addEventListener('keypress', (e) => {
    switch (e.key) {
      case 'z':
        keys.z.pressed = true
        lastKey = 'z'
        moveup()
        break
      case 'q':
        keys.q.pressed = true
        lastKey = 'q'
        moveleft()
        break
  
      case 's':
        keys.s.pressed = true
        lastKey = 's'
        movedown()
        break
  
      case 'd':
        keys.d.pressed = true
        lastKey = 'd'
        moveright()
        break
    }
  })

  window.addEventListener('keyup', (e) => {
    switch (e.key) {
      case 'z':
        keys.z.pressed = true
        lastKey = 'z'
        clearmove()
        break
      case 'q':
        keys.q.pressed = true
        lastKey = 'q'
        clearmove()
        break
  
      case 's':
        keys.s.pressed = true
        lastKey = 's'
        clearmove()
        break
  
      case 'd':
        keys.d.pressed = true
        lastKey = 'd'
        clearmove()
        break
    }
  })