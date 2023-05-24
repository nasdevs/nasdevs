function nisn_validation() {
    let nisn = document.getElementById('NISN');
    nisn.value = nisn.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');
}

function number_phone_validation() {
    let noWA = document.getElementById('nomorWhatsapp');
    noWA.value = noWA.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');
}

function upper_case() {
    let kodePendaftaran = document.getElementById('kodePendaftaran');
    kodePendaftaran.value = kodePendaftaran.value.toUpperCase();
}