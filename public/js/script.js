const flashdata = $('#flash-data').data('flashdata');
const notif = $('#notification').data('flashdata');

if (flashdata) {
  // Login Failed
  if (flashdata == 'Login Failed') {
    Swal.fire({
      icon: 'error',
      title: 'Access Ditolak!',
      text: 'Username / Password tidak cocok. Ulangi kembali!',
      confirmButtonColor: '#dc3545',
    })
  }
  // Logout Success
  if (flashdata == 'Logout Success') {
    Swal.fire({
      icon: 'success',
      title: 'Berhasil Logout!',
      text: 'Anda berhasil keluar, terima kasih.',
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

// VISITOR CHARTS
$(function () {
  var options = {
    series: [],
    chart: {
      foreColor: '#9ba7b2',
      height: 360,
      type: 'area',
      zoom: {
        enabled: false
      },
      toolbar: {
        show: true
      },
    },
    colors: ['#0c971a'],
    title: {
      text: 'Web Visitor',
      align: 'left',
      style: {
        fontSize: "16px",
        color: '#666'
      }
    },
    dataLabels: {
      enabled: true
    },
    stroke: {
      curve: 'smooth'
    },
    xaxis: {
      // type: 'datetime',
      categories: ['Februari', 'Maret', 'April', 'Mei', 'Juli', 'Juni', 'Agustus', 'September', 'Oktober', 'November', 'Desember', 'Januari']
    },
    tooltip: {
      x: {
        format: 'dd/MM/yy HH:mm'
      },
    },
  };
  var chart = new ApexCharts(document.querySelector("#visitorChart"), options);
  chart.render();

  var updateChart = function () {
    $.ajax({
      url: window.location.origin + '/visitor_data',
      type: 'GET',
      dataType: 'json',
      success: function (value) {
        chart.updateSeries([{
          name: 'Visitor',
          data: value
        }])
        $('#FebCounter').html(value[0]);
        $('#MarCounter').html(value[1]);
        $('#AprCounter').html(value[2]);
        $('#MayCounter').html(value[3]);
        $('#JunCounter').html(value[4]);
        $('#JulCounter').html(value[5]);
        $('#AugCounter').html(value[6]);
        $('#SepCounter').html(value[7]);
        $('#OctCounter').html(value[8]);
        $('#NovCounter').html(value[9]);
        $('#DecCounter').html(value[10]);
        $('#JanCounter').html(value[11]);
      },
      error: function (data) {
        console.log(data)
      }
    });
  }

  updateChart();
  // setInterval(() => {
  //   updateChart();
  // }, 2000);
});