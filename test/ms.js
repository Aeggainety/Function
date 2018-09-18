// 京东秒杀测试

// 获取按钮对象
var obu = document.getElementById("test");

// 设置秒杀时间(默认为11月11号0时0分秒)
var targetDate = new Date(2017, 8, 25, 17, 18, 0);

// 获取当前时间 
var nowDate = new Date(); 
//调用函数
check_click();
//用递归实现,循环监听时间的变化, 
function check_click(){ 
    nowDate = new Date();

    //时间到,则进行点击
    if (nowDate >= targetDate){
//         obu.onclick();

    lin = obu.href;

    window.location.href=lin;
    
    }else{ //每隔 1秒检测一次时间 
        setTimeout(check_click,500);
    }

}

console.log("开始!"); 