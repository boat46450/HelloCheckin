let scanner = new Instascan.Scanner({ video: document.getElementById('qrscan'), mirror: false });

scanner.addListener('scan', function($content){
  checkIn($content);
});

$('#click').click(function() {
  const ticketId = $('searchTicket').val().toUpperCase();
  $('searchTicket').val("");
  checkIn(ticketId);
});

Instascan.Camera.getCamera().then(function (cameras) {
  if(cameras.length > 0) {
    scanner.start(cameras[1] ? cameras[1] : cameras[0]);
  } else {
    console.error('Cameras not found.');
  }
}).catch(function (e) {
  console.error(e);
  $('#camera').html('<p class="hide-camera">Device not compatiable!</p>');
});

function confirm($content, $helloId) {
  swal ({
    title : "ย้องมาแล้วน้าาาา",
    text : "",
    type : "success",
    showCancelButton : false
  });
}