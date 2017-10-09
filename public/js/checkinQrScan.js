let scanner = new Instascan.Scanner({ video: document.getElementById('qrscan'), mirror: false });

scanner.addListener('scan', function (content) {
  checkIn(content);
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
      result.json()
      .then(data => {
        if (data == 100)
          swal("Checkin เสร็จสิ้น", "น้องมาแล้วววว", "success")
        else
          swal("Checkin เกิดข้อผิดพลาด", "QR Code ของน้องผิด หรือวันนี้ไม่มีกิจกรรม", "error")
      })
      .catch(err => console.log(err))
    })
}
