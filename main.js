// for home page
function addItem2(ele) {
  let item = {};
  item.name =
    ele.parentElement.parentElement.parentElement.querySelector(
      ".product_name"
    ).innerHTML;
  item.price =
    ele.parentElement.parentElement.querySelector(".product_price").innerHTML;
  item.image =
    ele.parentElement.parentElement.parentElement.querySelector(
      ".product_img"
    ).src;
  let shoppingCart = JSON.parse(localStorage.getItem("shoppingCart"));
  if (shoppingCart == null) shoppingCart = [];
  shoppingCart.push(item);
  localStorage.setItem("shoppingCart", JSON.stringify(shoppingCart));
  displayShoppingCart();
}
//for product page
function changeimage(ele) {
  document.querySelector(".sideimg").src = ele.src;
}
function additem() {
  let item = {};
  item.name = document.querySelector(".item_title").innerHTML;
  item.price = document.querySelector(".item_value").innerHTML;
  item.image = document.querySelector(".mainimg").src;
  let shoppingcart = JSON.parse(localStorage.getItem("shoppingcart"));
  if (shoppingcart == null) shoppingcart = [];
  shoppingcart.push(item);
  localStorage.setItem("shoppingcart", JSON.stringify(shoppingcart));
  displayshoppingcart();
}

// shared js
function displayShoppingCart() {
  console.log("999");
  let content = "";
  total_amt = 0;
  let shoppingCart = JSON.parse(localStorage.getItem("shoppingCart"));
  console.log("999", shoppingCart);
  if (shoppingCart == null) shoppingCart = [];
  shoppingCart.forEach((item) => {
    total_amt += parseInt(item.price);
    content += `
            <div class="cart_item">
            <img
                class="cart_item_img"
                src="${item.image}"
                alt="product image"
            />
            <div class="cart_item_title">
                ${item.name}
                </div>
            <div>$${item.price}</div>
            <button class="btn btn-secondary btn-remove" onclick="removeItem(${item.index})">Remove</button>
            </div>
            `;
  });
  document.getElementById("shoppingcart").innerHTML = content;
  document.getElementById("total_amt").innerHTML = "$" + total_amt;
  document.querySelector(".badge").innerHTML = shoppingCart.length;
  console.log("999", total_amt);
}
function removeItem(index) {
  let shoppingCart = JSON.parse(localStorage.getItem("shoppingCart"));
  if (shoppingCart == null) shoppingCart = [];

  shoppingCart.splice(index, 1);
  localStorage.setItem("shoppingCart", JSON.stringify(shoppingCart));
  displayShoppingCart();
}
