var mybutton = document.getElementById("myBtn");

window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// search tabs JS
function mySearch() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("txtInputTable");
    filter = input.value.toUpperCase();
    table = document.getElementById("tableDetails");
    tr = table.getElementsByTagName("tr");

    // 先隐藏所有行
    for (i = 0; i < tr.length; i++) {
        tr[i].style.display = "none";
    }

    // 然后根据搜索结果显示匹配的行
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (var j = 0; j < td.length; j++) {
            txtValue = td[j].textContent || td[j].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                break; // Break out of inner loop if match found
            }
        }
    }

}


// 模拟购物车内容
var cartItems = [];


// 更新购物车数量提示
function updateCartCount() {
    var totalCount = 0;

    // 计算购物车中商品的总数量
    cartItems.forEach(function(item) {
        totalCount += item.quantity;
    });

    // 更新购物车数量提示
    $("#cartCount").text(totalCount);
}

// 更新购物车模态框
function updateCartModal() {
    $("#cartItems").empty(); // 清空购物车项目列表
    var total = 0;

    // 动态生成购物车项目
    cartItems.forEach(function(item) {
        var subtotal = item.price * item.quantity;
        total += subtotal;

        var row = '<tr>' +
            '<td>' + item.name + '</td>' +
            '<td>$' + item.price.toFixed(2) + '</td>' +
            '<td>' + item.quantity + '</td>' +
            '<td>$' + subtotal.toFixed(2) + '</td>' +
            '</tr>';

        $("#cartItems").append(row);
    });

    $("#cartTotal").text(total.toFixed(2));

    // 打开购物车模态框
    $("#cartModal").modal("show");

    // 更新导航栏中的数量提示
    updateCartCount();
}

// 清空购物车内容函数
function clearCartOnLoad() {
    cartItems = []; // 清空购物车内容
    updateCartModal(); // 更新购物车弹出窗口
    $('#cartModal').modal('hide'); // 隐藏购物车窗口
}

// 页面加载时执行
$(document).ready(function() {
    // 清空购物车内容并更新页面显示
    clearCartOnLoad();

});

// 加入购物车按钮点击事件
$(".add-to-cart").click(function() {
    var item = {
        name: $(this).parent().find(".card-title").text(),
        price: parseFloat($(this).parent().find(".card-price").text().replace("定價 : ", "")),
        quantity: 1
    };

    cartItems.push(item); // 将商品添加到购物车内容中

    updateCartModal(); // 更新购物车弹出窗口
});


// 保存购物车内容
function saveCart() {
    localStorage.setItem("cartItems", JSON.stringify(cartItems));
    $('#cartModal').modal('hide');
}

// 页面加载时恢复购物车内容
$(document).ready(function() {
    var storedCart = localStorage.getItem("cartItems");
    if (storedCart) {
        cartItems = JSON.parse(storedCart);
        updateCartModal();
    }
});

