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
        if(combat.className == 'combatOFF') {
          moveup()
        }
        break
      case 'q':
        keys.q.pressed = true
        lastKey = 'q'
        if(combat.className == 'combatOFF') {
        moveleft()
        }
        break
  
      case 's':
        keys.s.pressed = true
        lastKey = 's'
        if(combat.className == 'combatOFF') {
        movedown()
        }
        break
  
      case 'd':
        keys.d.pressed = true
        lastKey = 'd'
        if(combat.className == 'combatOFF') {
        moveright()
        }
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

