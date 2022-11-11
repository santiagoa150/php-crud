const getOne = (id) => {
    let result = ''
    $.ajax({
        method: 'GET',
        url: 'get-one.php',
        data: {
            id,
        }
    }).done((response) => {
        result = response;
    })
    return result;
}

const setListeners = () => {
    const elements = document.getElementsByClassName('inventory-button');
    for (const element of elements) {
        element.addEventListener('click', (e) => {
            const name = element.getAttribute('name');
            if (name.substring(0, 6) === 'detail'){
                const modal = document.getElementById('product-detail');
                const id = name.substring(7);
                console.log(id);
                const element = getOne(id);
                if (element !== ''){
                    modal.innerHTML = element;
                    modal.style.display = 'flex';
                }
            }
        });
    }
}
setListeners();