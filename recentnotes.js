
function createNewNotes()
{
    const src = '<?php echo $src; ?>';
    const alt = '<?php echo $alt; ?>';
    const title = '<?php echo $title; ?>';
    const text = '<?php echo $text; ?>';
    const href = '<?php echo $href; ?>';

    const divelem = document.createElement('div');
    divelem.classList.add('col-12','col-md-4')
    const cardelem = document.createElement('div');
    cardelem.classList.add('card','shadow','h-100')
    const area = document.querySelector('.notes');
    divelem.appendChild(cardelem);
    area.appendChild(divelem);

    cardelem.innerHTML = 
        "<img src=\""+src+"\" alt=\""+alt+"\" class=\"card-img-top\">" +
        "<div class=\"card-body\">" +
            "<h4 class=\"card-title\">" +
                title +
            "</h4>" +
            "<p class=\"card-text\">"+text+"</p>" +
            "<a href=\""+href+"\" class=\"stretched-link\"></a>" +
        "</div>"

}

