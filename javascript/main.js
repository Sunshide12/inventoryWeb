fetch("http://localhost/inventory/php/get-products.php")
  .then(response => {
    if (!response.ok) {
      throw new Error('Error en la solicitud: ' + response.status);
    }
    return response.json();
  })
  .then(data => {
    console.log(data); // Procesa los datos obtenidos
  })
  .catch(error => {
    console.error('Hubo un problema con la petición fetch:', error);
  });


  $(document).ready(function() {
  $('#show-register').click(function(e) {
    e.preventDefault();
    $('.login-form').hide();
    $('.register-form').show();
  });

  $('#show-login').click(function(e) {
    e.preventDefault();
    $('.register-form').hide();
    $('.login-form').show();
  });
});
