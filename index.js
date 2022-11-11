const getOne = (element) => {
    const modal = document.getElementById('product-detail');
    const id = element.substring(7);
    $.ajax({
        method: 'POST',
        url: 'get-one.php',
        data: {
            id,
        }
    }).done((response) => {
        if (response && response !== '') {
            modal.innerHTML = response;
            modal.style.display = 'flex';
        }
    })
}

const setListeners = () => {
    const elements = document.getElementsByClassName('inventory-button');
    for (const element of elements) {
        element.addEventListener('click', (e) => {
            e.preventDefault();
            const name = element.getAttribute('name');
            if (name.substring(0, 6) === 'detail') {
                getOne(name);
            }
        });
    }
}
setListeners();