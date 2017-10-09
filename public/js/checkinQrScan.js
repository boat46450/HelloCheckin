let scanner = new Instascan.Scanner({ video: document.getElementById('qrscan') });

scanner.addListener('scan', function ($content) {
  checkIn($content);
});

Instascan.Camera.getCameras().then(function (cameras) {
  if (cameras.length > 0) {
    scanner.start(cameras[1] ? cameras[1] : cameras[0]);
  } else {
    console.error('Cameras not found.');
  }
}).catch(function (e) {
  console.error(e);
  $('#camera').html('<p class="hide-camera">Device not compatiable!</p>');
});

const checkIn = (code) => {
  fetch(`/checkin/${code}`)
    .then(result => {
      if (result !== 100 || result != 400) {
        error();
      }
      console.log(result);
    })
    .catch(err => console.log(err))
}

function confirm() {
  swal({
    title: "น้องมาแล้วน้าาาา",
    type: "success",
    showCancelButton: false
  });
}

function error() {
  swal({
    title: "Error",
    type: "error",
    showCancelButton: true
  })
}