$(document).ready(function(){
    $("#form").submit(function() { //устанавливаем событие отправки для формы с id=form            
            $.ajax({
            type: "POST", //Метод отправки
            url: "templates/newval.php", //путь до php фаила отправителя            
            success: function() {
                   alert("Значения добавлены");                                                    
                }
        });
    });
});