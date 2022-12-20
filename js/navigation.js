window.onload = function(){
    // Pages mit Untermenue hover
    const pages = [
        'menuGlaube',
        'menuHistorie',
    ];

    for(let op=0; op<pages.length; op++){
        document.getElementById(pages[op]).addEventListener("mouseover", function(){openMenu(op);});
    }

    for(let cl=0; cl<pages.length; cl++){
        document.getElementById(pages[cl]).addEventListener("mouseout", function(){closeMenu(cl);});
    }
}

function openMenu(op){
    const subMenu = [
        'subGlaube',
        'subHistorie',
    ];
    document.getElementById(subMenu[op]).style.display = 'block';
}

function closeMenu(cl){
    const subMenu = [
        'subGlaube',
        'subHistorie',
    ];
    document.getElementById(subMenu[cl]).style.display = 'none';
}