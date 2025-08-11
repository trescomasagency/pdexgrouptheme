async function pdexGroupControllerMoreProducts(paged, term_taxonomy) {

    const request   = await fetch(`${controllertaxonomy.rest_url}pdexgroup/products?paged=${paged}&term=${term_taxonomy}`, {
        method: "GET"
    });
    const response  = await request.json();
    return response;

}