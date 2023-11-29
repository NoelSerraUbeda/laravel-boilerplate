export default (() => {
    const filterIcon = document.querySelector('.filter-icon');
    const filterModal = document.querySelector('.topnav-filter-form');
    const close = document.querySelector('.red');

    filterIcon?.addEventListener('click', (event) => {
        filterModal.classList.toggle('active');
    });
    close?.addEventListener('click', (event) => {
        filterModal.classList.toggle('active');
    });
})();



