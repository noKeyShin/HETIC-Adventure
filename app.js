// Create a center tag to center all the elements
var center = document.createElement('center');
 
// Create a table element
var grille = document.createElement('table');
for (var i = 57; i > 0; i--) {

    // Create a row
    var tr = document.createElement('tr');
    for (var j = 0; j < 84; j++) {
        var ch = j+65

        // Create a cell
        var td = document.createElement('td');

        //td.innerHTML = String.fromCharCode(ch)+(i)

        // If the sum of cell coordinates is even
        // then color the cell white
        if ((i + j) % 2 == 0) {

            // Create a class attribute for all white cells
            td.setAttribute('class', 'cell whitecell');
            tr.appendChild(td);

        }

        // If the sum of cell coordinates is odd then
        // color the cell black
        else {

            // Create a class attribute for all black cells
            td.setAttribute('class', 'cell blackcell');

            // Append the cell to its row
            tr.appendChild(td);
        }
    }

    // Append the row
    grille.appendChild(tr);
}
center.appendChild(grille);

// Modifying table attribute properties
grille.setAttribute('cellspacing', '0');
grille.setAttribute('width', '270px');
document.body.appendChild(center);



