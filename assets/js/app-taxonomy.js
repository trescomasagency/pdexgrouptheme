document.addEventListener('DOMContentLoaded', function() {

    let term_taxonomy = window.location.pathname.split("/", 3)[2];

    if(!verifyRouting(term_taxonomy)) {   
        return;
    }

    viewTaxonomyAppStart(term_taxonomy);

});