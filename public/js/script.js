const flashdata = $('#flash-data').data('flashdata');
const notif = $('#notification').data('flashdata');

if (flashdata) {
  // Login Failed
  if (flashdata == 'Login Failed') {
    Swal.fire({
      icon: 'error',
      title: 'Access Denied!',
      text: 'Wrong email or password. Please try again!',
      confirmButtonColor: '#dc3545',
    })
  }
  // Logout Success
  if (flashdata == 'Logout Success') {
    Swal.fire({
      icon: 'success',
      title: 'Logout Success!',
      text: "You've been logout. Thank you!",
      confirmButtonColor: '#198754',
    })
  }
}

if (notif) {
  if (notif == "Link created") {
    Lobibox.notify('success', {
      pauseDelayOnHover: true,
      continueDelayOnInactiveTab: false,
      position: 'top right',
      icon: 'bx bx-check-circle',
      msg: 'Short link berhasil dibuat!'
    });
  }
  if (notif == "Link updated") {
    Lobibox.notify('success', {
      pauseDelayOnHover: true,
      continueDelayOnInactiveTab: false,
      position: 'top right',
      icon: 'bx bx-check-circle',
      msg: 'Short link berhasil diubah!'
    });
  }
  if (notif == "Link deleted") {
    Lobibox.notify('success', {
      pauseDelayOnHover: true,
      continueDelayOnInactiveTab: false,
      position: 'top right',
      icon: 'bx bx-check-circle',
      msg: 'Short link berhasil dihapus!'
    });
  }
}