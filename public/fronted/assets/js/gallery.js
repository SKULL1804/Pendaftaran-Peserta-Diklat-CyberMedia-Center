$(document).ready(function(){
    $('#gallery').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
            $('#showimage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});
