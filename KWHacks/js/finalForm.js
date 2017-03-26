(function() {
  var textFile = null,
    makeTextFile = function(text) {
      var data = new Blob([text], {
        type: 'text/plain'
      });

      // If we are replacing a previously generated file we need to
      // manually revoke the object URL to avoid memory leaks.
      if (textFile !== null) {
        window.URL.revokeObjectURL(textFile);
      }

      textFile = window.URL.createObjectURL(data);

      return textFile;
    };


  var 
    create = document.getElementById('create'),
    namebox = document.getElementById('namebox'),
    agebox = document.getElementById('agebox'),
    genderbox = document.getElementById('genderbox'),
    weightbox = document.getElementById('weightbox'),
    heightbox = document.getElementById('heightbox'),
    birthbox = document.getElementById('birthbox'),
    immunizationbox = document.getElementById('immunizationbox'),
    allergiesbox = document.getElementById('allergiesbox'),
    symptomsbox = document.getElementById('symptomsbox'),
    concernsbox = document.getElementById('concernsbox');

  document.getElementById('create').addEventListener('click', function() {
    var link = document.getElementById('downloadlink');
    var downButton = document.getElementById('downButton');
    var textOut = namebox.value + "~" + agebox.value + "~" + genderbox.value + "~" + weigthbox.value + "~" + heightbox.value + "~" + birthbox.value + "~" + immunizationbox.value + "~" + allergiesbox.value + "~" + symptomsbox.value + "~" + concernsbox.value
    link.href = makeTextFile(textOut);
    link.style.display = 'block';
    var downButton = document.getElementById('downButton');
    downButton.style.display = 'block';
  }, false);
});
