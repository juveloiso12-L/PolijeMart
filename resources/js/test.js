const submitForm = document.getElementById('submitForm');

if (submitForm){
    submitForm.addEventListener('submit', function(event){
        const konfirmasi = confirm('Pastikaan data sudah benar. Apakah anda ingin lanjut ?');

        if(!konfirmasi){
            event.preventDefault();
            alert('Data tidak disimpan !');
        }
    });
}