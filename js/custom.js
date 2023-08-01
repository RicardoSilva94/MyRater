// Hover move listing
$(document).ready(function () {
    //superfish
    $("ul.sf-menu").superfish({
        autoArrows: false, // disable generation of arrow mark-up
        animation: {
            height: 'show'
        }
    });
    // rollovers
    $(".side-block a").hover(function () {
        // on rollover	
        $(this).stop().animate({
            marginLeft: "10"
        }, "fast");
    }, function () {
        // on out
        $(this).stop().animate({
            marginLeft: "0"
        }, "fast");
    });
    // slideshow
    $('#slides')
        .before('<div id="slideshow-nav">')
        .cycle({
        fx: 'scrollHorz',
        speed: 500,
        timeout: 6000,
        pause: 1,
        pager: '#slideshow-nav',
        next: 'img#next',
        prev: 'img#prev'
    });
    // fade slide
    $('.fade-slide').cycle({
        fx: 'fade',
        speed: 500,
        timeout: 3000,
        pause: 1
    });
    // toggle
    $(".toggle-container").hide();
    $(".toggle-trigger").click(function () {
        $(this).toggleClass("active").next().slideToggle("slow");
        return false;
    });
    // accordion
    $('.accordion-container').hide();
    $('.accordion-trigger:first').addClass('active').next().show();
    $('.accordion-trigger').click(function () {
        if ($(this).next().is(':hidden')) {
            $('.accordion-trigger').removeClass('active').next().slideUp();
            $(this).toggleClass('active').next().slideDown();
        }
        return false;
    });


    $('.modal-trigger').click(function(e){
      e.preventDefault();
      dataModal = $(this).attr("data-modal");
      console.log("triparias")
      $("#" + dataModal).css({"display":"block"});
    });


    $(".close-modal, .modal-sandbox").click(function(){
      $(".modal").css({"display":"none"});
    });
    //close
});
// search clearance	
function defaultInput(target) {
    if ((target).value == 'Search...') {
        (target).value = ''
    }
}

function clearInput(target) {
    if ((target).value == '') {
        (target).value = 'Search...'
    }
}

function obterCriterioPara(nome_criterio) {
    var ratings = document.getElementsByName(nome_criterio);
    ratings = [...ratings];
    ratings.reverse();
    var length = ratings.length;
    for (var i=0; i<length; i++) {
        if(ratings[i].checked){
            return i+1;
        }
    }
    return 0;
}

function adicionarInputEscondido(nome_campo, valor_campo){
    $('<input>').attr({
        type: 'hidden',
        id: nome_campo,
        name: nome_campo,
        value: valor_campo
    }).appendTo('#comment-form')
}

function processarFormulario() {
    var rating_personagens = obterCriterioPara('personagens')
    adicionarInputEscondido('personagens', rating_personagens)

    var rating_enredo = obterCriterioPara('enredo')
    adicionarInputEscondido('enredo', rating_enredo)

    var rating_estilo_de_escrita = obterCriterioPara('estilo_de_escrita')
    adicionarInputEscondido('estilo_de_escrita', rating_estilo_de_escrita)

    var rating_coerencia = obterCriterioPara('coerencia')
    adicionarInputEscondido('coerencia', rating_coerencia)

    var rating_originalidade = obterCriterioPara('originalidade')
    adicionarInputEscondido('originalidade', rating_originalidade)

    var rating_desfecho = obterCriterioPara('desfecho')
    adicionarInputEscondido('desfecho', rating_desfecho)

    var rating_relevancia = obterCriterioPara('relevancia')
    adicionarInputEscondido('relevancia', rating_relevancia)

    var rating_estrutura = obterCriterioPara('estrutura')
    adicionarInputEscondido('estrutura', rating_estrutura)

    var rating_detalhe = obterCriterioPara('detalhe')
    adicionarInputEscondido('detalhe', rating_detalhe)




    // Devolver true faz com que a funcao do php seja tambem executada
    return true;
}

