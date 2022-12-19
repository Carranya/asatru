window.onload = function(){
    // Pages mit Untermenue hover
    const pages = [
        'menuHistorie',
    ];

    for(let op=0; op<pages.length; op++){
        document.getElementById(pages[op]).addEventListener("mouseover", function(){openMenu(op);});
    }

    for(let cl=0; cl<pages.length; cl++){
        document.getElementById(pages[cl]).addEventListener("mouseout", function(){closeMenu(cl);});
    }

    // Untermenue klicken
    const subMenuPages = [
        'subAlemannen',
        'subGallus',
    ];

    for(let sp=0; sp<subMenuPages.length; sp++){
        document.getElementById(subMenuPages[sp]).addEventListener("click", function(){openSub(sp);});
    }
   
}

function openMenu(op){
    const subMenu = [
        'subHistorie',
    ];
    document.getElementById(subMenu[op]).style.display = 'block';
}

function closeMenu(cl){
    const subMenu = [
        'subHistorie',
    ];
    document.getElementById(subMenu[cl]).style.display = 'none';
}

function openSub(sp){
    const subPages = [
        'Alemannen',
        'Gallus',
    ];
        // document.getElementById('historie').style.display = 'block';
        document.getElementById(subPages[sp]).scrollIntoView();
}