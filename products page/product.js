function addItem() {
  let item = {};
  item.name = document.querySelector(".item_title").innerHTML;
  item.price = document.querySelector(".item_amt").innerHTML;
  item.image = document.querySelector(".img_thumbnail").src;
  let shoppingcart = [];
  shoppingcart.push(item);
  localStorage.setItem("shoppingcart", JSON.stringify(shoppingcart));
  document.getElementById("");
  document.getElementById("").innerHTML = `
    <div class="cartgrid2">
    <div class="cartgriditem1">
      <div class="cartgriditem11">
        <img
          class="cartimg"
          alt="productimg"
          src="${item.image}"
        />
      </div>
      <div class="cartgriditem12">
        <h4>${item.name}</h4>
        <div><button class="removebtn">Remove</button></div>
      </div>
      <div class="cartgriditem13">
        <p class="cartprice">$${item.price}/p>
      </div>
    </div>
  </div>
    `;
  document.querySelector(".shopping_list").innerHTML += item;
}
