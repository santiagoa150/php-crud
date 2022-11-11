const getOne = (id) => {
    $.ajax({
        method: 'POST',
        url: 'get-one.php',
        data: {
            id,
        }
    }).done((response) => {
        return response;
    })
}

const setListeners = () => {
    const elements = document.getElementsByClassName('inventory-button');
    for (const element of elements) {
        element.addEventListener('click', (e) => {
            e.preventDefault();
            const name = element.getAttribute('name');
            if (name.substring(0, 6) === 'detail'){
                const modal = document.getElementById('product-detail');
                const id = name.substring(7);
                const htmlElement = getOne(id);
                if (htmlElement !== ''){
                    modal.innerHTML = htmlElement;
                    modal.style.display = 'flex';
                }
            }
        });
    }
}
setListeners();