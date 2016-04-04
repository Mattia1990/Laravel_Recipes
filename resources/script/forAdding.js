$().ready(function(){
    
    var arrIngr = [];
    
    $('#add').click(function(){
            var ingr2 = $('#ingr').val();
            arrIngr.push(ingr2);
            $('#ingr').val("");
        });
    
    $('#saves').click(function(){
        var name = $('#name').val();
        var ingr = arrIngr;
        var desc = $('#desc').val();
        
        $.ajax('sendRecipes', {
            type: 'POST',
            data: {'sendName': name, 'sendIngr': ingr, 'sendDesc': desc, '_token': $('input[name=_token]').val()},
            success:function(){
                window.location.href='../public';
            },
        });
        
    });
    
    
});