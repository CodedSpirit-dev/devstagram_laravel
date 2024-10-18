import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Change <hr> to <div class="border-t border-gray-200 my-6"></div>

document.querySelectorAll('hr').forEach(hr => {
    const newDiv = document.createElement('div');
    newDiv.className = 'border-t border-green-200 my-6';
    hr.replaceWith(newDiv);
});
