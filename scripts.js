$(document).ready(function() {
  // Function to handle the click event on custom text elements
  function handleCustomTextClick(customText) {
    // Set the custom text in the input field
    $("#custom-text-input").attr('value', customText);

    // Add the "selected-text" class to the clicked custom text element
    $(event.target).attr('class', 'image-text selected-text');

    // Hide the reminder message when the user selects a custom text
    $("#reminder").css('display', 'none');
  }

  // Add event listener to all elements with class "image-text" (custom text elements)
  $(".image-text").on("click", function() {
    var customText = $(this).data("custom-text");
    handleCustomTextClick(customText);
  });

  // Add event listener to the "Add" button
  $(".add-button").on("click", function() {
    // Get the custom text from the input field
    var customText = $("#custom-text-input").prop('value').trim();

    // Check if the custom text is empty or not selected
    if (!customText) {
      $("#reminder").css('display', 'block');
      return;
    }

    // Check if the custom text is not in the list
    var customTexts = $(".image-text").map(function() {
      return $(this).data("custom-text");
    }).get();

    if (!customTexts.includes(customText)) {
      $("#reminder").text("Please select a valid Game Name from list above.").css('display', 'block');
      return;
    }

    // Send customText to the backend PHP script in the database to be stored
    var data = {
      customText: customText
    };

    $.post("add_image.php", data)
      .done(function(data) {
        console.log(data);
        // display a success or error message
      })
      .fail(function(error) {
        console.log(error);
      });
  });
});
