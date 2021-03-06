(function () {
  'use strict'

  // Variables of inputs
  var commands = $('#commands')
  var results = $('#results')
  var containerResults = results.parent('.well')


  var functions = {
    changeFile: function () {
      var input = $(this) // eslint-disable-line
      var numFiles = input.get(0).files ? input.get(0).files.length : 1
      var label = input.val().replace(/\\/g, '/').replace(/.*\//, '')
      input.trigger('fileselect', [numFiles, label])
    },
    loadFile: function (event, numFiles, label) {
      // Set name of the file in the input
      var input = $(this).parents('.input-group').find(':text')

      // Get file from index 0
      var file = event.target.files[0]

      if ( input.length ) {
        input.val(label)

        // Validate if file is text
        if (functions.validateFile(file)) {
          functions.readFile(file, function (text) {
            commands.val(text)
          })
        }
      }
    },
    validateFile: function (file) {
      if (!file) {
        alert('Failed to read file') // eslint-disable-line
        return false
      } else  if (!file.type.match('text.*')) {
        alert(file.name + ' is not a valid text file.') // eslint-disable-line
        return false
      }

      return true
    },
    readFile: function (file, callback) {
      var reader = new FileReader() // eslint-disable-line

      reader.onload = function (e) {
        // Set text of file in textarea
        callback(reader.result)
      }

      reader.readAsText(file, 'utf-8')
    },
    submit: function (event) {
      event.preventDefault()

      var form = $(this)

      containerResults.fadeOut()

      // Clear previous results
      results.empty()
      $.ajax({
        url: form.prop('action'),
        method: 'POST',
        dataType: 'json',
        data: form.serialize(),
        success: function (response) {

          if (response.success === true) {
            response.data.forEach(function (result) {
              results.append(
                $('<li>', {
                  text: result
                })
              )

              containerResults.fadeIn()
            })
          }
        }
      })
    }
  }

  // Set global event for all input files
  $(document).on('change', ':file', functions.changeFile)

  // Event used to set the file in the disabled input
  $(':file').on('fileselect', functions.loadFile)

  // Handle event for submit commands form
  $('#commands-form').on('submit', functions.submit)
})()
