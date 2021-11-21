// require('./bootstrap');
import Swal from "sweetalert2";

window.Swal = Swal;
window.Toast = Swal.mixin({
    toast: true,
    animation: true,
    position: 'top-right',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});
