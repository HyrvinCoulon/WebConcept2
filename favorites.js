$(document).ready(function() {
    $('.favourite').on('click', null, function() {
    var _this = $(this);
    var post_id = _this.data('id');
    var user = _this.data('user');
    console.log(post_id+ " "+user);
    $.ajax({
        type     : 'GET',
        url      : 'favorite.php',
        data     : {'id': post_id, 'user':user},
        success : function(data) {
           if(_this.siblings('.favourite'))
           {
             _this.css({'color':'rgb(0, 132, 255)', 'background-color': 'white', 'border':'1px solid rgb(0, 132, 255)'});
           }
           else
           {
            _this.css({'color':'white', 'background-color': 'rgb(0, 132, 255)', 'border':'1px solid white'});
           }
        }
        });
    });
});