export default (() => {

    const main = document.querySelector('main');
  
    main?.addEventListener('click', (event) => {
  
      if (event.target.closest('.tab')) {
  
        if (event.target.closest('.tab').classList.contains('active')) {
          return;
        }
        
        const tabClicked = event.target.closest('.tab');
        const tabActive = tabClicked.parentElement.querySelector('.active');
        
        tabClicked.classList.add('active');
        tabActive.classList.remove('active');
  
        document.querySelector(`.tab-content.active[data-tab="${tabActive.dataset.tab}"]`).classList.remove('active');
        document.querySelector(`.tab-content[data-tab="${tabClicked.dataset.tab}"]`).classList.add('active');
      }
    });
    
})();