
   document.getElementById('toggleTableButton').addEventListener('click', function() {
    const tabela = document.querySelector('.tabela');
    tabela.style.display = 'flex';  // Përdor 'flex' për të mbajtur qëndrimin qendror
    setTimeout(() => {
        tabela.style.opacity = 1;  // Bëje tabelën të dukshme me fade-in
    }, 10);  // Vonesa minimale për efekt

    this.style.display = 'none';  // Fshih butonin pasi të klikohet
});

document.querySelector('.contact-form').addEventListener('submit', function(e) {
         e.preventDefault();


    const emriInput = document.getElementById('emri');
    const mbiemriInput = document.getElementById('mbiemri');
    
    function formatFjala(fjala) {
        return fjala.toLowerCase().replace(/(^|\s)\S/g, function(shkronja) {
            return shkronja.toUpperCase();
        });
    }
    
    emriInput.value = formatFjala(emriInput.value);
    mbiemriInput.value = formatFjala(mbiemriInput.value);

    const formData = new FormData(this);

    fetch('contactss.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
        alert(data); 
        this.reset(); 
    })
    .catch(error => console.error('Gabim:', error));

    fetch('dergo_email.php', {
    method: 'POST',
    body: formData
})
.then(response => response.text())
    .then(data => {
        console.log('Email response:', data);
    })
    .catch(error => console.error('Gabim në email:', error));
});

   document.getElementById('toggleTableButton').addEventListener('click', function() {
    const tabela = document.querySelector('.tabela');
    tabela.style.display = 'flex';  
    setTimeout(() => {
        tabela.style.opacity = 1;  
    }, 10); 

    this.style.display = 'none';  
});
