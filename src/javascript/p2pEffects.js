//文档加载完毕就调用工具提示的方法
$(function () {
  $('#contanctus').tooltip();
});

//个人中心左侧选中激活样式
 $(".projectPage div").mouseover(function(){       
        //当前li添加激活样式，其他清除激活样式
        $(this).addClass("active").siblings().removeClass("active");
});
