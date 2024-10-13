document.addEventListener("DOMContentLoaded", function () {
  var totalPrice = localStorage.getItem("totalPrice");
  var productTitles = localStorage.getItem("productTitles");

  if (totalPrice) {
    document.getElementById("total-price-display").innerText =
      "Total is Rs " + totalPrice;
    document.getElementById("total_price").value = totalPrice;
  }

  if (productTitles) {
    document.getElementById("product_titles").value = productTitles;
  }
});
