console.log("dfgg服务器");
console.log("version: 1.0.0");
console.log("Website by: github.com/OLIMINATOR");
// 获取页面中的所有 <h1> 元素
var h1Elements = document.getElementsByTagName("h1");
// 如果存在至少一个 <h1> 元素
if (h1Elements.length > 0) {
    // 获取第一个 <h1> 元素的内容
    var firstH1Element = h1Elements[0];
    var title = firstH1Element.innerText;

    // 设置页面标题为第一个 <h1> 元素的内容
    document.title = title;
}

