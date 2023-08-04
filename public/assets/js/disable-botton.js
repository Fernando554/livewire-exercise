window.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('categoryForm');
    if (form) {
        form.addEventListener('submit', function () {
            var btnSubmit = document.getElementById('btnSubmit');
            if (btnSubmit) {
                btnSubmit.setAttribute('disabled', 'disabled');
            }
        });
    }
});