$(document).ready(function(){
    var email = JSON.parse(localStorage.getItem("session")).email;
    var name = JSON.parse(localStorage.getItem("session")).fname;
    
    $("#email").val(email);
    $("#name").val(name);
      
     $.ajax({
            url: '../apis/AdminData.php',
            type: 'POST',
            data : {"layout" : "1004"},
            success: function (data) {
              data = JSON.parse(data);
              var options = "";
              data.forEach(function(k){
                $("#selectCategory").append("<option value='"+k.cat_id+"'> "+k.cat_name+"</option>");
              })
             // $("#selectCategory").html(options);
            },
            error : function(error){
                console.log(error);
            }
        });

    $('#upload').on('click', function(e){
          var formData = new FormData($(this).parents('form')[0]);

            $.ajax({
                url: 'include/upload.php',
                data: formData,
                type: 'POST',
                success: function (data) {
                    alert("Data Uploaded: "+data);
                },     
                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                processData: false,   
            });
            return false;
    });





    $('#view').on('click', function(e){
        $.ajax({
            url: '../apis/AdminData.php',
            type: 'POST',
            data : {"layout" : "1003" , "email":email},
            success: function (data) {
               console.log(data);
            },
            error : function(error){
                console.log(error);
            }
                  
        });
        
    });
})






$(document).ready(function(){
    
function testInput(event) {
   var value = String.fromCharCode(event.which);
   var pattern = new RegExp(/[0-9]/i);
   return pattern.test(value);
}
$('#amount').bind('keypress', testInput);


  })

    document.getElementById('files').addEventListener('change', function(e) {
  var list = document.getElementById('filelist');
  list.innerHTML = '';
  for (var i = 0; i < this.files.length; i++) {
    list.innerHTML += (i + 1) + '. ' + this.files[i].name + '\n';
  }
  if (list.innerHTML == '') list.style.display = 'none';
  else list.style.display = 'block';
});


