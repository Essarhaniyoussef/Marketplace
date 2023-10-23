function showClients() {
  $.ajax({
    url: "adminView/viewClients.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}

function showCategories() {
  $.ajax({
    url: "adminView/viewCategories.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}

function showProduits() {
  $.ajax({
    url: "adminView/viewProduits.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}

function showCommandes() {
  $.ajax({
    url: "adminView/viewCommandes.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}

function categoryDelete(id) {
  $.ajax({
    url: "controller/catDeleteController.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      alert("Category Successfully deleted");
      $("form").trigger("reset");
      showCategories();
    },
  });
}

function itemDelete(id) {
  $.ajax({
    url: "controller/deleteItemController.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      alert("Items Successfully deleted");
      $("form").trigger("reset");
      showProduits();
    },
  });
}

function itemEditForm(id) {
  $.ajax({
    url: "adminView/editItemForm.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}

function updateItems() {
  var product_id = $("#product_id").val();
  var p_name = $("#p_name").val();
  var p_price = $("#p_price").val();
  var category = $("#category").val();
  var existingImage = $("#existingImage").val();
  var newImage = $("#newImage")[0].files[0];
  var fd = new FormData();
  fd.append("product_id", product_id);
  fd.append("p_name", p_name);
  fd.append("p_price", p_price);
  fd.append("category", category);
  fd.append("existingImage", existingImage);
  fd.append("newImage", newImage);

  $.ajax({
    url: "controller/updateItemController.php",
    method: "post",
    data: fd,
    processData: false,
    contentType: false,
    success: function (data) {
      alert("Data Update Success.");
      $("form").trigger("reset");
      showProduits();
    },
  });
}

function addItems() {
  var p_name = $("#p_name").val();
  var p_desc = $("#p_desc").val();
  var p_price = $("#p_price").val();
  var category = $("#category").val();
  var upload = $("#upload").val();
  var file = $("#file")[0].files[0];

  var fd = new FormData();
  fd.append("p_name", p_name);
  fd.append("p_desc", p_desc);
  fd.append("p_price", p_price);
  fd.append("category", category);
  fd.append("file", file);
  fd.append("upload", upload);
  $.ajax({
    url: "controller/addItemController.php",
    method: "post",
    data: fd,
    processData: false,
    contentType: false,
    success: function (data) {
      alert("Product Added successfully.");
      $("form").trigger("reset");
      showProduits();
    },
  });
}
