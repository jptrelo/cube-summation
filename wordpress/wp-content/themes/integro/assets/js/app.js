$(function () {
  var sampleInput = "2 \n" +
                                "4 5 \n" +
                                "UPDATE 2 2 2 4 \n" +
                                "QUERY 1 1 1 3 3 3 \n" +
                                "UPDATE 1 1 1 23 \n" +
                                "QUERY 2 2 2 4 4 4 \n" +
                                "QUERY 1 1 1 3 3 3 \n" +
                                "2 4 \n" +
                                "UPDATE 2 2 2 1 \n" +
                                "QUERY 1 1 1 1 1 1 \n" +
                                "QUERY 1 1 1 2 2 2 \n" +
                                "QUERY 2 2 2 2 2 2 \n";
  function insertText(elemID, text)
  {
    $("#input").val(text);
  }

  $("#sampleInputBtn").click(function() {
    insertText('input', sampleInput);
  });

  $("#btnSubmit").click(function() {
      var data = $('#frmCubeSummation').serialize();
      var result = '';
      $.ajax({
      method: "POST",  
      url: "http://localhost:8000/cube",
      dataType: 'json',
      data : data
      }).done(function( data ) {

        data.results.forEach(function(item) {
            result += item + '\n';
        });

        $("#input").val(result);

      }); 
  });
        
});    