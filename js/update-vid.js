
$(function() {
  var $multiSel =  $('.genre-select').multipleSelect({
      minimumCountSelected: 5,
      displayDelimiter: ' | ',
        onClick: function(view) {
    var $checkboxes = $multiSel.next().find("input[type='checkbox']").not(":checked");
    var selectedLen = $multiSel.multipleSelect('getSelects').length;
    if (selectedLen >= 5) {
      $checkboxes.prop("disabled", true);
    } else {
      $checkboxes.prop("disabled", false);
    }
  }
    })
  })