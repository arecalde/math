<div id='results'>
  
</div>
<script>
    var resultDiv = document.getElementById('results');
    resultDiv.innerHTML = "";


  var initialPoint = [0, 0];
  var trials = 0
  if(trials == 0){
    trials = 600;
  }
  trials = trials+1;
  var length = 3.3;
  var finalPoint = initialPoint;
  var outerCount = 1;
  while(outerCount < trials){
    var count = 0;
    while(count < 16){
        var degrees = Math.random()*361;
        var radDeg = degrees*(Math.PI/180);
        finalPoint[0] = finalPoint[0]+(length*Math.cos(radDeg));
        finalPoint[1] = finalPoint[1]+(length*Math.sin(radDeg));

        count++;
      }
    resultDiv.innerHTML += "Trial "+outerCount+": ";
    resultDiv.innerHTML += "<br />"+finalPoint[0]+"<br />";
    resultDiv.innerHTML += finalPoint[1]+"<br />";
    var underRad = Math.pow((0-finalPoint[0]), 2)+Math.pow((0-finalPoint[1]), 2);
    resultDiv.innerHTML += Math.sqrt(underRad);
    resultDiv.innerHTML += "<br /><hr /><br />";
    outerCount++;
  }  
</script>