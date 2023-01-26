window.onload = function(){
    // Pages mit Untermenue hover
   /*  const pages = [
        'menuGlaube',
        'menuHistorie',
    ];

    for(let op=0; op<pages.length; op++){
        document.getElementById(pages[op]).addEventListener("mouseover", function(){openMenu(op);});
    }

    for(let cl=0; cl<pages.length; cl++){
        document.getElementById(pages[cl]).addEventListener("mouseout", function(){closeMenu(cl);});
    } */

    document.getElementById('openNav').addEventListener("click", openNav);
    document.getElementById('closeNav').addEventListener("click", closeNav);

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

function openNav(){
    document.getElementById('openNav').style.display = 'none';
    document.getElementById('closeNav').style.display = 'flex';
    document.getElementById('nav').style.display = 'block';
}

function closeNav(){
    document.getElementById('openNav').style.display = 'flex';
    document.getElementById('closeNav').style.display = 'none';
    document.getElementById('nav').style.display = 'none';
}