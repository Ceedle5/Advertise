export function initSidebarToggle(toggleBtnId, sidebarId) {
    const toggleBtn = document.getElementById(toggleBtnId);
    const sidebar = document.getElementById(sidebarId);

    if (!toggleBtn || !sidebar) return;

    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('closed');
    });
}


// function showAlert(type, message, title = '') {
//     Swal.fire({
//         icon: type,
//         title: title || (type === 'success' ? 'Success' : 'Error'),
//         text: message,
//         timer: type === 'success' ? 2500 : null,
//         showConfirmButton: type !== 'success',
//         confirmButtonColor: '#dc2626'
//     });
// }
