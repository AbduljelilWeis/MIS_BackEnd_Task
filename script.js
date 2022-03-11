function afterProductClicked(e){
    if(e.target.closest(".rounded *, .rounded")){
        let productID =e.target.closest(".rounded *, .rounded").getAttribute("data-id");
        window.location.replace("/abduljelilsTask/products/product.php?id="+productID);
        //console.log("productID);
    }
}

document.getElementById("table").addEventListener("click",afterProductClicked);