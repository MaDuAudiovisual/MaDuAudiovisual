const gallery = document.getElementById('gallery');

const imageUrl = 'C:/Users/marco/Desktop/Madu_Audiovisual_com_br/Portifolio_fotografia/Bairro';

fetch(imageUrl)
  .then(response => response.text())
  .then(text => {
    const filenames = text.split('\n');
    filenames.forEach(filename => {
      if (filename === '') {
        return;
      }
      const img = document.createElement('img');
      img.src = `${imageUrl}/${filename}`;
      gallery.appendChild(img);
    });
  });
