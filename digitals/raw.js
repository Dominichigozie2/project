$(document).ready(function () {
  const defaultImg = 'assets/img/products/vender-upload-preview.jpg'; // Path to your default image

  // Show .avatar-delete or .thumb-delete only if image is not the default
  $('.ec-image-preview').on('click', function () {
    const previewImage = $(this);
    const deleteContainer = previewImage.closest('.avatar-preview, .thumb-preview').find('.avatar-delete, .thumb-delete');

    if (previewImage.attr('src') !== defaultImg) {
      deleteContainer.show();
    }
  });

  // Hide .avatar-delete and .thumb-delete when clicking outside the image or delete container
  $(document).on('click', function (event) {
    if (!$(event.target).closest('.ec-image-preview').length && !$(event.target).closest('.avatar-delete, .thumb-delete').length) {
      $('.avatar-delete, .thumb-delete').hide();
    }
  });

  // Delete the image and reset to default when delete button inside delete container is clicked
  $('.avatar-delete .con-thumb-delete, .thumb-delete .con-thumb-delete').on('click', function () {
    const deleteButton = $(this);
    const deleteContainer = deleteButton.closest('.avatar-delete, .thumb-delete');
    const previewImage = deleteContainer.closest('.avatar-preview, .thumb-preview').find('.ec-image-preview');

    previewImage.attr('src', defaultImg); // Reset to default image
    deleteContainer.hide(); // Hide the delete container
    deleteContainer.closest('.avatar-upload, .thumb-upload').find('.ec-image-upload').val(''); // Reset file input
  });

  // Handle form submission
  $('#productAdd').on('submit', function (e) {
    e.preventDefault(); // Prevent the default form submission
    const loadingOverlay = document.getElementById('loadingOverlay');
    loadingOverlay.style.display = 'flex';

    // Create a FormData object to hold the form data
    var formData = new FormData(this);

    // Append the thumbnail file if it exists
    var thumbnailInput = $('#imageUpload')[0]; // Assuming you have an input with id 'thumbnailInput'
    if (thumbnailInput.files.length > 0) {
      formData.append('thumbnail', thumbnailInput.files[0]);
    }

    // Send the AJAX request
    $.ajax({
      url: 'productAdd.php', // Replace with your PHP script URL
      type: 'POST',
      data: formData,
      contentType: false, // Prevent jQuery from overriding content type
      processData: false, // Prevent jQuery from processing the data
      success: function (response) {
        loadingOverlay.style.display = 'none';
        // Parse the JSON response
        var jsonResponse = JSON.parse(response);
        if (jsonResponse.status === 'success') {
          console.log('Success: ' + jsonResponse.message);
          Swal.fire({
            title: 'Product added successfully',
            // text: 'Click outside or press OK.',
            icon: 'success',
            showCancelButton: false,
            confirmButtonText: 'OK',
            allowOutsideClick: true // Allows closing the alert by clicking outside
          }).then((result) => {
            if (result.isConfirmed || result.isDismissed) {
              $('#productAdd')[0].reset()
              $(".ec-image-preview").attr('src', defaultImg);
              $('.ec-image-upload').val('');
            }
          });
        } else {
          $('#error').html('Error: ' + jsonResponse.message);
          $('#error').removeClass('d-none').show();
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log('AJAX Error: ' + textStatus + ' : ' + errorThrown);
      }
    });
  });
});