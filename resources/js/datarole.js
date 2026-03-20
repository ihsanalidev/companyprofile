document.addEventListener('DOMContentLoaded', () => {
    console.log('JS jalan');

    const tabs = document.querySelectorAll('.tab-btn');
    const cards = document.querySelectorAll('.cards');

    // tabs.forEach(tab => {
    //     tab.addEventListener('click', () => {
    //         tabs.forEach(t => t.classList.remove('active'));
    //         tab.classList.add('active');

    //         const role = tab.dataset.role;

    //         cards.forEach(card => {
    //             if (role === 'everyone') {
    //                 card.style.display = '';
    //             } else {
    //                 card.style.display = card.dataset.role === role ? '' : 'none';
    //             }
    //         });
    //     });
    // });

    tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');

        const role = tab.dataset.role;

        cards.forEach(card => {
            card.style.display = card.dataset.role === role ? '' : 'none';
        });
    });

    
    const defaultTab = document.querySelector('.tab-btn.active');
    if (defaultTab) defaultTab.click();
});
});