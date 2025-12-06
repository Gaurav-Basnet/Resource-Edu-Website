    function toggleMoreResources(section) {
        const moreDiv = document.getElementById(`${section}-more`);
        const chevron = document.getElementById(`${section}-chevron`);
        
        if (moreDiv.classList.contains('hidden')) {
            moreDiv.classList.remove('hidden');
            chevron.classList.add('rotate-180');
        } else {
            moreDiv.classList.add('hidden');
            chevron.classList.remove('rotate-180');
        }
    }