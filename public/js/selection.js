(function($){

    console.log($('ul li:last').text());
    console.log($('li:last').text());
    var a = $('#main').parents('ul').find('li:last').text();
    var b = $('#main').parent().parent().find('li:last').text();
    console.log(a);
    console.log(b);

})(jQuery);


var c = document.getElementById('main').parentNode.parentNode.lastElementChild.innerText;
console.log(c);
