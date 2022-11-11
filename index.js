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
            const closeDetailModal = document.getElementById('close-detail-modal');
            closeDetailModal.addEventListener('click', (e) => {
                e.preventDefault();
                const modal = document.getElementById('product-detail');
                modal.style.display = 'none';
            });
        }
    })
}

const deleteOne = (element) => {
    const modal = document.getElementById('product-deleted');
    const id = element.substring(7);
    $.ajax({
        method: 'POST',
        url: 'delete-one.php',
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
            const name = element.getAttribute('name')
            const method = name.substring(0, 6);
            if (method === 'detail') {
                getOne(name);
            }
            if (method === 'delete') {
                deleteOne(name);
            }
        });
    }

    const showCreateElement = document.getElementById('show-create-modal');
    showCreateElement.addEventListener('click', (e) => {
        e.preventDefault();
    })
}
setListeners();