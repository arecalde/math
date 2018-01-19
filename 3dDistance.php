		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  
A: <input type='text' placeholder='x1' id='x1'>  <input type='text' placeholder='y1' id='y1'>  <input type='text' placeholder='z1' id='z1'><br />
    B: <input type='text' placeholder='x2' id='x2'>  <input type='text' placeholder='y2' id='y2'>  <input type='text' placeholder='z2' id='z2'><br />

    C: <input type='text' placeholder='x3' id='x3'>  <input type='text' placeholder='y3' id='y3'>  <input type='text' placeholder='z3' id='z3'><br />
    <button onclick='calculate()'>
      Calculate
</button>
<span id='results'>Results Here</span>
<script>
  function calculate(){
    var x1 = document.getElementById('x1').value;
          $.ajax({
        type: 'post',
        url: "3dBG.php",
        data: {
            'x1': document.getElementById('x1').value,
            'x2': document.getElementById('x2').value,
            'x3': document.getElementById('x3').value,
            'y1': document.getElementById('y1').value,
            'y2': document.getElementById('y2').value,
            'y3': document.getElementById('y3').value,       
            'z1': document.getElementById('z1').value,
            'z2': document.getElementById('z2').value,
            'z3': document.getElementById('z3').value          
        },
        cache: false,
        success: function(data) {
          document.getElementById('results').innerHTML = data;
        }
    });
  }

</script>