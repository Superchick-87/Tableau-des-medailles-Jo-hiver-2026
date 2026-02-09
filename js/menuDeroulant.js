function menuDeroulant() {
    var cells = document.getElementsByTagName("select");
    var arraylistpays = new Array();
    for (let i = 1; i < cells.length+1; i++) {
        var MenuA = document.getElementById('equipe'+i).value;
    	
    	arraylistpays.push(MenuA);
    	
    	var ResultatA = document.getElementById('Drapeaux_C'+i);
        if (MenuA == MenuA) {
            ResultatA.setAttribute("src", "css/images/"+camelize(MenuA)+".png");
        }
    } 
    nbrepays = [...new Set(arraylistpays)].length;
    
    var boutonvalider = document.getElementById('validezback');
    var message = document.getElementById('message');
    if (nbrepays < cells.length) {
    	boutonvalider.setAttribute ('type','button');
    	message.style.display = 'block';
    }
    else{
    	boutonvalider.setAttribute ('type','submit');
    	message.style.display = 'none';
    }
    console.log([...new Set(arraylistpays)].length);
};
     