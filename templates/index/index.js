const setListeners = () => {
    const elements = document.getElementsByClassName('inventory-button');
    for (const element of elements) {
        element.addEventListener('click', (e) => {
            const name = element.getAttribute('name');
            if (name.substring(0, 6) === 'detail'){
                location.href = `/detail.php?id=${name.substring(7)}`
            }
        });
    }
}
setListeners();