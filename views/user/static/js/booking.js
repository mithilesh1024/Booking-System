var dod = document.getElementById("dod");
var dor = document.getElementById("dor");
var price = document.getElementById("price");
var init_price = price.value;
var order;
var ret;
var today = new Date().toISOString().split("T")[0];
dod.setAttribute("min", today);

function updatedod() {
  order = dod.value;
  dor.value = "";
  dor.setAttribute("min", order);
  price.value = init_price;
}

function updatedor() {
  ret = dor.value;
  var date1 = new Date(order);
  var date2 = new Date(ret);

  // To calculate the time difference of two dates
  var Difference_In_Time = date2.getTime() - date1.getTime();

  // To calculate the no. of days between two dates
  var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);

  var new_price = init_price * (Difference_In_Days + 1);
  price.value = new_price;
}
