const tombolCari = document.querySelector('.tombol_cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');

// event ketika menuliskan keyword
keyword.addEventListener('keyup',function(){
    // ajax
    // xmlhttprequest
    // const xhr = new XMLHttpRequest();

    // xhr.onreadystatechange = function(){
    //     if (xhr.readyState == 4 && xhr.status == 200) {
    //         container.innerHTML = xhr.responseText;
    //     }
    // }
    // xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
    // xhr.send();

    // fetch
    fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (container.innerHTML = response));
});

// preview gambar yang akan di upload / di ubah
function previewImage() {
    const gambar = document.querySelector('.foto');
    const imgPreview = document.querySelector('.img-preview');

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function (oFREvent){
        imgPreview.src = oFREvent.target.result;
    };
}
