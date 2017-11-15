
$( document ).ready(function() {
    var canvas = document.getElementById("signature-pad1");
    var canvas2 = document.getElementById("signature-pad2");

    var signaturePad1 = new SignaturePad(canvas);
    var signaturePad2 = new SignaturePad(canvas2);

});